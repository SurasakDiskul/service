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

  <?php include('./kpi.php') ?>
  <?php include('./datakpiit.php') ?>
 <hr>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  <legend>KPI โดยรวมของแผนก IT & ERP</legend>
  <hr>
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-8">
                  <span>Network (อินเทอร์เน็ต)</span>
                  <h6><?php echo $employee11.$employee21.$employee31.$employee41 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee12.$employee22.$employee32.$employee42 ?></h6>
                </div>
                <div class="col-4 text-end">
                   
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
                  <h6><?php echo $employee13.$employee23.$employee33.$employee43 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee14.$employee24.$employee34.$employee44?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee15.$employee25.$employee35.$employee45 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee16.$employee26.$employee36.$employee46 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee17.$employee27.$employee37.$employee47 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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
                  <h6><?php echo $employee18.$employee28.$employee38.$employee48 ?></h6>
                </div>
                <div class="col-4 text-end">
                    
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