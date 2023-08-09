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
                                <a class="dropdown-item" href="../logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="main-content">
<!------------------------------------------------------------------------------------------------------------------------>
<?php include('./datakpiit.php') ?>
  <?php include('./kpi.php') ?>
 <hr>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  <div class="p-3">
  <legend>KPI โดยรวมของแผนก IT & ERP</legend>
  <div class="row">
  <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>Network (อินเทอร์เน็ต)</b>
                  <h6><?php echo $employee11.$employee21.$employee31.$employee41 ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>Hardware (อุปกรณ์คอมพิวเตอร์)</b>
                  <h6><?php echo $employee12.$employee22.$employee32.$employee42 ?></h6>
                </div>
            
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>Software (โปรแกรมในคอมพิวเตอร์)</b>
                  <h6><?php echo $employee13.$employee23.$employee33.$employee43 ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>กล้องวงจรปิด (CCTV)</b>
                  <h6><?php echo $employee14.$employee24.$employee34.$employee44?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>ระบบ ERP Eflowsys</b>
                  <h6><?php echo $employee15.$employee25.$employee35.$employee45 ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>โปรแกรมใช้งานภายในบริษัท (Coding)</b>
                  <h6><?php echo $employee16.$employee26.$employee36.$employee46 ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)</b>
                  <h6><?php echo $employee17.$employee27.$employee37.$employee47 ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  <b>จุดติดตั้ง Wi-Fi</b>
                  <h6><?php echo $employee18.$employee28.$employee38.$employee48 ?></h6>
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