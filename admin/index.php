<?php 
session_start();
include('../php/connect.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('./css.php') ?>
<style>
        .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

    </style>
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
<!--chart data-->

<?php
//<!-----------------------------------------------------0----------------------------------------------------->

    $sql_m1="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-01-01' AND '2023-01-31' AND serstatus = 'Fully Complete'";
    $result_m1 = mysqli_query($conn,$sql_m1);
    $row_m1 = mysqli_fetch_assoc($result_m1);
    
//<!-----------------------------------------------------1----------------------------------------------------->

    $sql_m2="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-02-01' AND '2023-02-28' AND serstatus = 'Fully Complete'";
    $result_m2 = mysqli_query($conn,$sql_m2);
    $row_m2 = mysqli_fetch_assoc($result_m2);
    
//<!-----------------------------------------------------2----------------------------------------------------->

    $sql_m3="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-03-01' AND '2023-03-31' AND serstatus = 'Fully Complete'";
    $result_m3 = mysqli_query($conn,$sql_m3);
    $row_m3 = mysqli_fetch_assoc($result_m3);

//<!-----------------------------------------------------3----------------------------------------------------->   

    $sql_m4="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-04-01' AND '2023-04-30' AND serstatus = 'Fully Complete'";
    $result_m4 = mysqli_query($conn,$sql_m4);
    $row_m4 = mysqli_fetch_assoc($result_m4);
    
//<!-----------------------------------------------------4----------------------------------------------------->   

    $sql_m5="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-05-01' AND '2023-05-31' AND serstatus = 'Fully Complete'";
    $result_m5 = mysqli_query($conn,$sql_m5);
    $row_m5 = mysqli_fetch_assoc($result_m5);
    
//<!-----------------------------------------------------5----------------------------------------------------->

    $sql_m6="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-06-01' AND '2023-06-30' AND serstatus = 'Fully Complete'";
    $result_m6 = mysqli_query($conn,$sql_m6);
    $row_m6 = mysqli_fetch_assoc($result_m6);
    
//<!-----------------------------------------------------6----------------------------------------------------->

    $sql_m7="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-07-01' AND '2023-07-31' AND serstatus = 'Fully Complete'";
    $result_m7 = mysqli_query($conn,$sql_m7);
    $row_m7 = mysqli_fetch_assoc($result_m7);
    
//<!-----------------------------------------------------7----------------------------------------------------->   

    $sql_m8="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-08-01' AND '2023-08-31' AND serstatus = 'Fully Complete'";
    $result_m8 = mysqli_query($conn,$sql_m8);
    $row_m8 = mysqli_fetch_assoc($result_m8);
   
//<!-----------------------------------------------------8----------------------------------------------------->

    $sql_m9="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-09-01' AND '2023-09-30' AND serstatus = 'Fully Complete'";
    $result_m9 = mysqli_query($conn,$sql_m9);
    $row_m9 = mysqli_fetch_assoc($result_m9);
    
//<!-----------------------------------------------------9----------------------------------------------------->    

    $sql_m10="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-10-01' AND '2023-10-31' AND serstatus = 'Fully Complete'";
    $result_m10 = mysqli_query($conn,$sql_m10);
    $row_m10 = mysqli_fetch_assoc($result_m10);
   
//<!-----------------------------------------------------10----------------------------------------------------->    

    $sql_m11="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-11-01' AND '2023-11-30' AND serstatus = 'Fully Complete'";
    $result_m11 = mysqli_query($conn,$sql_m11);
    $row_m11 = mysqli_fetch_assoc($result_m11);

//<!-----------------------------------------------------11----------------------------------------------------->

    $sql_m12="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-12-01' AND '2023-12-31' AND serstatus = 'Fully Complete'";
    $result_m12 = mysqli_query($conn,$sql_m12);
    $row_m12 = mysqli_fetch_assoc($result_m12);

//<!-----------------------------------------------------12----------------------------------------------------->
?>
<!--chart data-->
</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('./sidebar.php');?>
        <div class="main-content">
            <?php include('./navbar.php'); ?>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
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
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                    <div class="col-md-3">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">SERVICE HARDWARE<div class="icon"><i class="fa fa-laptop"></i></div></h5>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?php echo number_format("$sum_re1") ?> <span>บาท</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">SERVICE SOFTWARE<div class="icon"><i class="fa fa-windows"></i></div></h5>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                    <h2><?php echo number_format("$sum_re2") ?> <span>บาท</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">SERVICE โปรแกรม<div class="icon"><i class="fa fa-code-fork"></i></div></h5>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                    <h2><?php echo number_format("$sum_re3") ?> <span>บาท</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">SERVICE อื่นๆ<div class="icon"><i class="fa fa-gears"></i></div></h5>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                    <h2><?php echo number_format("$sum_re4") ?> <span>บาท</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="row mt-4">
      <div class="col-1"></div>
      <div class="col-lg-10 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-body col-12">
              <!--Highchart-->
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <figure class="highcharts-figure col-lg-12">
                    <div id="container" class="col-12"></div>
            </figure>
        <!--Highchart-->
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        <div class="p-3">
  <legend>ตัวชี้วัด (Key performance indicator : KPI)</legend>
  <?php include('./kpi.php') ?>
</div>
               
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <?php include('./footer.php') ?>
    </div>
    <!-- page container area end -->
<?php include('./js.php') ?>
    <script>
                // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: 'ยอดเงินรวมของการ SERVICE ทั้งหมด'
    },
    subtitle: {
        align: 'center',
        text: 'Source: <a href="" target="_blank">IT SERVICE SYSTEM</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนเงิน'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: ''
            }
        }
    },

    tooltip: {
        headerFormat: '',
        pointFormat: ' <b>{point.y:.2f}</b>: บาท<br/>'
    },

    series: [
        {
            name: " ",
            colorByPoint: true,
            data: [
                {
                    name: "ม.ค.",
                    y: <?php echo $row_m1['price'] ?>,
                    
                },
                {
                    name: "ก.พ.",
                    y: <?php echo $row_m2['price'] ?>,
                    
                },
                {
                    name: "มี.ค.",
                    y: <?php echo $row_m3['price'] ?>,
                    
                },
                {
                    name: "เม.ย.",
                    y: <?php echo $row_m4['price'] ?>,
                    
                },
                {
                    name: "พ.ค.",
                    y: <?php echo $row_m5['price'] ?>,
                   
                },
                {
                    name: "มิ.ย.",
                    y:<?php echo $row_m6['price'] ?>,
                    
                },
                {
                    name: "ก.ค.",
                    y: <?php echo $row_m7['price'] ?>,
                    
                },
                {
                    name: "ส.ค",
                    y: <?php echo $row_m8['price'] ?>,
                    
                },
                {
                    name: "ก.ย",
                    y: <?php echo $row_m9['price'] ?>,
                    
                },
                {
                    name: "ต.ค",
                    y: <?php echo $row_m10['price'] ?>,
                    
                },
                {
                    name: "พ.ย.",
                    y: <?php echo $row_m11['price'] ?>,
                   
                },
                {
                    name: "ธ.ค.",
                    y:<?php echo $row_m12['price'] ?>,
                    
                }
            ]
        }
    ]
            });

            </script>
</body>

</html>
