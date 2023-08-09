<?php
session_start();
include('../php/connect.php');
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
          <a class="nav-link active " href="./project.php">
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
    <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
              <h6>Projects List</h6>
              <a class="btn btn-success" name="modal" data-bs-toggle="modal" data-bs-target="#addservice">เพิ่มรายการ Project</a>
            
            </div>
            </div>
            
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['newid'] ?>">VIEW </a>
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
                                <p class="text-center">Project : <?php echo $row['project'] ?></p>
                                <h6 class="text-center">Remark : <?php echo $row['remark'] ?></h6>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">StartDate : <?php echo $row['startdate'] ?></p>
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
            <hr>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
              <h6>Projects List (Fully Complete)</h6>
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['newid'] ?>">VIEW </a>
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
                                <p class="text-center">Project : <?php echo $row['project'] ?></p>
                                <h6 class="text-center">Remark : <?php echo $row['remark'] ?></h6>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">StartDate : <?php echo $row['startdate'] ?></p>
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
          </div>
          
      <legend>ตัวชี้วัด (Key performance indicator : KPI)</legend>
      <?php include('./kpiproject.php') ?>
    <?php include('./footer.php') ?>
    </div>
  </main>
  <?php include('./script.php') ?>
  <script>
        $(document).ready(function() {
          $('#project').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
      <script>
        $(document).ready(function() {
          $('#project1').DataTable( {
      "pagingType": "numbers"
    } )
  });
    </script>
    <!-- Modal -->
    <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Project</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addproject_db.php" method="POST" enctype="multipart/form-data">                        
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
                                <a>Project : โปรเจค<input type="text" class="form-control" id="project" name="project" placeholder="--Remark--" required></a>
                                <a>Infomation : รายละเอียดของโปรเจค<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" required></a>
                                <div class="col-6">
                                <a>Date : วันที่ต้องการใช้งาน<input type="date" name="startdate" id="startdate" class="form-control" value="" required></a>
                                </div>
                                <div class="col-6">
                                <a>Img : แนบรูปของโปรเจค<input type="file" class="form-control " id="project_img" name="project_img" accept="image/x-png;image/gif;image/jpeg" required></a>
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
</body>

</html>

  <?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>