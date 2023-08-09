<?php
session_start();
include('../php/connect.php');
?>
<?php
if ($_SESSION['membername'] != '') {
   $employee = $_SESSION['membername'];

    header("refresh: 600;");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('./css.php') ?>
<style>
            div#mylayout_2{
                display:block;
                width:100%;
                word-wrap:break-word;
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
                            <li  class="active">
                                <a href="./equipment.php"><i class="fa fa-inbox"></i> <span>IT Equipment</span></a>
                            </li>
                            <li>
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
                            <h4 class="page-title pull-left">IT Equipment</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>IT Equipment</span></li>
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
            <div class="container-fluid py-4">
      <div class="row">
        <div class="col-3 ">         
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
                <div class="col-4 mt-2 text-lg text-center">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="col-3 ">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">อุปกรณ์ที่ถูกยืม</p>
                    <h5 class="font-weight-bolder">
                    <?php echo $row_re2 ?> ชิ้น
                    </h5>
                  </div>
                </div>
                <div class="col-4 mt-2 text-lg text-center">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-3 ">
          
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
                <div class="col-4 mt-2 text-lg text-center">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-3 ">
      
      <?php if($KPINB >= 25) { ?>
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI(กัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?> %
                    </h5>
                  </div>
                </div>
                <div class="col-4 mt-2 text-lg text-center">
                  
                    <i class="ni ni-single-02 text-lg text-success opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        
        <?php }elseif($KPINB < 25) { ?>     
          <div class="card bg-danger">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase text-white font-weight-bold">KPI(กัลยรัตน์ นิลคง)</p>
                    <h5 class="font-weight-bolder text-white">
                    <?php echo $KPINB ?>  %
                    </h5>
                  </div>
                </div>
                <div class="col-4 mt-2 text-lg text-center">
                  
                    <i class="ni ni-single-02 text-lg text-danger opacity-10" aria-hidden="true"></i>
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
                <!-- overarea start -->
                <div class="row p-3">
      <div class="row">
        <div class="col-5">
        <h2>รายการอุปกรณ์ IT</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-3">
            <div class="d-flex justify-content-between">

                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addequipment"><i class="fa fa-plus-square text-white">  เพิ่มรายการ</i></a>
 <!-- Modal -->
 <div class="modal fade" id="addequipment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ IT Equipment</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addequipment_db.php" method="POST" enctype="multipart/form-data">   
                              <div class="col-12">                
                            <a>Equipment : อุปกรณ์<input type="text" class="form-control" id="Equipment" name="Equipment" placeholder="--Equipment--" required></a>
                            </div>     
                            <div class="col-12">
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
            <div class="container1">
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
            </div>
            <div class="col-7">
            <h2>รายการอุปกรณ์ IT</h2>
        <hr>
          <div class="card ">
            <div class="pb-0 p-3">
              <div class="d-flex justify-content-between">
                <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addservice"><i class="fa fa-plus-square text-white">  เพิ่มรายการ</i></a>
              
 <!-- Modal -->
 <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการการยืมอุปกรณ์</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
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
                                <div class="col-6">
                            <a>ID : เลขที่งาน<input type="text" class="form-control" id="number" name="number" value="<?php echo $nextId ?>" readonly></a>
                            </div>
                            <div class="col-6">
                            <a>Membername : ผู้ยืมอุปกรณ์<input type="text" class="form-control" id="membername" name="membername" placeholder="--Membername--" required></a>
                            </div>
                            <br>
                            <div class="col-12">
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
                </div>
                <br>
                <div class="col-12">
                <a>Leader : ชื่อผู้รับผิดชอบงาน<select class="form-control form-select" name="leader" id="leader" required>
                              <option value="" disabled="" selected="">--Select-Employee--</option>
                              <option value="นายวราเทพ เหรียญโมรา">นายวราเทพ เหรียญโมรา</option>
                              <option value="นายจตุพร อินทร์งาม">นายจตุพร อินทร์งาม</option>
                              <option value="นางสาวกัลยรัตน์ นิลคง">นางสาวกัลยรัตน์ นิลคง</option>
                              <option value="นายสุรศักดิ์ ดิศกุล">นายสุรศักดิ์ ดิศกุล</option>
                              <option value="นายจารุวัฒน์​ อุ​พัน​วัน">นายจารุวัฒน์​ อุ​พัน​วัน</option>
                            </select>
                          </a>
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
                          <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['eqid'] ?>"><i class="fa fa-eye"></i></a>
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
                                <p class="text-center"><b>เลขที่งาน :</b> <?php echo $row['eqnumber'] ?></p>
                                <p class="text-center"><b>ผู้ยืมอุปกรณ์ :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>อุปกรณ์ที่ยืม :</b>
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
                                <p class="text-center"><b>Leader :</b> <?php echo $row['leader'] ?></p>
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

            
        <div class="col-12">
        <h2>ประวัติการยืมอุปกรณ์ IT</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-1">
              
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
                          <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['serid'] ?>"><i class="fa fa-eye"></i></a>
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
      </div>
    </div>
      </div>
        </div>
        <!-- main content area end -->
        <?php include('./footer.php') ?>
    </div>
    <!-- page container area end -->
<?php include('./js.php') ?>

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

<?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>