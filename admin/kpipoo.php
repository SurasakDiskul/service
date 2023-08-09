<?php
session_start();
include('../php/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./css.php') ?>
</head>
<body>
  <div class="page-container">
<?php include('./sidebar.php') ?>
    <?php include('./navbar.php') ?>
    <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>KPI</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle text-dark" data-toggle="dropdown"><?php echo $_SESSION['membername'] ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"  onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่?')" href="../logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="main-content">
<!------------------------------------------------------------------------------------------------------------------------>
        <?php
        $queryNB = "SELECT sum(datediff) FROM `tbborrow`";
        $resultNB = mysqli_query($conn, $queryNB);
        $rowNB = mysqli_fetch_array($resultNB);
        $sumNB = $rowNB[0];

        $dateNB= $sumNB;
        $KPINB1 = 365-$dateNB;
        $KPINB2 = ($KPINB1/365)*100;
        $KPINB = number_format( $KPINB2, 2 );
        ?>

  <?php include('./kpi.php') ?>
 <hr>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  <div class="p-3">    
  <legend>KPI (นางสาวกัลยรัตน์ นิลคง)</legend>
  <div class="row">
        <hr>
        <div class="col-5">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>การยืมและคืนโน๊ตบุ๊คแผนก IT & ERP</span>
                  <h4><?php echo $KPINB ?> %</h4>
                </div>
                <div class="col-2 text-end">
                <?php if($KPINB <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($KPINB >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    </div>
    </div>
        
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  
  <?php include('./footer.php') ?>
  </main>
  <?php include('./js.php') ?>
</body>

</html>