<?php
session_start();
include('../php/connect.php');
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
        <legend>KPI (นายสุรศักดิ์ ดิศกุล)</legend>
        <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h5><?php echo $em41 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                  <?php if($em41 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em41 >=50){ ?>
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
                  <h5><?php echo $em42 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em42 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em42 >=50){ ?>
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
                  <h5><?php echo $em43 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em43 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em43 >=50){ ?>
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
                  <h5><?php echo $em44 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em44 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em44 >=50){ ?>
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
                  <h5><?php echo $em45 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em45 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em45 >=50){ ?>
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
                  <h5><?php echo $em46 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em46 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em46 >=50){ ?>
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
                  <h5><?php echo $em47 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em47 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em47 >=50){ ?>
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
                  <h5><?php echo $em48 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em48 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em48 >=50){ ?>
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