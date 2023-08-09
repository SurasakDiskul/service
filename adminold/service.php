<?php
session_start();
include('../php/connect.php');
?>
<?php
if ($_SESSION['membername'] != '') {
   $employee = $_SESSION['membername'];

    header("refresh: 600;");
?>
<!DOCTYPE html>
<html lang="en">
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
          <a class="nav-link active" href="./service.php">
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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h6 class="mb-2">Service List</h6>
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
                    <a class="btn btn-success" name="modal" data-bs-toggle="modal" data-bs-target="#addservice">เพิ่มรายการ Service</a>
              <!-- Modal -->
              <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">เพิ่มรายการ Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./addservice_db.php" method="POST" enctype="multipart/form-data">                        
                            <a></a>
                            <div class="row">
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
                </select></a></a>
                          </div>
                          </div>
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
                </select></a>
                                <a>Remark : รายละเอียดของปัญหา<input type="text" class="form-control" id="remark" name="remark" placeholder="--Remark--" required></a>
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
              <thead>
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['serid'] ?>">VIEW </a>
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
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['serid'] ?>" readonly>
                                <input type="hidden" class="form-control " id="startdate" name="startdate" value="<?php echo $row['startdate'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">ID : <?php echo $row['docid'] ?></p>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Issue : <?php echo $row['sername'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Service Date : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">Queue : <?php echo $row['timer'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['header'] ?></p>
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
                                <label for="timer">นาย วราเทพ เหรียญโมรา</label>
                                <input type="checkbox" id="employee2" name="employee2" >
                                <label for="timer">นาย จารุวัฒน์​ อุ​พัน​วัน</label>
                                <input type="checkbox" id="employee3" name="employee3" >
                                <label for="timer">นาย จตุพร อินทร์งาม</label>
                                <input type="checkbox" id="employee4" name="employee4" >
                                <label for="timer">นาย สุรศักดิ์ ดิศกุล</label>
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
            
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Service List ( Fully Complete )</h6>
            </div>
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbservice` where serstatus ='Fully Complete' order by serid DESC limit 20";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="service1" class="table table-responsive" width="100%" >
              <thead>
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
                  <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal1<?php echo $row['serid'] ?>">VIEW </a>
                  </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal1<?php echo $row['serid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['serid'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">ID : <?php echo $row['docid'] ?></p>
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Issue : <?php echo $row['sername'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Service Date : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">Queue : <?php echo $row['timer'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['header'] ?></p>
                                <p class="text-center">Solution : <?php echo $row['issue'] ?></p>
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
                                <p class="text-center">ผู้รับผิดชอบงาน : <?php echo $employee1. $employee2. $employee3. $employee4 ?></p>
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
    <?php include('./footer.php') ?>
    </div>
  </main>
  <?php include('./script.php') ?>
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