<?php
session_start();
include('../php/connect.php');
?>
<?php
$i = 1;
$sql = "SELECT * FROM `tbma`";
$result = mysqli_query($conn, $sql);
?>
<?php
if ($_SESSION['membername'] != '') {
  # code...

  header("refresh: 600;");
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/T-11.png">
    <title>
      IT SERVICE SYSTEM
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <!--Full Calender-->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/main.min.css" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          "pageLength": 10, //จำนวนข้อมูลที่ให้แสดง ต่อ 1 หน้า
          "responsive": true,
          "searching": true, //เปิด=true ปิด=false ช่องค้นหาครอบจักรวาล
          "lengthChange": true, //เปิด=true ปิด=false ช่องปรับขนาดการแสดงผล
          "paging": true, // ไม่แสดงการแบ่งหน้า
          "ordering": false, // ไม่ให้ทำการเรียงข้อมูลเมื่อคลิกที่คอลัมน์รายการได้
          "info": false, // ไม่แสดงรายละเอียดรายการจำนวนข้อมูล
          // "scrollY": '50vh', // ให้ขนาดความสูงมีขนาดเท่ากับ 50% ของ พื้นที่แสดงหน้าบราเซอร์
          "scrollCollapse": true, // ให้ยืดหดการแสดงตามปริมาณรายการข้อมูลที่แสดง
          lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
          ],
        });
      });
    </script>
  </head>
  <body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-danger position-absolute w-100"></div>
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
            <a class="nav-link" href="./ma.php">
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
        </ul>
      </div>
      <div class="sidenav-footer mx-3 ">
        <a class="btn btn-danger btn-sm mb-0 w-100" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่?')" href="../logout.php" type="button">Logout</a>
      </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
      <?php include('./navbar.php') ?>
      <div class="container1">
        <div class="container-fluid py-4">
          <div class="row mt-4">
            <!--Table-->
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="card ">
                <div class="card-header pb-0 p-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-2">อุปกรณ์ IT</h6>
                    <a class="btn btn-primary" name="modal" data-bs-toggle="modal" data-bs-target="#add1">เพิ่มอุปกรณ์ IT</a>
                  </div>
                  <div class="card-body px-2 pt-2 pb-2">
                    <div class="table-responsive col-lg-12 ">
                      <table id="example" class="table table-responsive cell-border table-striped " width="100%">
                        <thead>
                          <tr style="background-color: #FF4500;">
                            <th class="text-center" style="font-size:0.7vw">No</th>
                            <th class="text-center" style="font-size:0.7vw">ประเภท</th>
                            <th class="text-center" style="font-size:0.7vw">ยี่ห้อ/รุ่น</th>
                            <th class="text-center" style="font-size:0.7vw">ผู้ดูแล</th>
                            <th class="text-center" style="font-size:0.7vw">IP Address</th>
                            <th class="text-center" style="font-size:0.7vw">สถานที่ตั้ง</th>
                            <th class="text-center" style="font-size:0.7vw">Company</th>
                            <th class="text-center" style="font-size:0.7vw">User Login</th>
                            <th class="text-center" style="font-size:0.7vw">Password</th>
                            <th class="text-center" style="font-size:0.7vw">Policy Group</th>
                            <th class="text-center" style="font-size:0.7vw">SSID</th>
                            <th class="text-center" style="font-size:0.7vw">Password</th>
                            <th class="text-center" style="font-size:0.7vw">User Cloud</th>
                            <th class="text-center" style="font-size:0.7vw">Password</th>
                            <th class="text-center" style="font-size:0.7vw">Database Cloud</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center" style="font-size:0.6vw">1</td>
                            <td class="text-center" style="font-size:0.6vw">Computer</td>
                            <td class="text-center" style="font-size:0.6vw">ASUS</td>
                            <td style="font-size:0.6vw">นายอภิเดช บังสกุล</td>
                            <td class="text-center" style="font-size:0.6vw">192.168.11.11</td>
                            <td class="text-center" style="font-size:0.6vw">แผนก IT</td>
                            <td class="text-center" style="font-size:0.6vw">CJL</td>
                            <td style="font-size:0.6vw">CHJ-IT04</td>
                            <td style="font-size:0.6vw">333cjChowjung</td>
                            <td class="text-center" style="font-size:0.6vw">General</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                          </tr>
                          <tr>
                            <td class="text-center" style="font-size:0.6vw">2</td>
                            <td class="text-center" style="font-size:0.6vw">Computer</td>
                            <td class="text-center" style="font-size:0.6vw">ASER</td>
                            <td style="font-size:0.6vw">นายอภิเดช บังสกุลสอง</td>
                            <td class="text-center" style="font-size:0.6vw">192.168.11.12</td>
                            <td class="text-center" style="font-size:0.6vw">แผนก IT</td>
                            <td class="text-center" style="font-size:0.6vw">CJA</td>
                            <td style="font-size:0.6vw">CHJ-IT05</td>
                            <td style="font-size:0.6vw">333cjChowjung</td>
                            <td class="text-center" style="font-size:0.6vw">General</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                            <td style="font-size:0.6vw">-</td>
                          </tr>
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
    <!-- Modal -->
    <div class="modal fade" id="add1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มอุปกรณ์ IT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row gy-1">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="user_title">ประเภท</label>
                    <select class="border border-secondary form-control form-select" name="user_title" id="user_title">
                      <option value="Computer">Computer</option>
                      <option value="Notebook">Notebook</option>
                      <option value="Printer">Printer</option>
                      <option value="Switch Hub">Switch Hub</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">ยี่ห้อ/รุ่น</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">IP Address</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="user_title">ผู้ดูแล</label>
                    <select class="border border-secondary form-control form-select" name="user_title" id="user_title">
                      <option value="xx">xx</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="user_title">สถานที่ติดตั้ง</label>
                    <select class="border border-secondary form-control form-select" name="user_title" id="user_title">
                      <option value="xx">xx</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Company</label>
                    <select class="border border-secondary form-control form-select" name="user_title" id="user_title">
                      <option value="xx">xx</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">User Login</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Password</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Policy Group</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">SSID</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Password</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">User Cloud</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Password</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="aaa">Database Cloud</label>
                    <input type="text" class="border border-secondary form-control" value="" name="aaa" id="aaa" aria-describedby="helpId" required>
                  </div>
                </div>


                <div class="col-md-12 "></div><br>
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
} else {
  echo '<script>alert("SESSION EXPIRED กรุณาเข้าสู่ระบบอีกครั้ง!!")</script>';
  header('Refresh:0; url=https://cjlinfo.com/');
} ?>