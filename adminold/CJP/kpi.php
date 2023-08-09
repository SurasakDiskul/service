    <?php
        require_once('../php/connect.php');
        //QUANTITY OF SERVICE
        $sql0= "SELECT * FROM tbservice";
        $result0 = mysqli_query($conn,$sql0);
        $row0 = mysqli_num_rows($result0);
        if($row0 != '0'){
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //KPI IT START
        $sqlit = "SELECT * FROM tbservice WHERE serstatus = 'Fully Complete'";
        $resultit = mysqli_query($conn,$sqlit);
        $rowit = mysqli_num_rows($resultit);
        if($rowit != '0'){
        $KPIIT2 = ($rowit/$row0)*100;
        $KPIIT = number_format( $KPIIT2, 2 );
        }else{
        $KPIIT=0;
        }
        //KPI IT END
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //KPI NEST START
        $sqlnest = "SELECT sum(employee1) FROM tbservice";
        $resultnest = mysqli_query($conn,$sqlnest);
        $rownest = mysqli_fetch_array($resultnest);
        $sumnest = $rownest[0];
        if($sumnest != '0'){
        $KPInest2 = ($sumnest/$row0)*100;
        $KPINEST = number_format( $KPInest2, 2 );
        }else{
          $KPINEST=0;
          }
        //KPI NEST END
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
       //KPI AOOD START
       $sqlAOOD = "SELECT sum(employee2) FROM tbservice";
       $resultAOOD = mysqli_query($conn,$sqlAOOD);
       $rowAOOD = mysqli_fetch_array($resultAOOD);
       $sumAOOD = $rowAOOD[0];
       if($sumAOOD != '0'){
       $KPIAOOD2 = ($sumAOOD/$row0)*100;
       $KPIAOOD = number_format( $KPIAOOD2, 2 );
       }else{
        $KPIAOOD=0;
        }
       //KPI AOOD END
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //KPI KHAN START
        $sqlKHAN = "SELECT sum(employee3) FROM tbservice";
        $resultKHAN = mysqli_query($conn,$sqlKHAN);
        $rowKHAN = mysqli_fetch_array($resultKHAN);
        $sumKHAN = $rowKHAN[0];
        if($sumKHAN != '0'){
        $KPIKHAN2 = ($sumKHAN/$row0)*100;
        $KPIKHAN = number_format( $KPIKHAN2, 2 );
      }else{
        $KPIKHAN=0;
        }
        //KPI KHAN END
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //KPI PUK START
        $sqlPUK = "SELECT sum(employee4) FROM tbservice";
        $resultPUK = mysqli_query($conn,$sqlPUK);
        $rowPUK = mysqli_fetch_array($resultPUK);
        $sumPUK = $rowPUK[0];
        if($sumPUK != '0'){
        $KPIPUK2 = ($sumPUK/$row0)*100;
        $KPIPUK = number_format( $KPIPUK2, 2 );
      }else{
        $KPIPUK=0;
        }
        //KPI PUK END
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }else{
          $KPIIT = 0;
          $KPINEST = 0;
          $KPIAOOD = 0;
          $KPIKHAN = 0;
          $KPIPUK = 0;
        }
        //KPI NB START
        $queryNB = "SELECT sum(datediff) FROM `tbborrow`";
        $resultNB = mysqli_query($conn, $queryNB);
        $rowNB = mysqli_fetch_array($resultNB);
        $sumNB = $rowNB[0];

        $dateNB= $sumNB;
        $KPINB1 = 365-$dateNB;
        $KPINB2 = ($KPINB1/365)*100;
        $KPINB = number_format( $KPINB2, 2 );
        //KPI NB END
    ?>
    <!------------------------------------------------KPI--------------------------------------------------------------------------------------------------------->
    <div class="container-fluid py-4">
      <div class="row">
        <?php if($KPIIT >= 50) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpiit.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI โดยรวมของแผนก IT & ERP</p>
                    <h5 class="font-weight-bolder text-white">
                      <?php echo $KPIIT ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-chart-bar-32 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPIIT < 50) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpiit.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI โดยรวมของแผนก IT & ERP</p>
                    <h5 class="font-weight-bolder text-white">
                      <?php echo $KPIIT ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-chart-bar-32 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>

        <?php if($KPINEST >= 25) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpinest.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายวราเทพ เหรียญโมรา)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINEST ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPINEST < 25) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpinest.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายวราเทพ เหรียญโมรา)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINEST ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>

       <?php if($KPIAOOD >= 25) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpiaood.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นาย จารุวัฒน์​ อุ​พัน​วัน)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIAOOD ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPIAOOD < 25) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpiaood.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นาย จารุวัฒน์​ อุ​พัน​วัน)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIAOOD ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>
<!----------------------------------------KPI2------------------------------------------------------------------------------------------------------------>
        <div class="container-fluid py-4">
      <div class="row">
      <?php if($KPINB >= 25) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpipoo.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นางสาวกัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPINB < 25) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpipoo.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นางสาวกัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>

        <?php if($KPIKHAN >= 25) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpikhan.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายจตุพร อินทร์งาม)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIKHAN ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPIKHAN < 25) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpikhan.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายจตุพร อินทร์งาม)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIKHAN ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>

       <?php if($KPIPUK >= 25) { ?>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpipuk.php">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายสุรศักดิ์ ดิศกุล)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIPUK ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPIPUK < 25) { ?>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="./kpipuk.php">
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (นายสุรศักดิ์ ดิศกุล)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPIPUK ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>
      </div>
        </div>