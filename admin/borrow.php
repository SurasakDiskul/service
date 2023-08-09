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
                            <li class="active">
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
                            <h4 class="page-title pull-left">Borrow Notebook</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Borrow Notebook</span></li>
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
        <div class="col-9">
        <h2>Borrow Notebook</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-3">
            <div class="d-flex justify-content-between">

                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#addservice"><i class="fa fa-plus-square text-white">  เพิ่มรายการยืมโน๊ตบุ๊ค</i></a>
              <!-- Modal -->
              <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการยืมโน๊ตบุ๊ค</h5>
                                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addborrow_db.php" method="POST" enctype="multipart/form-data">
                              <div class="col-12">                   
                            <a>Notebook : โน๊ตบุ๊ค<select class="form-select form-control" id="borname" name="borname">
                                        <option value="" disabled="" selected="" >--Select-Notebook--</option>
                                        <?php
                                        $query9 = "select * from `tbborrowlist` where borstatus = '1'";
                                        $result9 = mysqli_query($conn,$query9);
                                        if (mysqli_num_rows($result9) > 0) {
                                            while ($row9 = mysqli_fetch_assoc($result9)) {
                                        ?>
                                                <option class="form-control" value="<?php echo $row9['borname']; ?>"><?php echo $row9['borname']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                      </select>   </a>
                                      </div>     
                                      <div class="col-12">
                                <a>Remark : รายละเอียดของปัญหา<textarea type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" rows="3" required></textarea></a>
                                </div>
                                <div class="col-6">
                                <a>StartDate : วันที่ต้องการยืม<input type="date" name="startdate" id="startdate" class="form-control" value="" required></a>
                                </div>
                                <div class="col-6">
                                <a>EndDate : วันที่คืน<input type="date" name="enddate" id="enddate" class="form-control" value="" required></a>
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
                    $sql = "SELECT * FROM `tbborrow` where borstatus='Wait'" ;
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="borrow" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="10%">Remark </th>
                    <th width="20%"> Customer </th>
                    <th width="20%"> Dept. </th>
                    <th width="25%"> Office </th>
                    <th width="15%"> Status </th>
                    <th width="5%"> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['remark'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['dename'] ?></td>
                  <td><?php echo $row['office'] ?></td>
                  <td><?php echo $row['borstatus'] ?></td>
                  <td>
                  <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['borid'] ?>"><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['borid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./borrow_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="borid" name="borid" value="<?php echo $row['borid'] ?>" readonly>
                                <p class="text-center"><b>User :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept :</b> <?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></p>
                                <p class="text-center"><b>StartDate :</b> <?php echo $row['startdate'] ?></p>
                                <p class="text-center"><b>EndDate :</b> <?php echo $row['enddate'] ?></p>
                                <div class="row">
                                  <div class="col-3"></div>
                                    <div class="col-6">
                                      <select class="form-select form-control" id="borname" name="borname">
                                        <option value="" disabled="" selected="" >Select-Notebook</option>
                                        <?php
                                        $query9 = "select * from `tbborrowlist` where borstatus = '1'";
                                        $result9 = mysqli_query($conn,$query9);
                                        if (mysqli_num_rows($result9) > 0) {
                                            while ($row9 = mysqli_fetch_assoc($result9)) {
                                        ?>
                                                <option class="form-control" value="<?php echo $row9['borname']; ?>"><?php echo $row9['borname']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                      </select>                
                                      </div>
                                    <div class="col-3"></div>
                                </div>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['borstatus'] ?>" readonly>
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

            <div class="col-3">
          <div class="card mb-4">
            
            <div class="card-body px-2 pt-2 pb-2">
            <div class=" pb-0">
              <a href="../NB.pdf" target="_blank"><h6>Notebook Spare<i class="fa fa-share-square-o" aria-hidden="true"></i></h6></a>
              <br>
            </div>

              <div class="table-responsive p-0">
              <?php 
                    $s = 1;
                    $sql1 = "SELECT * FROM `tbborrowlist`";
                    $result1 = mysqli_query($conn,$sql1);
                ?>
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Serial No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Remain</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($row1 = mysqli_fetch_assoc($result1)) : ?>
                    <tr>
                    <?php if ($row1['borstatus'] == '1') { ?>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm text-success"><?php echo $row1['borname'] ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0"><?php echo $row1['borstatus'] ?></p>
                      </td>
                    <?php }else { ?>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm text-danger"><?php echo $row1['borname'] ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0"><?php echo $row1['borstatus'] ?></p>
                      </td>
                      <?php } ?>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

            
        <div class="col-12">
        <h2>Borrow Notebook ( อยู่ระหว่างการยืม )</h2>
        <hr>
          <div class="card mb-4">
            <div class="p-1">
              
            </div>
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbborrow` where borstatus='Partial'";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="Partial" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="10%">Remark </th>
                    <th width="20%"> Customer </th>
                    <th width="20%"> Dept. </th>
                    <th width="10%"> Office </th>
                    <th width="15%"> StartDate </th>
                    <th width="15%"> EndDate </th>
                    <th width="15%"> Status </th>
                    <th width="5%"> Action </th>
                    <p><b class="text-danger">*หมายเหตุ*</b> กรณีวันที่ในช่อง EndDate เป็นสีแดง คือ ใกล้ครบกำหนดคืนโน๊ตบุ๊ค</p>
                  </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['remark'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['dename'] ?></td>
                  <td><?php echo $row['office'] ?></td>
                  <td><?php echo $row['startdate'] ?></td>
                  <?php
                      $startdate = date("Ymd");
                      $enddate = $row['enddate'];
                      $date1=date_create("$startdate");
                      $date2=date_create("$enddate");
                      $DateDiff=date_diff($date1,$date2);
                      //echo 
                      $DateDiff = $DateDiff->format("%a");
                      if ($DateDiff > 5) { ?>
                        <td><?php echo $row['enddate'] ?></td>
                        <td class="text-success"><?php echo $row['borstatus'] ?></td>
                      <?php }elseif ($DateDiff <= 5) { ?>
                        <td class="text-danger"><?php echo $row['enddate'] ?></td>
                        <td class="text-warning"><?php echo $row['borstatus'] ?></td>
                      <?php } ?>
                  <td>
                  <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal1<?php echo $row['borid'] ?>"><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal1<?php echo $row['borid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./borrow_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="enddate" name="enddate" value="<?php echo $row['enddate'] ?>" readonly>
                                <input type="hidden" class="form-control " id="borid" name="borid" value="<?php echo $row['borid'] ?>" readonly>
                                <p class="text-center"><b>User :</b> <?php echo $row['membername'] ?></p>
                                <p class="text-center"><b>Dept :</b> <?php echo $row['dename'] ?></p>
                                <p class="text-center"><b>Office :</b> <?php echo $row['office'] ?></p>
                                <p class="text-center"><b>Remark :</b> <?php echo $row['remark'] ?></p>
                                <p class="text-center"><b>StartDate :</b> <?php echo $row['startdate'] ?></p>
                                <p class="text-center"><b>EndDate :</b> <?php echo $row['enddate'] ?></p>
                                <div class="row">
                                  <div class="col-3"></div>
                                    <div class="col-6">
                                      <input type="text" id="borname" name="borname" class="form-control text-center" value="<?php echo $row['notebook'] ?>" readonly>
                                      </div>
                                    <div class="col-3"></div>
                                </div>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['borstatus'] ?>" readonly>
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
          $('#borrow').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
  <script>
    $(document).ready(function() {
      $('#Partial').DataTable( {
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