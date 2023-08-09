<?php
session_start();
include('../php/connect.php');
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
$sql_re1 = "SELECT * FROM tbeq";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_num_rows($result_re1);
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT * FROM tbeq WHERE remain = '0'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_num_rows($result_re2);
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT * FROM tbeq WHERE remain = '1'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_num_rows($result_re3);
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->

$queryNB = "SELECT * FROM `tbeq` where remain = '0'";
$resultNB = mysqli_query($conn, $queryNB);
$rowNB = mysqli_num_rows($resultNB);

$dateNB= $rowNB;
$KPINB1 = 18-$dateNB;
$KPINB2 = ($KPINB1/18)*100;
$KPINB = number_format( $KPINB2, 2 );

?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
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
    <div class="navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="./index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./schedule.php">
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
          <a class="nav-link active" href="./equipment.php">
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">อุปกรณ์ทั้งหมด</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $row_re1 ?> ชิ้น
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">อุปกรณ์ที่ถูกยืมในขณะนี้</p>
                    <h5 class="font-weight-bolder">
                    <?php echo $row_re2 ?> ชิ้น
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">อุปกรณ์คงเหลือ</p>
                    <h5 class="font-weight-bolder">
                   <?php echo $row_re3 ?> ชิ้น
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
      <div class="row">
      <?php if($KPINB >= 25) { ?>
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (น.ส.กัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php }elseif($KPINB < 25) { ?>     
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI (น.ส.กัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?>  %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <?php } ?>
        </div>
        </a>
      </div>
<!------------------------------------------------------------------------------------------------------------------------>
      <div class="row mt-4">
        <!--Table-->
        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">รายการอุปกรณ์ IT</h6>
                <a class="btn btn-success" name="modal" data-bs-toggle="modal" data-bs-target="#addequipment">เพิ่มรายการอุปกรณ์ IT</a>
 <!-- Modal -->
 <div class="modal fade" id="addequipment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addequipment_db.php" method="POST" enctype="multipart/form-data">                        
                            <a>Equipment : อุปกรณ์<input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="--Equipment--" required></a>
                            <div class="col-6">
                                <a>Img : แนบรูปของปัญหาที่เกิดขึ้น<input type="file" class="form-control " id="IT_Equipment" name="IT_Equipment" accept="image/x-png;image/gif;image/jpeg" required></a>
                                </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">ตกลง</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Modal end-->
                  </div>    
              </div>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                        <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbeq`";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="IT1" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                            <th width="98%">Equipment</th>
                            <th width="1%">Remain </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                          <td><a name="modal" data-bs-toggle="modal" data-bs-target="#equipment<?php echo $row['eqid']?>"><?php echo $row['equipment'] ?></a></td>
                          <td><?php echo $row['remain'] ?></td>
                          </tr>
                           <!-- Modal -->
                  <div class="modal fade" id="equipment<?php echo $row['eqid']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รูปภาพอุปกรณ์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="" method="POST" enctype="multipart/form-data">  
                              <br>                      
                            <p class="text-center" ><a href="../IT_Equipment/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../IT_Equipment/<?php echo $row['img'] ?>" /></a></p>
                            <p class="text-center">Equipment : <?php echo $row['equipment'] ?></p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Modal end-->
                  </div>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                      
          </div>
        </div>
    </div>
  </div>
  <div class="col-lg-8 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">รายการ การยืมอุปกรณ์ IT</h6>
                <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addservice">เพิ่มรายการ การยืมอุปกรณ์</a>
              
 <!-- Modal -->
 <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addeq_db.php" method="POST" enctype="multipart/form-data">                        
                            <?php
                                //รันเลขที่เอกสาร
                                $sql9 = "SELECT * FROM `tbequipment`";
                                $res = mysqli_query($conn,$sql9);
                                $row9 = mysqli_num_rows($res);
                                $maxId = substr($row9, -3);
                                $maxId = ($maxId + 1); 
                                //$year = "/65";
                                $year = date("dmY");
                                $maxId = substr(".00".$maxId, -3);
                                $nextId = $maxId.$year;
                                ?>
                            <a>ID : เลขที่งาน<input type="text" class="form-control" id="number" name="number" value="<?php echo $nextId ?>" readonly></a>
                            <a>Membername : ผู้ยืมอุปกรณ์<input type="text" class="form-control" id="membername" name="membername" placeholder="--Membername--" required></a>
                            <a><h6>Equipment : อุปกรณ์</h6>
                <?php
                    $query2 = "select * from `tbeq` where remain = '1';";
                    $result2 = mysqli_query($conn, $query2);
                    if (mysqli_num_rows($result2) > 0) {
                        while ($row2 = mysqli_fetch_array($result2)) {
                    ?>
                        <input type="checkbox" id="checkbox[]" name="checkbox[]" value="<?php echo $row2["equipment"]; ?>"> <?php echo $row2["equipment"]; ?><br>
                    <?php
                        }
                    }
                    ?>
                </a>
                <a>Leader : ชื่อผู้รับผิดชอบงาน<select class="form-control form-select" name="leader" id="leader" required>
                              <option value="" disabled="" selected="">--Select-Employee--</option>
                              <option value="นายวราเทพ เหรียญโมรา">นายวราเทพ เหรียญโมรา</option>
                              <option value="นายจตุพร อินทร์งาม">นายจตุพร อินทร์งาม</option>
                              <option value="นางสาวกัลยรัตน์ นิลคง">นางสาวกัลยรัตน์ นิลคง</option>
                              <option value="นายสุรศักดิ์ ดิศกุล">นายสุรศักดิ์ ดิศกุล</option>
                              <option value="นายจารุวัฒน์​ อุ​พัน​วัน">นายจารุวัฒน์​ อุ​พัน​วัน</option>
                            </select>
                          </a>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">ตกลง</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Modal end-->
                  </div>            </div>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                        <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbequipment` where eqstatus = 'Partial'";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="IT2" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                            <th width="1%">ID</th>
                            <th width="15%">Membername</th>
                            <th width="20%">Equipment </th>
                            <th width="15%"> Leader </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['membername'] ?></td>
                            <td>
                                <table class="">
                                    <?php
                                    $aa = $row['eqnumber'];
                                    $sql2 = "SELECT * FROM `sub_tbequipment` WHERE eqnumber = '$aa'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        foreach ($result2 as $row2) {
                                    ?>
                                            <tr class=" text-white">
                                                <td class="text-dark"><?php echo $row2['equipment'] ?></td>
                                            </tr> <?php }
                                            } ?>
                                </table>
                                </td>
                            <td><?php echo $row['leader'] ?></td>
                          <td>
                          <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['eqid'] ?>">VIEW </a>
                          </td>
                          </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['eqid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./equipment_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="eqid" name="eqid" value="<?php echo $row['eqid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="eqnumber" name="eqnumber" value="<?php echo $row['eqnumber'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">เลขที่งาน : <?php echo $row['eqnumber'] ?></p>
                                <p class="text-center">ผู้ยืมอุปกรณ์ : <?php echo $row['membername'] ?></p>
                                <p class="text-center">อุปกรณ์ที่ยืม :
                                    <?php
                                    $aa = $row['eqnumber'];
                                    $sql2 = "SELECT * FROM `sub_tbequipment` WHERE eqnumber = '$aa'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        foreach ($result2 as $row2) {
                                    ?>
                  
                                                <b><?php echo $row2['equipment'] ?><br></b>
                                             <?php }
                                            } ?>
                                </p>
                                <p class="text-center">Leader : <?php echo $row['leader'] ?></p>
                               <input type="hidden" class="form-control " id="status" name="status" value="<?php echo $row['eqstatus'] ?>" readonly>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['eqstatus'] ?>" readonly>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">คืนอุปกรณ์</button>
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
  <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">ประวัติการยืมอุปกรณ์ IT</h6>
              </div>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                    <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbequipment` where eqstatus = 'Fully Complete'";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="IT3" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                          <th width="1%">ID</th>
                            <th width="15%">Membername</th>
                            <th width="25%">Equipment </th>
                            <th width="15%"> Leader </th>
                            <th width="1%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                          <td><?php echo $i++ ?></td>
                            <td><?php echo $row['membername'] ?></td>
                            <td><table class="">
                                    <?php
                                    $aa = $row['eqnumber'];
                                    $sql2 = "SELECT * FROM `sub_tbequipment` WHERE eqnumber = '$aa'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        foreach ($result2 as $row2) {
                                    ?>
                                            <tr class=" text-white">
                                                <td class="text-dark"><?php echo $row2['equipment'] ?></td>
                                            </tr> <?php }
                                            } ?>
                                </table></td>
                            <td><?php echo $row['leader'] ?></td>
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
                            <form class="row gy-4" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="eqid" name="eqid" value="<?php echo $row['eqid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="eqnumber" name="eqnumber" value="<?php echo $row['eqnumber'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">เลขที่งาน : <?php echo $row['eqnumber'] ?></p>
                                <p class="text-center">ผู้ยืมอุปกรณ์ : <?php echo $row['membername'] ?></p>
                                <p class="text-center">อุปกรณ์ที่ยืม : <?php echo $row['equipment'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['leader'] ?></p>
                               <input type="hidden" class="form-control " id="status" name="status" value="<?php echo $row['eqstatus'] ?>" readonly>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['eqstatus'] ?>" readonly>
                                </div>
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
    <?php include('./footer.php') ?>
  </main>
  <?php include('./script.php') ?>
  
  <script>
        $(document).ready(function() {
    $('#IT1').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
    <script>
  $(document).ready(function() {
    $('#IT2').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
    <script>
         $(document).ready(function() {
    $('#IT3').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
</body>

</html>
<?php }else{
  echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
  header('Refresh:0; url=https://cjlinfo.com/');
} ?>