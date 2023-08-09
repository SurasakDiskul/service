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
                            <li class="active">
                                <a href="./project.php" aria-expanded="true"><i class="fa fa-window-maximize"></i><span>New Project</span></a>
                            </li>
                            <li>
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
                            <h4 class="page-title pull-left">New Project</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>New Project</span></li>
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
      <div class="row">
        <div class="col-12">
        <h2>Projects List</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-3">
            <div class="d-flex justify-content-between">
                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addservice"><i class="fa fa-plus-square text-white">  เพิ่มรายการ</i></a>

            </div>
            </div>
            <div class="container1">
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbnewwork` where prostatus != 'Fully Complete'";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="project" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="20%">Project</th>
                    <th width="15%"> Customer </th>
                    <th width="10%"> Dept. </th>
                    <th width="5%"> Office </th>
                    <th width="10%"> Startdate </th>
                    <th width="10%"> Project Leader </th>
                    <th width="10%"> Status </th>
                    <th width="5%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['project'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['dename'] ?></td>
                  <td><?php echo $row['office'] ?></td>
                  <td><?php echo $row['startdate'] ?></td>
                  <td><?php echo $row['leader'] ?></td>
                  <td class="text-warning"><?php echo $row['prostatus'] ?></td>
                  <td>
                  <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['newid'] ?>"><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['newid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./project_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="newid" name="newid" value="<?php echo $row['newid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="startdate" name="startdate" value="<?php echo $row['startdate'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center"><b>Project :</b> <?php echo $row['project'] ?></p>
                                <h6 class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></h6>
                                <p class="text-center"><b>User :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept :</b> <?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>StartDate :</b> <?php echo $row['startdate'] ?></p>
                                <?php if ($row['prostatus'] == 'Partial') { ?>
                                  <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                      <input type="text" id="price" name="price" placeholder="ราคา" class="form-control" required>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                                  <legend>ผู้รับผิดชอบงาน</legend>
                                <input type="checkbox" id="employee1" name="employee1" >
                                <label for="timer">นาย วราเทพ เหรียญโมรา</label>
                                <input type="checkbox" id="employee2" name="employee2" >
                                <label for="timer">นาย จารุวัฒน์​ อุ​พัน​วัน</label>
                                <input type="checkbox" id="employee3" name="employee3" >
                                <label for="timer">นาย จตุพร อินทร์งาม</label>
                                <input type="checkbox" id="employee4" name="employee4" >
                                <label for="timer">นาย สุรศักดิ์ ดิศกุล</label>
                                <input type="checkbox" id="employee5" name="employee5" >
                                <label for="timer">นางสาวกัลยรัตน์ นิลคง</label>
                                <?php }elseif ($row['prostatus'] == 'Fully Complete') { ?>
                                  <p class="text-center">Price : <?php echo number_format($row['price']) ?> บาท</p>
                                <?php } ?>
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../project_img/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../project_img/<?php echo $row['img'] ?>" /></a></p>
                            </div>
                            <div class="modal-footer">
                            <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['prostatus'] ?>" readonly>
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

            
        <div class="col-12">
        <h2>Projects List (Fully Complete)</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-1">
              
            </div>
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbnewwork` where prostatus = 'Fully Complete'";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="project1" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="20%">Project</th>
                    <th width="15%"> Customer </th>
                    <th width="10%"> Dept. </th>
                    <th width="5%"> Office </th>
                    <th width="10%"> Startdate </th>
                    <th width="10%"> Project Leader </th>
                    <th width="10%"> Status </th>
                    <th width="5%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['project'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['dename'] ?></td>
                  <td><?php echo $row['office'] ?></td>
                  <td><?php echo $row['startdate'] ?></td>
                  <td><?php echo $row['leader'] ?></td>
                  <td class="text-success"><?php echo $row['prostatus'] ?></td>
                  <td>
                  <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['newid'] ?>"><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['newid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./project_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="newid" name="newid" value="<?php echo $row['newid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="startdate" name="startdate" value="<?php echo $row['startdate'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center"><b>Project :</b> <?php echo $row['project'] ?></p>
                                <h6 class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></h6>
                                <p class="text-center"><b>User :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept :</b> <?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>StartDate :</b> <?php echo $row['startdate'] ?></p>
                                <?php if ($row['prostatus'] == 'Partial') { ?>
                                  <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                      <input type="text" id="price" name="price" placeholder="ราคา" class="form-control" required>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                                  <legend>ผู้รับผิดชอบงาน</legend>
                                <input type="checkbox" id="employee1" name="employee1" >
                                <label for="timer">นาย วราเทพ เหรียญโมรา</label>
                                <input type="checkbox" id="employee2" name="employee2" >
                                <label for="timer">นาย จารุวัฒน์​ อุ​พัน​วัน</label>
                                <input type="checkbox" id="employee3" name="employee3" >
                                <label for="timer">นาย จตุพร อินทร์งาม</label>
                                <input type="checkbox" id="employee4" name="employee4" >
                                <label for="timer">นาย สุรศักดิ์ ดิศกุล</label>
                                <input type="checkbox" id="employee5" name="employee5" >
                                <label for="timer">นางสาวกัลยรัตน์ นิลคง</label>
                                <?php }elseif ($row['prostatus'] == 'Fully Complete') { ?>
                                  <p class="text-center"><b>Price :</b> <?php echo number_format($row['price']) ?> บาท</p>
                                <?php } ?>
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../project_img/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../project_img/<?php echo $row['img'] ?>" /></a></p>
                            </div>
                            <div class="modal-footer">
                            <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['prostatus'] ?>" readonly>
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
      <div class="p-3">
      <legend>ตัวชี้วัด (Key performance indicator : KPI)</legend>
      <?php include('./kpiproject.php') ?>
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
                url:"fetch.php",
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
          $('#project1').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
  <script>
    $(document).ready(function() {
      $('#project').DataTable( {
      "pagingType": "numbers"
    } )
  });
  </script>
  <script>
    $(document).ready(function() {

        $("#aa").change(function() {
            var aa = $("#aa").val();
              console.log(aa);

              $.ajax({
                type: "POST",
                url: "select.php", //ทำงานกับไฟล์นี้
                data: { aa : aa },
                success: function(data) {
                    $("#price").html(data);
                }
    });
});
});
</script>
    <!-- Modal -->
    <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Project</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addproject_db.php" method="POST" enctype="multipart/form-data">   
                              <div class="col-12">                   
                            <a>Project Leader : ชื่อหัวหน้าโปรเจค                           
                            <select class="form-control form-select" name="leader" id="leader" required>
                              <option value="" disabled="" selected="">--Select-Employee--</option>
                              <option value="	คุณศุภฤกษ์ อุพันวัน">	คุณศุภฤกษ์ อุพันวัน</option>
                              <option value="นายวราเทพ เหรียญโมรา">นายวราเทพ เหรียญโมรา</option>
                              <option value="นายจตุพร อินทร์งาม">นายจตุพร อินทร์งาม</option>
                              <option value="นางสาวกัลยรัตน์ นิลคง">นางสาวกัลยรัตน์ นิลคง</option>
                              <option value="นายสุรศักดิ์ ดิศกุล">นายสุรศักดิ์ ดิศกุล</option>
                              <option value=" นาย จารุวัฒน์​ อุ​พัน​วัน"> นาย จารุวัฒน์​ อุ​พัน​วัน</option>
                             
                            </select>
                          </a>
                          </div>  
                          <div class="col-12">
                                <a>Project : โปรเจค<input type="text" class="form-control" id="project" name="project" placeholder="--Remark--" required></a>
                                </div>
                                <div class="col-12">
                                <a>Infomation : รายละเอียดของโปรเจค<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" required></a>
                                </div>
                                <div class="col-6">
                                <a>Date : วันที่ต้องการใช้งาน<input type="date" name="startdate" id="startdate" class="form-control" value="" required></a>
                                </div>
                                <div class="col-6">
                                <a>Img : แนบรูปของโปรเจค<input type="file" class="form-control " id="project_img" name="project_img" accept="image/x-png;image/gif;image/jpeg" required></a>
                                </div>
                                <div class="col-12"></div>
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
</body>

</html>

<?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>