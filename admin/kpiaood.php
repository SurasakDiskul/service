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
  <legend>KPI (นาย จารุวัฒน์​ อุ​พัน​วัน)</legend>
        <div class="row">
        <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-10">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h5><?php echo $em21 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                  <?php if($em21 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em21 >=50){ ?>
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
                  <h5><?php echo $em22 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em22 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em22 >=50){ ?>
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
                  <h5><?php echo $em23 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em23 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em23 >=50){ ?>
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
                  <h5><?php echo $em24 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em24 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em24 >=50){ ?>
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
                  <h5><?php echo $em25 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em25 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em25 >=50){ ?>
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
                  <h5><?php echo $em26 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em26 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em26 >=50){ ?>
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
                  <h5><?php echo $em27 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em27 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em27 >=50){ ?>
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
                  <h5><?php echo $em28 ?> %</h5>
                </div>
                <div class="col-2 text-end">
                <?php if($em28 <50){?>
                    <i class="fa fa-arrow-down text-lg text-danger opacity-10" aria-hidden="true"></i>
                  <?php }elseif($em28 >=50){ ?>
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