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
                            <li class="active">
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
                            <h4 class="page-title pull-left">Service</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Service</span></li>
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
        <h2>Service List</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-3">
            <div class="d-flex justify-content-between">
                    <div id="filter">
                    <select class="form-control form-select" name="fetchval" id="fetchval" >
                            <option value="" disabled="" selected="">Select-Employee</option>
                            <option value="นายวราเทพ เหรียญโมรา">นายวราเทพ เหรียญโมรา</option>
                            <option value="นายจตุพร อินทร์งาม">นายจตุพร อินทร์งาม</option>
                            <option value="นางสาวกัลยรัตน์ นิลคง">นางสาวกัลยรัตน์ นิลคง</option>
                            <option value="นายสุรศักดิ์ ดิศกุล">นายสุรศักดิ์ ดิศกุล</option>
                            <option value="นาย จารุวัฒน์​ อุ​พัน​วัน">นาย จารุวัฒน์​ อุ​พัน​วัน</option>
                        </select>
                    </div>
                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addservice"><i class="fa fa-plus-square text-white">  เพิ่มรายการ</i></a>
              <!-- Modal -->
              <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Service</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addservice_db.php" method="POST" enctype="multipart/form-data">                                                    
                            <div class="col-7">
                            <a>Leader : ชื่อผู้รับผิดชอบงาน<input type="text" class="form-control" id="leader" name="leader" value="<?php echo $employee ?>" readonly>
                              
                            <!--<select class="form-control form-select" name="leader" id="leader" required>
                              <option value="" disabled="" selected="">--Select-Employee--</option>
                              <option value="นายวราเทพ เหรียญโมรา">นายวราเทพ เหรียญโมรา</option>
                              <option value="นายอภิเดช พรรณลำเจียก">นายอภิเดช พรรณลำเจียก</option>
                              <option value="นายจตุพร อินทร์งาม">นายจตุพร อินทร์งาม</option>
                              <option value="นางสาวกัลยรัตน์ นิลคง">นางสาวกัลยรัตน์ นิลคง</option>
                              <option value="นายสุรศักดิ์ ดิศกุล">นายสุรศักดิ์ ดิศกุล</option>
                            </select>-->
                          
                          </a>
                          </div>
                          <div class="col-5">
                          <a>Office : บริษัทที่รับบริการ<select class="form-control form-select " name="office" id="office" required>
                            <option value="" selected="" disabled="">--Select Company--</option>
                            <option value="CJL">CJL</option>
                            <option value="CJA-สำนักงานใหญ่">CJA-สำนักงานใหญ่</option>
                            <option value="CJA-รามอินทรา">CJA-รามอินทรา</option>
                            <option value="CJA-รามคำแหง">CJA-รามคำแหง</option>
                            <option value="CJA-พระราม 4">CJA-พระราม 4</option>
                            <option value="CJA-พระราม 2">CJA-พระราม 2</option>
                            <option value="CJA-บางนา">CJA-บางนา</option>
                            <option value="CJA-สิรินธร">CJA-สิรินธร</option>
                            <option value="CJP">CJP</option>
                </select></a>
                          </div>
                          <div class="col-12">
                            <a>Issue : ปัญหาที่พบ<select class="form-control form-select " name="aa" id="aa" required>
                <option value="" selected="" disabled="">--Select Issue--</option>
                <?php
                    $query2 = "select * from `tbservicelist`;";
                    $result2 = mysqli_query($conn, $query2);
                    if (mysqli_num_rows($result2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                    ?>
                            <option value="<?php echo $row2['sername']?>"><?php echo $row2['sername']?></option>
                    <?php
                        }
                    }
                    ?>
                                </select>
                            </a>
                        </div>
                                <div class="col-12">
                                    <a>Remark : รายละเอียดของปัญหา<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" required></a>
                                </div>
                                <div class="col-6">
                                    <a>Date : วันที่ต้องการรับบริการ<input type="date" name="startdate" id="startdate" class="form-control" value="" required></a>
                                </div>
                                <div class="col-6">
                                    <a>Img : แนบรูปของปัญหาที่เกิดขึ้น<input type="file" class="form-control " id="issue_img" name="issue_img" accept="image/x-png;image/gif;image/jpeg" required></a>
                                </div>
                                <div id="price" name="price">
                                <input type="hidden" id="price" name="price">
                                <input type="hidden" id="docid" name="docid">
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
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbservice` where serstatus !='Fully Complete' limit 20";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="service" class="table table-responsive" width="100%">
              <thead class="thead-light">
                  <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Issue</th>
                    <th width="10%">Remark </th>
                   
                    <th width="15%"> ServiceDate </th>
                    <th width="10%"> Queue </th>
                    <th width="10%"> Status </th>
                    <th width="10%"> Leader </th>
                    <th width="5%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['sername'] ?></td>
                  <td> <div id="mylayout_2"><?php echo $row['remark'] ?></div></td>

                  <td><?php echo $row['startdate'] ?></td>
                  <td class="text_danger"><?php echo $row['timer'] ?></td>
                  <td><?php echo $row['serstatus'] ?></td>
                  <td><?php echo $row['header'] ?></td>
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
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['serid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="startdate" name="startdate" value="<?php echo $row['startdate'] ?>" readonly>
                                <p class="text-center"><b>ID : </b><?php echo $row['docid'] ?></p>
                                <p class="text-center"><b>User : </b><?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept : </b><?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>Issue :</b> <?php echo $row['sername'] ?></p>
                                <p class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></p>
                                <p class="text-center"><b>Service Date :</b> <?php echo $row['startdate'] ?></p>
                                <p class="text-center"><b>Queue : </b><?php echo $row['timer'] ?></p>
                                <p class="text-center"><b>Leader : </b><?php echo $row['header'] ?></p>
                                <?php if ($row['serstatus'] == 'Partial') { ?>
                                  <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                      <textarea type="text" id="issue" name="issue" placeholder="วิธีแก้ไขปัญหา" class="form-control" rows="3" required></textarea>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                    <p>แนบรูปการ Service ที่สำเร็จแล้ว</p> </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                    <input type="file" class="form-control " id="service_img" name="service_img" accept="image/x-png;image/gif;image/jpeg" required>                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                  <legend>ผู้รับผิดชอบงาน</legend>
                                <input type="checkbox" id="employee1" name="employee1" >
                                <label for="timer">นาย วราเทพ เหรียญโมรา</label><br>
                                <input type="checkbox" id="employee2" name="employee2" >
                                <label for="timer">นาย จารุวัฒน์​ อุ​พัน​วัน</label><br>
                                <input type="checkbox" id="employee3" name="employee3" >
                                <label for="timer">นาย จตุพร อินทร์งาม</label><br>
                                <input type="checkbox" id="employee4" name="employee4" >
                                <label for="timer">นาย สุรศักดิ์ ดิศกุล</label><br>
                                <?php } ?>
                                 
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../issue_img/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../issue_img/<?php echo $row['img'] ?>" /></a></p>
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
            
            
        <div class="col-12">
        <h2>Service List ( Fully Complete )</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-1">
              
            </div>
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbservice` where serstatus ='Fully Complete' order by serid DESC limit 20";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="service1" class="table table-responsive" width="100%" >
              <thead class="thead-light">
                  <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Issue</th>
                    <th width="10%">Remark </th>
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
                  <td> <div id="mylayout_2"><?php echo $row['remark'] ?></div></td>
                  <td><?php echo $row['startdate'] ?></td>
                  <?php if ($row['timer'] == 'ด่วน') { ?>
                     <td class="text-danger"><?php echo $row['timer'] ?></td>
                  <?php }elseif ($row['timer'] == 'ปกติ') { ?>
                    <td><?php echo $row['timer'] ?></td>
                  <?php } ?>
                 
                  <td  class="text-success"><?php echo $row['serstatus'] ?></td>
                  <td>
                  <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal1<?php echo $row['serid'] ?>"><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal1<?php echo $row['serid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['serid'] ?>" readonly>
                                <p class="text-center"><b>ID : </b><?php echo $row['docid'] ?></p>
                                <p class="text-center"><b>User :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept :</b> <?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>Issue :</b> <?php echo $row['sername'] ?></p>
                                <p class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></p>
                                <p class="text-center"><b>Service Date :</b> <?php echo $row['startdate'] ?></p>
                                <p class="text-center"><b>Queue : </b><?php echo $row['timer'] ?></p>
                                <p class="text-center"><b>Leader :</b> <?php echo $row['header'] ?></p>
                                <p class="text-center"><b>Solution :</b> <?php echo $row['issue'] ?></p>
                                <?php 
                                $sql0 = "SELECT employee1 FROM tbservice WHERE serid = '".$row['serid']."'";
                                $result0 = mysqli_query($conn,$sql0);
                                $row0 = mysqli_fetch_assoc($result0);

                                $sql1 = "SELECT employee2 FROM tbservice WHERE serid = '".$row['serid']."'";
                                $result1 = mysqli_query($conn,$sql1);
                                $row1 = mysqli_fetch_assoc($result1);

                                $sql2 = "SELECT employee3 FROM tbservice WHERE serid = '".$row['serid']."'";
                                $result2 = mysqli_query($conn,$sql2);
                                $row2 = mysqli_fetch_assoc($result2);

                                $sql3 = "SELECT employee4 FROM tbservice WHERE serid = '".$row['serid']."'";
                                $result3 = mysqli_query($conn,$sql3);
                                $row3 = mysqli_fetch_assoc($result3);

                                if($row0['employee1'] =='1'){
                                  $employee1 = ' นายวราเทพ เหรียญโมรา ';
                                }else{
                                  $employee1 = ' ';
                                }
                                if($row1['employee2'] =='1'){
                                  $employee2 = ', นาย จารุวัฒน์​ อุ​พัน​วัน ';
                                }else{
                                  $employee2 = ' ';
                                }
                                if($row2['employee3'] =='1'){
                                  $employee3 = ', นายจตุพร อินทร์งาม ';
                                }else{
                                  $employee3 = ' ';
                                }
                                if($row3['employee4']=='1'){
                                  $employee4 = ', นายสุรศักดิ์ ดิศกุล ';
                                }else{
                                  $employee4 = ' ';
                                }
                                ?>
                                <p class="text-center"><b>ผู้รับผิดชอบงาน : </b><?php echo $employee1. $employee2. $employee3. $employee4 ?></p>
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../service_img/<?php echo $row['service_img'] ?>" target="_blank"><img width="250" class="text-center" src="../service_img/<?php echo $row['service_img'] ?>" /></a></p>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['serstatus'] ?>" readonly>
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
          $('#service1').DataTable( {
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
</body>

</html>

<?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>