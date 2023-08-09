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
<?php include('./datakpi.php') ?>
  <?php include('./kpi.php') ?>
 <hr>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
        <legend>KPI (นายอภิเดช พรรณลำเจียก)</legend>
        <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h5><?php echo $em21 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                  <?php if($em21 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em21 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Hardware (อุปกรณ์คอมพิวเตอร์)</span>
                  <h5><?php echo $em22 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em22 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em22 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Software (โปรแกรมในคอมพิวเตอร์)</span>
                  <h5><?php echo $em23 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em23 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em23 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>กล้องวงจรปิด (CCTV)</span>
                  <h5><?php echo $em24 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em24 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em24 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>ระบบ ERP Eflowsys</span>
                  <h5><?php echo $em25 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em25 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em25 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>โปรแกรมใช้งานภายในบริษัท (Coding)</span>
                  <h5><?php echo $em26 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em26 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em26 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)</span>
                  <h5><?php echo $em27 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em27 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em27 >=50){ ?>
                    <i class="ni ni-bold-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>จุดติดตั้ง Wi-Fi</span>
                  <h5><?php echo $em28 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em28 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em28 >=50){ ?>
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