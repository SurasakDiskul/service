<?php
session_start();
include('../../php/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./css.php') ?>
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-warning position-absolute w-100"></div>
  <?php include('./sidebar.php') ?>
  <main class="main-content position-relative border-radius-lg ">
    <?php include('./navbar.php') ?>
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
        <legend>KPI (นางสาวกัลยรัตน์ นิลคง)</legend>
        <hr>
        <div class="col-5">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>การยืมและคืนโน๊ตบุ๊คแผนก IT & ERP</span>
                  <h4><?php echo $KPINB ?> %</h4>
                </div>
                <div class="col-4 text-end">
                <?php if($KPINB <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($KPINB >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  
  <?php include('./footer.php') ?>
  </main>
  <?php include('./script.php') ?>
</body>

</html>