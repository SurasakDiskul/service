<?php
session_start();
include('../php/connect.php');
?>
<?php
if ($_SESSION['membername'] != '') {
  # code...

    header("refresh: 30;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./css.php');
$sql99 = "SELECT * FROM tbservice ORDER BY serid";
$result = mysqli_query($conn,$sql99);
$row = mysqli_fetch_assoc($result);
?>
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-warning position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../T-11.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">IT SERVICE SYSTEM</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="navbar-collapse   w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./schedule.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Schedule</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./service.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Service</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./borrow.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Borrow Notebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./project.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">New Project</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./ma.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">ค่าบริการ MA (รายปี)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./equipment.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">IT Equipment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./review.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-like-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Review</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">โครงสร้าง Network</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./review.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <img src="../logo.png" alt="" width="100%">
            </div>
            <span class="nav-link-text ms-1">CJL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./review.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <img src="../auto.png" alt="" width="100%">
            </div>
            <span class="nav-link-text ms-1">CJAUTO</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./review.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <img src="../T-31.jpg" alt="" width="100%">
            </div>
            <span class="nav-link-text ms-1">CJP</span>
          </a>
        </li>
        
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <a class="btn btn-danger btn-sm mb-0 w-100" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่?')" href="../logout.php" type="button">Logout</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <?php include('./navbar.php') ?>
    <div class="container-fluid py-4">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Schedule</h6>
            </div>
            <iframe src="../calender/index.php" width="100%" height="1000" border="0" scrolling="no" frameborder="0" style = "border:0px;overflow:hidden;"></iframe>
          </div>
        </div>
      </div>
    <?php include('./footer.php') ?>
    </div>
  </main>
  <?php include('./script.php') ?>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });
    </script>
</body>

</html>
  <?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>