<?php 
session_start();
include('../php/connect.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('./css.php') ?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<?php
$sql_re1 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` ='Fully Complete' AND `sername` ='Hardware (อุปกรณ์คอมพิวเตอร์)';";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_fetch_row($result_re1);
$sum_re1 = $row_re1[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='Software (โปรแกรมในคอมพิวเตอร์)'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_fetch_row($result_re2);
$sum_re2 = $row_re2[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_fetch_row($result_re3);
$sum_re3 = $row_re3[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re4 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi' or `sername` ='อื่นๆ (โปรดใส่รายละเอียดที่ช่องหมายเหตุ)'";
$result_re4 = mysqli_query($conn, $sql_re4);
$row_re4 = mysqli_fetch_row($result_re4);
$sum_re4 = $row_re4[0];
?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <img src="../T-11.png" alt="logo" width="100px">
                    <h4 class="user-name dropdown-toggle">IT Service System</h4>
                </div>
            </div>
            
            <div class="main-menu">
                <div class="menu-inner">
                    <nav> 
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="./index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="./schedule.php" aria-expanded="true"><i class="ti-calendar"></i><span>Schedule</span></a>
                            </li>
                            <li>
                                <a href="./service.php" aria-expanded="true"><i class="fa fa-cogs"></i><span>Service</span></a>
                            </li>
                            <li>
                                <a href="./borrow.php" aria-expanded="true"><i class="fa fa-laptop"></i><span>Borrow Notebook</span></a>
                            </li>
                            <li>
                                <a href="./project.php" aria-expanded="true"><i class="fa fa-window-maximize"></i><span>New Project</span></a>
                            </li>
                            <li>
                                <a href="./ma.php" aria-expanded="true"><i class="fa fa-credit-card"></i><span>ค่าบริการ MA (รายปี)</span></a>
                            </li>
                            <li>
                                <a href="./equipment.php"><i class="fa fa-inbox"></i> <span>IT Equipment</span></a>
                            </li>
                            <li class="active">
                                <a href="./review.php"><i class="fa fa-thumbs-up"></i> <span>Review</span></a>
                            </li>
                            <li>
                                <a href="./network.php" aria-expanded="true"><i class="fa fa-user-circle-o"></i> <span>โครงสร้าง Network</span></a>
                            </li>
                            <li>
                                <a onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่?')" href="../logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <?php include('./navbar.php'); ?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Review</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Review</span></li>
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
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- overview area start -->
                <div class="row p-3">
        <div class="col-12">
          
          
        <iframe src="../rating/index.php" width="100%" height="1100" border="0" scrolling="no" frameborder="0" style = "border:0px;overflow:hidden;"></iframe>
         
        </div>
      </div>
        </div>
        <!-- main content area end -->
        <?php include('./footer.php') ?>
    </div>
    <!-- page container area end -->
<?php include('./js.php') ?>
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
