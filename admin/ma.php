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
                            <li class="active">
                                <a href="./ma.php" aria-expanded="true"><i class="fa fa-credit-card"></i><span>ค่าบริการ MA (รายปี)</span></a>
                            </li>
                            <li>
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
                            <h4 class="page-title pull-left">ค่าบริการ MA (รายปี)</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>ค่าบริการ MA (รายปี)</span></li>
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
                <!-- overarea start -->
                <div class="row p-3">
        <div class="col-12">
        <h2>ค่าบริการ MA (รายปี)</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-3">
            <div class="d-flex justify-content-between">
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
                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addma"><i class="fa fa-plus-square text-white">  เพิ่มรายการ</i></a>
              <!-- Modal -->
              <div class="modal fade" id="addma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มค่าบริการ MA รายปี</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addma.php" method="POST" enctype="multipart/form-data">     
                              <div class="col-12">                   
                            <a>Company : ชื่อบริษัท<select class="form-control form-select" name="company" id="company" >
                                <option value="" disabled="" selected="">Select-Company</option>
                                <option value="บริษัท โชว์จุ่งลูกหมาก จำกัด">บริษัท โชว์จุ่งลูกหมาก จำกัด</option>
                                <option value="บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด">บริษัท ซีเจ ออโต้ โชว์จุ่งลูกหมาก จำกัด</option>
                                <option value="บริษัท ซีเจ พรีเมี่ยม จำกัด">บริษัท ซีเจ พรีเมี่ยม จำกัด</option>
                                <option value="บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด">บริษัท ไฟว์สตาร์ ออโต้พาร์ท จำกัด</option>
                                <option value="บริษัท ซีเจ โฮลดิ้ง จำกัด">บริษัท ซีเจ โฮลดิ้ง จำกัด</option>
                            </select></a>
                            </div>
                            <div class="col-12">
                                <a>Suppier : ชื่อซัพพลายเออร์ <input type="text" class="form-control" id="suppier" name="suppier" placeholder="--Suppier Name--"></a>
                                </div>
                                <div class="col-12">
                                <a>Infomation : รายละเอียด<input type="text" class="form-control" id="infomation" name="infomation" placeholder="--Infomation--"></a>
                                </div>
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
                                <div class="col-12">
                                <p>Remark : หมายเหตุ<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--"></p>
                                </div>
                                <div class="col-12">
                                <p>Leader : ผู้รับผิดชอบงาน<select class="form-control form-select" name="leader" id="leader" >
                                <option value="" disabled="" selected="">Select-Leader</option>
                                <option value="วราเทพ เหรียญโมรา">วราเทพ เหรียญโมรา</option>
                                <option value="จตุพร อินทร์งาม">จตุพร อินทร์งาม</option>
                                <option value="กัลยรัตน์ นิลคง">กัลยรัตน์ นิลคง</option>
                                <option value="สุรศักดิ์ ดิศกุล">สุรศักดิ์ ดิศกุล</option>
                                <option value="จารุวัฒน์​ อุ​พัน​วัน">จารุวัฒน์​ อุ​พัน​วัน</option>
                            </select></p> </div>
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
              
                    <div class="table-responsive p-0">
                      <table id="ma" class="table table-responsive" width="100%">
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
                          <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['maid'] ?>"><i class="fa fa-eye"></i></a>
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
                                <p class="text-center"><b>Company :</b> <?php echo $row['company'] ?></p>
                                <p class="text-center"><b>Suppier :</b> <?php echo $row['suppier'] ?></p>
                                <h6 class="text-center"><b>Infomation :</b> <?php echo $row['infomation'] ?></h6>
                                <p class="text-center"><b>DueDate :</b> <?php echo $row['duadate'] ?></p>
                                <p class="text-center"><b>Price :</b> <?php echo number_format($row['price']) ?> บาท</p>
                                <p class="text-center"><b>TypePrice :</b> <?php echo $row['typeprice'] ?></p>
                                <p class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></p>
                                <p class="text-center"><b>Leader :</b> <?php echo $row['leader'] ?></p>
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

            


    </div>
      </div>
        </div>
        <!-- main content area end -->
        <?php include('./footer.php') ?>
    </div>
    <!-- page container area end -->
<?php include('./js.php') ?>
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
    
  <script>
        $(document).ready(function() {
          $('#ma').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
  <script>
    $(document).ready(function() {
      $('#service').DataTable( {
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