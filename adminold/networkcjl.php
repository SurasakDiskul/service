<?php
session_start();
include('../php/connect.php');
?>
<?php 
  $i = 1;
  $sql = "SELECT * FROM `tbnetwork`";
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
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">โครงสร้าง Network</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./review.php">
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
                <h6 class="mb-2">โครงสร้าง Network CJL</h6>
                    <div id="filter">
                        <select class="form-control form-select" name="fetchval" id="fetchval" >
                            <option value="" disabled="" selected="">Select-Department</option>
                            <option value="BOSS">BOSS</option>
                            <option value="บัญชี">บัญชี</option>
                            <option value="จัดซื้อ">จัดซื้อ</option>
                            <option value="Marcom">Marcom</option>
                            <option value="ต่างประเทศ">ต่างประเทศ</option>
                            <option value="ประสานงานขาย">ประสานงานขาย</option>
                            <option value="QC">QC</option>
                            <option value="คลังสินค้า">คลังสินค้า</option>
                            <option value="IT">IT</option>
                            <option value="HR">HR</option>
                            <option value="วิเคราะห์การตลาด">วิเคราะห์การตลาด</option>
                            <option value="อุปกรณ์ต่างๆ">อุปกรณ์ต่างๆ</option>
                        </select>
                    </div>
                    <a class="btn btn-success" name="modal" data-bs-toggle="modal" data-bs-target="#addma">เพิ่มรายการ </a>
              <!-- Modal -->
              <div class="modal fade" id="addma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการโครงสร้าง Network</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="" method="POST" enctype="multipart/form-data">                        
                              <a>Type : ประเภทอุปกรณ์<input type="text" class="form-control" id="nettype" name="nettype" placeholder="--Type--"></a>
                                <a>IPV4 Address : ไอพี แอดเดรส <input type="text" class="form-control" id="ip" name="ip" placeholder="--IPV4 Address--"></a>
                                <a>Name : ชื่อผู้รับผิดชอบ<input type="text" class="form-control" id="netname" name="netname" placeholder="--Name--"></a>
                                <div class="col-6">
                                <a>Username : ชื่อเครื่อง<input type="text" class="form-control" id="netuser" name="netuser" placeholder="--Username--"></a>
                                </div>
                                <div class="col-6">
                                <a>Password : รหัสผ่าน<input type="text" class="form-control" id="netpass" name="netpass" placeholder="--Password--"></a>
                                </div>
                                <p>Policy Group<input type="text" class="form-control" id="group" name="group" placeholder="--Policy Group--"></p>
                                <div class="col-6">
                                <a>Cloud User<input type="text" class="form-control" id="clouduser" name="clouduser" placeholder="--Cloud Username--"></a>
                                </div>
                                <div class="col-6">
                                <a>Cloud Password<input type="text" class="form-control" id="cloudpass" name="cloudpass" placeholder="--Cloud Password--"></a>
                                </div>                         
                                <p>Office : บริษัท<input type="text" class="form-control" id="office" name="office" placeholder="--Office--"></p>
                                <p>Dept. : แผนก<input type="text" class="form-control" id="dename" name="dename" placeholder="--Department--"></p>
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
              
                  

        </div>
            </div>
            <h1 class="text-center">โครงสร้าง Network CJL</h1>
                  <p class="text-center">--โปรดเลือกแผนกที่ต้องการ--</p>        
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
                url:"fetchCJL.php",
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