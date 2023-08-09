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
        <legend>KPI (นายจตุพร อินทร์งาม)</legend>
        <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h5><?php echo $em31 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                  <?php if($em31 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em31 >=50){ ?>
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
                  <h5><?php echo $em32 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em32 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em32 >=50){ ?>
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
                  <h5><?php echo $em33 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em33 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em33 >=50){ ?>
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
                  <h5><?php echo $em34 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em34 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em34 >=50){ ?>
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
                  <h5><?php echo $em35 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em35 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em35 >=50){ ?>
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
                  <h5><?php echo $em36 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em36 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em36 >=50){ ?>
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
                  <h5><?php echo $em37 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em37 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em37 >=50){ ?>
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
                  <h5><?php echo $em38 ?> %</h5>
                </div>
                <div class="col-4 text-end">
                <?php if($em38 <50){?>
                    <i class="ni ni-bold-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em38 >=50){ ?>
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