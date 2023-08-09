<?php
session_start();
include('../../php/connect.php');
?>
<?php
if ($_SESSION['membername'] != '' ) {

    header("refresh: 600;");
?>
<!DOCTYPE html>
<html lang="en">
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
</head>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<?php
$sql_re1 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` ='Fully Complete' AND `sername` ='Hardware (อุปกรณ์คอมพิวเตอร์)' AND `office` = 'CJL';";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_fetch_row($result_re1);
$sum_re1 = $row_re1[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='Software (โปรแกรมในคอมพิวเตอร์)' AND `office` = 'CJL'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_fetch_row($result_re2);
$sum_re2 = $row_re2[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='โปรแกรมใช้งานภายในบริษัท (Coding)' AND `office` = 'CJL'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_fetch_row($result_re3);
$sum_re3 = $row_re3[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re4 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `office` = 'CJL' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi' ";
$result_re4 = mysqli_query($conn, $sql_re4);
$row_re4 = mysqli_fetch_row($result_re4);
$sum_re4 = $row_re4[0];
?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<!--chart data-->

<?php
//<!-----------------------------------------------------0----------------------------------------------------->

    $sql_m1="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-01-01' AND '2023-01-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m1 = mysqli_query($conn,$sql_m1);
    $row_m1 = mysqli_fetch_assoc($result_m1);
    
//<!-----------------------------------------------------1----------------------------------------------------->

    $sql_m2="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-02-01' AND '2023-02-28' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m2 = mysqli_query($conn,$sql_m2);
    $row_m2 = mysqli_fetch_assoc($result_m2);
    
//<!-----------------------------------------------------2----------------------------------------------------->

    $sql_m3="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-03-01' AND '2023-03-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m3 = mysqli_query($conn,$sql_m3);
    $row_m3 = mysqli_fetch_assoc($result_m3);

//<!-----------------------------------------------------3----------------------------------------------------->   

    $sql_m4="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-04-01' AND '2023-04-30' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m4 = mysqli_query($conn,$sql_m4);
    $row_m4 = mysqli_fetch_assoc($result_m4);
    
//<!-----------------------------------------------------4----------------------------------------------------->   

    $sql_m5="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-05-01' AND '2023-01-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m5 = mysqli_query($conn,$sql_m5);
    $row_m5 = mysqli_fetch_assoc($result_m5);
    
//<!-----------------------------------------------------5----------------------------------------------------->

    $sql_m6="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-06-01' AND '2023-06-30' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m6 = mysqli_query($conn,$sql_m6);
    $row_m6 = mysqli_fetch_assoc($result_m6);
    
//<!-----------------------------------------------------6----------------------------------------------------->

    $sql_m7="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-07-01' AND '2023-07-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m7 = mysqli_query($conn,$sql_m7);
    $row_m7 = mysqli_fetch_assoc($result_m7);
    
//<!-----------------------------------------------------7----------------------------------------------------->   

    $sql_m8="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-08-01' AND '2023-08-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m8 = mysqli_query($conn,$sql_m8);
    $row_m8 = mysqli_fetch_assoc($result_m8);
   
//<!-----------------------------------------------------8----------------------------------------------------->

    $sql_m9="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-09-01' AND '2023-09-30' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m9 = mysqli_query($conn,$sql_m9);
    $row_m9 = mysqli_fetch_assoc($result_m9);
    
//<!-----------------------------------------------------9----------------------------------------------------->    

    $sql_m10="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-10-01' AND '2023-10-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m10 = mysqli_query($conn,$sql_m10);
    $row_m10 = mysqli_fetch_assoc($result_m10);
   
//<!-----------------------------------------------------10----------------------------------------------------->    

    $sql_m11="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-11-01' AND '2023-11-30' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m11 = mysqli_query($conn,$sql_m11);
    $row_m11 = mysqli_fetch_assoc($result_m11);

//<!-----------------------------------------------------11----------------------------------------------------->

    $sql_m12="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE 	startdate BETWEEN '2023-12-01' AND '2023-12-31' AND serstatus = 'Fully Complete' AND `office` = 'CJL'";
    $result_m12 = mysqli_query($conn,$sql_m12);
    $row_m12 = mysqli_fetch_assoc($result_m12);

//<!-----------------------------------------------------12----------------------------------------------------->
?>
<!--chart data-->
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-warning position-absolute w-100"></div>
  <?php include('./sidebar.php') ?>
  <main class="main-content position-relative border-radius-lg ">
    <?php include('./navbar.php') ?>
<!------------------------------------------------------------------------------------------------------------------------>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="./index1.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service Hardware (อุปกรณ์คอมพิวเตอร์) ของบริษัท CJL</p>
                    <h5 class="font-weight-bolder">
                      <?php echo number_format("$sum_re1") ?> บาท
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="./index2.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service Software (โปรแกรมในคอมพิวเตอร์) ของบริษัท CJL</p>
                    <h5 class="font-weight-bolder">
                    <?php echo number_format("$sum_re2") ?> บาท
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="./index3.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service โปรแกรมใช้งานภายในบริษัท (Coding) ของบริษัท CJL</p>
                    <h5 class="font-weight-bolder">
                    <?php echo number_format("$sum_re3") ?> บาท
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6">
          <a href="./index4.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service อื่นๆ ของบริษัท CJL</p>
                    <h5 class="font-weight-bolder">
                    <?php echo number_format("$sum_re4") ?> บาท
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>
<!------------------------------------------------------------------------------------------------------------------------>
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
        <br>
        <hr>
        <div class="row">
          <div class="col-3">
          </div>
          <div class="col-2">
            <a href="../index.php" type="button" class="btn btn-warning">ALL</a>
          </div>
          <div class="col-2">
            <a href="./index.php" type="button" class="btn btn-warning">CJL</a>
          </div>
          <div class="col-2">
            <a href="../CJA/index.php" type="button" class="btn btn-warning">CJA</a>
          </div>
          <div class="col-2">
            <a href="../CJP/index.php" type="button" class="btn btn-warning">CJP</a>
          </div>
          <div class="col-1">
          </div>
        </div>
        <br>
        <hr>
        <!--Table-->
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">To Do List (งานด่วน!!)</h6>
              </div>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                        <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbservice` where timer = 'ด่วน' and serstatus !='Fully Complete' limit 5";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="myTABLE" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                            <th width="5%">ID</th>
                            <th width="5%">Issue</th>
                            <th width="10%">Remark </th>
                            <th width="20%"> Customer </th>
                            <th width="10%"> Office </th>
                            <th width="15%"> ServiceDate </th>
                            <th width="10%"> Queue </th>
                            <th width="10%"> Status </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['sername'] ?></td>
                            <td><?php echo $row['remark'] ?></td>
                            <td><?php echo $row['membername'] ?></td>
                            <td><?php echo $row['office'] ?></td>
                            <td><?php echo $row['startdate'] ?></td>
                            <td class="text_danger"><?php echo $row['timer'] ?></td>
                            <td><?php echo $row['serstatus'] ?></td>
                          <td>
                          <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['serid'] ?>">VIEW </a>
                          </td>
                          </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['serid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['serid'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Issue : <?php echo $row['sername'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Service Date : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">Queue : <?php echo $row['timer'] ?></p>
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../issue_img/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../issue_img/<?php echo $row['img'] ?>" /></a></p>
                                <input type="hidden" class="form-control " id="status" name="status" value="<?php echo $row['serstatus'] ?>" readonly>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['serstatus'] ?>" readonly>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">ตกลง</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Modal end-->
                          <?php endwhile; ?>
                        </tbody>
                      </table>
          </div>
        </div>
    </div>
  </div>
  <hr>
  <legend>ตัวชี้วัด (Key performance indicator : KPI)</legend>
  <?php include('./kpi.php') ?>
    <?php include('./footer.php') ?>
  </main>
  <?php include('./script.php') ?>
  <script>
                // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: 'ยอดเงินรวมของการ SERVICE ของบริษัท CJL'
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
    <!--script-->
</body>

</html>
<?php }else{
  echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
  header('Refresh:0; url=https://cjlinfo.com/');
} ?>