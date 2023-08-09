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
    <div class=" navbar-collapse  w-auto " id="sidenav-collapse-main">
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
          <a class="nav-link active" href="./borrow.php">
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-9">
          <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h6 class="mb-2">ฺBorrow Notebook</h6>
                    <a class="btn btn-success" name="modal" data-bs-toggle="modal" data-bs-target="#addservice">เพิ่มรายการยืมโน๊ตบุ๊ค</a>
              <!-- Modal -->
              <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการยืมโน๊ตบุ๊ค</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addborrow_db.php" method="POST" enctype="multipart/form-data">                        
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
                                <a>Remark : รายละเอียดของปัญหา<textarea type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" rows="3" required></textarea></a>
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['borid'] ?>">VIEW </a>
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
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">StartDate : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">EndDate : <?php echo $row['enddate'] ?></p>
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
        <div class="col-3">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <a href="../NB.pdf" target="_blank"><h6>Notebook Spare</h6></a>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
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
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Borrow Notebook ( อยู่ระหว่างการยืม )</h6>
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal1<?php echo $row['borid'] ?>">VIEW </a>
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
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">StartDate : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">EndDate : <?php echo $row['enddate'] ?></p>
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
    <?php include('./footer.php') ?>
    </div>
  </main>
  <?php include('./script.php') ?>
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
</body>

</html>

  <?php
  }else{
    echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
    header('Refresh:0; url=https://cjlinfo.com/');
  } ?>