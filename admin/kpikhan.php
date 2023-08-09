<?php
session_start();
include('../php/connect.php');
?>
<!doctype html>
<html class="no-js" lang="en">
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
<?php include('./datakpi.php') ?>
  <?php include('./kpi.php') ?>
 <hr>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  <div class="p-3">     
  <legend>KPI (นายจตุพร อินทร์งาม)</legend>
  <div class="row">
        <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h5><?php echo $em31 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                  <?php if($em31 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em31 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>Hardware (อุปกรณ์คอมพิวเตอร์)</span>
                  <h5><?php echo $em32 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em32 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em32 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>Software (โปรแกรมในคอมพิวเตอร์)</span>
                  <h5><?php echo $em33 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em33 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em33 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>กล้องวงจรปิด (CCTV)</span>
                  <h5><?php echo $em34 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em34 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em34 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>ระบบ ERP Eflowsys</span>
                  <h5><?php echo $em35 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em35 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em35 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>โปรแกรมใช้งานภายในบริษัท (Coding)</span>
                  <h5><?php echo $em36 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em36 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em36 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)</span>
                  <h5><?php echo $em37 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em37 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em37 >=50){ ?>
                    <i class="fa fa-arrow-up text-lg text-success opacity-10" aria-hidden="true"></i>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>จุดติดตั้ง Wi-Fi</span>
                  <h5><?php echo $em38 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em38 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em38 >=50){ ?>
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