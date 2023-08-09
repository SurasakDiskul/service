<?php
session_start();
include('../../php/connect.php');
include('./css.php');
?>
                    <div class="container1">
                        <?php 
                        if(isset($_POST['request'])){

                            $request = $_POST['request']; ?>
<?php
$sql_re1 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` ='Fully Complete' AND `sername` ='Hardware (อุปกรณ์คอมพิวเตอร์)' AND `office` = '$request'";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_fetch_row($result_re1);
$sum_re1 = $row_re1[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='Software (โปรแกรมในคอมพิวเตอร์)' AND `office` = '$request'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_fetch_row($result_re2);
$sum_re2 = $row_re2[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='โปรแกรมใช้งานภายในบริษัท (Coding)' AND `office` = '$request'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_fetch_row($result_re3);
$sum_re3 = $row_re3[0];
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re4 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `office` = '$request' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi' ";
$result_re4 = mysqli_query($conn, $sql_re4);
$row_re4 = mysqli_fetch_row($result_re4);
$sum_re4 = $row_re4[0];
?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<!--chart data-->

<?php
//<!-----------------------------------------------------0----------------------------------------------------->

    $sql_m1="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-01-01' AND '2023-01-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m1 = mysqli_query($conn,$sql_m1);
    $row_m1 = mysqli_fetch_assoc($result_m1);
    
//<!-----------------------------------------------------1----------------------------------------------------->

    $sql_m2="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-02-01' AND '2023-02-28' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m2 = mysqli_query($conn,$sql_m2);
    $row_m2 = mysqli_fetch_assoc($result_m2);
    
//<!-----------------------------------------------------2----------------------------------------------------->

    $sql_m3="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-03-01' AND '2023-03-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m3 = mysqli_query($conn,$sql_m3);
    $row_m3 = mysqli_fetch_assoc($result_m3);

//<!-----------------------------------------------------3----------------------------------------------------->   

    $sql_m4="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-04-01' AND '2023-04-30' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m4 = mysqli_query($conn,$sql_m4);
    $row_m4 = mysqli_fetch_assoc($result_m4);
    
//<!-----------------------------------------------------4----------------------------------------------------->   

    $sql_m5="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-05-01' AND '2023-05-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m5 = mysqli_query($conn,$sql_m5);
    $row_m5 = mysqli_fetch_assoc($result_m5);
    
//<!-----------------------------------------------------5----------------------------------------------------->

    $sql_m6="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-06-01' AND '2023-06-30' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m6 = mysqli_query($conn,$sql_m6);
    $row_m6 = mysqli_fetch_assoc($result_m6);
    
//<!-----------------------------------------------------6----------------------------------------------------->

    $sql_m7="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-07-01' AND '2023-07-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m7 = mysqli_query($conn,$sql_m7);
    $row_m7 = mysqli_fetch_assoc($result_m7);
    
//<!-----------------------------------------------------7----------------------------------------------------->   

    $sql_m8="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-08-01' AND '2023-08-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m8 = mysqli_query($conn,$sql_m8);
    $row_m8 = mysqli_fetch_assoc($result_m8);
   
//<!-----------------------------------------------------8----------------------------------------------------->

    $sql_m9="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-09-01' AND '2023-09-30' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m9 = mysqli_query($conn,$sql_m9);
    $row_m9 = mysqli_fetch_assoc($result_m9);
    
//<!-----------------------------------------------------9----------------------------------------------------->    

    $sql_m10="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-10-01' AND '2023-10-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m10 = mysqli_query($conn,$sql_m10);
    $row_m10 = mysqli_fetch_assoc($result_m10);
   
//<!-----------------------------------------------------10----------------------------------------------------->    

    $sql_m11="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-11-01' AND '2023-11-30' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m11 = mysqli_query($conn,$sql_m11);
    $row_m11 = mysqli_fetch_assoc($result_m11);

//<!-----------------------------------------------------11----------------------------------------------------->

    $sql_m12="SELECT COALESCE(sum(price), '0') as price FROM tbservice
    WHERE startdate BETWEEN '2023-12-01' AND '2023-12-31' AND `office` = '$request' AND serstatus = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
    $result_m12 = mysqli_query($conn,$sql_m12);
    $row_m12 = mysqli_fetch_assoc($result_m12);

//<!-----------------------------------------------------12----------------------------------------------------->
?>
                           <div class="container1">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="./index1.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service Hardware (อุปกรณ์คอมพิวเตอร์) ของบริษัท CJA</p>
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service Software (โปรแกรมในคอมพิวเตอร์) ของบริษัท CJA</p>
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service โปรแกรมใช้งานภายในบริษัท (Coding) ของบริษัท CJA</p>
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Service อื่นๆ ของบริษัท CJA</p>
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
        </div>
</div>
      </div>
      <?php } ?>
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
        text: 'ยอดเงินรวมของการ SERVICE กล้องวงจรปิด CCTV และ จุดติดตั้ง Wi-Fi ของบริษัท <?php echo $request ?>'
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