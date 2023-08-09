<?php
session_start();
include('../php/connect.php');
?>
<?php 
  $i = 1;
  $sql = "SELECT * FROM `tbma`";
  $result = mysqli_query($conn,$sql);
?>
<?php
if ($_SESSION['membername'] != '') {
  # code...

    header("refresh: 600;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./css.php') ?>
</head>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<?php
$sql_re0 = "SELECT * FROM tbma";
$result_re0 = mysqli_query($conn, $sql_re0);
$row_re0 = mysqli_num_rows($result_re0);

$sql_re1 = "SELECT ROUND(sum(price),2) FROM tbma";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_fetch_row($result_re1);
$sum_re1 = $row_re1[0];
$sum_re1 = number_format("$sum_re1",2,".",",");
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT * FROM tbma WHERE `mastatus` = 'Fully Complete'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_num_rows($result_re2);
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT ROUND(sum(price),2) FROM tbma
WHERE `mastatus` = 'Fully Complete'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_fetch_row($result_re3);
$sum_re3 = $row_re3[0];
$sum_re3 = number_format("$sum_re3",2,".",",");
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql99 = "SELECT * FROM tbma";
$result99 = mysqli_query($conn, $sql99);

while ($row99 = mysqli_fetch_assoc($result99)) : 

$date = $row99['duadate'];
$tomorrow = date('Y-m-d',strtotime($date . "-30 day"));

$sql98 = "SELECT * FROM tbma where duadate Between '$tomorrow' and '$date' ";
$result98 = mysqli_query($conn, $sql98);
$row98 = mysqli_num_rows($result98);

endwhile;
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
          <a class="nav-link" href="./schedule.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Schedule</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./service.php">
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
          <a class="nav-link active" href="./ma.php">
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
<!------------------------------------------------------------------------------------------------------------------------>
<div class="container1">
<div class="container-fluid py-4">
<!------------------------------------------------------------------------------------------------------------------------>
      <div class="row mt-4">
        <!--Table-->
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">ค่าบริการ MA รายปี </h6>
                    <div id="filter">
                        <select class="form-control form-select" name="fetchval" id="fetchval" >
                            <option value="" disabled="" selected="">Select-Company</option>
                            <option value="บริษัท โชว์จุ่งลูกหมาก จำกัด">บริษัท โชว์จุ่งลูกหมาก จำกัด</option>
                            <option value="บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด">บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด</option>
                            <option value="บริษัท ซีเจ พรีเมี่ยม จำกัด">บริษัท ซีเจ พรีเมี่ยม จำกัด</option>
                            <option value="บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด">บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด</option>
                            <option value="บริษัท ซีเจ โฮลดิ้ง จำกัด">บริษัท ซีเจ โฮลดิ้ง จำกัด</option>
                        </select>
                    </div>
                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addma">เพิ่มค่าบริการ MA รายปี </a>
              <!-- Modal -->
              <div class="modal fade" id="addma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มค่าบริการ MA รายปี</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addma.php" method="POST" enctype="multipart/form-data">                        
                            <a>Company : ชื่อบริษัท<select class="form-control form-select" name="company" id="company" >
                                <option value="" disabled="" selected="">Select-Company</option>
                                <option value="บริษัท โชว์จุ่งลูกหมาก จำกัด">บริษัท โชว์จุ่งลูกหมาก จำกัด</option>
                                <option value="บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด">บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด</option>
                                <option value="บริษัท ซีเจ พรีเมี่ยม จำกัด">บริษัท ซีเจ พรีเมี่ยม จำกัด</option>
                                <option value="บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด">บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด</option>
                                <option value="บริษัท ซีเจ โฮลดิ้ง จำกัด">บริษัท ซีเจ โฮลดิ้ง จำกัด</option>
                            </select></a>
                                <a>Suppier : ชื่อซัพพลายเออร์ <input type="text" class="form-control" id="suppier" name="suppier" placeholder="--Suppier Name--"></a>
                                <a>Infomation : รายละเอียด<input type="text" class="form-control" id="infomation" name="infomation" placeholder="--Infomation--"></a>
                                <div class="col-6">
                                <a>DueDate : วันครบกำหนดชำระ<input type="date" name="duadate" id="duadate" class="form-control" value="" require></a>
                                </div>
                                <div class="col-6">
                                <a>Price : ราคา/ปี<input type="text" class="form-control" id="price" name="price" placeholder="--Price--"></a>
                                </div>
                                <div class="col-6">
                                <p>TypePrice : ประเภทการชำระ<input type="text" class="form-control" id="typeprice" name="typeprice" placeholder="--Typeprice--"></p>
                                </div>
                                <div class="col-6">
                                <p>ระยะเวลาก่อนครบรอบสัญญา<select class="form-control form-select" name="mastatus" id="mastatus" >
                                <option value="" disabled="" selected="">--ระยะเวลาก่อนครบรอบสัญญา--</option>
                                <option value="Y">ต่อสัญญาทุกๆ 1 ปี</option>
                                <option value="9M">ต่อสัญญาทุกๆ 9 เดือน</option>
                                <option value="4M">ต่อสัญญาทุกๆ 4 เดือน</option>
                                <option value="1M">ต่อสัญญาทุกๆ 1 เดือน</option>
                            </select></p>  
                                </div>
                                <p>Remark : หมายเหตุ<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--"></p>
                                <p>Leader : ผู้รับผิดชอบงาน<select class="form-control form-select" name="leader" id="leader" >
                                <option value="" disabled="" selected="">Select-Leader</option>
                                <option value="วราเทพ เหรียญโมรา">วราเทพ เหรียญโมรา</option>
                                <option value="จตุพร อินทร์งาม">จตุพร อินทร์งาม</option>
                                <option value="กัลยรัตน์ นิลคง">กัลยรัตน์ นิลคง</option>
                                <option value="สุรศักดิ์ ดิศกุล">สุรศักดิ์ ดิศกุล</option>
                                <option value="จารุวัฒน์​ อุ​พัน​วัน">จารุวัฒน์​ อุ​พัน​วัน</option>
                            </select></p> 
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
            
            <div class="card-body px-2 pt-2 pb-2">
              
                    <div class="table-responsive col-lg-12 ">
                      <table id="myTABLE" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                            <th width="5%">ID</th>
                            <th width="5%">Company</th>
                            <th width="10%">Suppier </th>
                            <th width="10%"> วันครบกำหนด </th>
                            <th width="15%"> Price/Year </th>
                            <th width="10%"> Leader </th>
                            <th width="10%"> Status </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['company'] ?></td>
                            <td><?php echo $row['suppier'] ?></td>
                            <td><?php echo $row['duadate'] ?></td>
                            <td><?php echo number_format($row['price']) ?> บาท</td>
                            <td><?php echo $row['leader'] ?></td>
                            <td class="text-center">
                            <?php
                                $startdate = $row['duadate'];
                                $enddate = date("Ymd");
                                $date1=date_create("$startdate");
                                $date2=date_create("$enddate");
                                $DateDiff=date_diff($date1,$date2);
                                //echo
                                $DateDiff = $DateDiff->format("%a");
                              ?>
                              <?php if ($DateDiff > 15) { ?>
                                <button class="btn btn-success ">Done</button>
                              <?php }elseif ($DateDiff <15) { ?>
                                <button class="btn btn-danger ">Paid</button>
                              <?php } ?>
                            </td>
                          <td>
                          <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['maid'] ?>">VIEW </a>
                          </td>
                          </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['maid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./ma_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="maid" name="maid" value="<?php echo $row['maid'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">Company : <?php echo $row['company'] ?></p>
                                <p class="text-center">Suppier : <?php echo $row['suppier'] ?></p>
                                <h6 class="text-center">Infomation : <?php echo $row['infomation'] ?></h6>
                                <p class="text-center">DueDate : <?php echo $row['duadate'] ?></p>
                                <p class="text-center">Price : <?php echo number_format($row['price']) ?> บาท</p>
                                <p class="text-center">TypePrice : <?php echo $row['typeprice'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['leader'] ?></p>
                                <input type="hidden" class="form-control " id="status" name="status" value="<?php echo $row['mastatus'] ?>" readonly>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="hidden" class="form-control text-center" id="status" name="status" value="<?php echo $row['mastatus'] ?>" readonly>
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
  </div>
    <?php include('./footer.php') ?>
  </main>
  <?php include('./script.php') ?>
  <script>
        $(document).ready(function() {
          $('#myTABLE').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#fetchval").on('change',function(){
            var value = $(this).val();
            console.log(value); 

            $.ajax({
                url:"fetchma.php",
                type:"POST",
                data: 'request=' + value ,
                beforeSend:function(){
                    $(".container1").html("<span>   Working...</span>");
                },
                success:function(data){
                    $(".container1").html(data);
                }
                });
            });
        });
    </script>
    <!--script-->
</body>

</html>

  <?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>