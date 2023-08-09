<?php
session_start();
include('../php/connect.php');
include('./css.php');
?>
                    <div class="container1">
                    <div class="table-responsive">
                        <?php 
                        if(isset($_POST['request'])){

                            $request = $_POST['request']; ?>

                            <div class="container1">
            <div class="card-body px-20 pt-20 pb-20">
              <div class="table-responsive p-0">
              <?php 
                    $i = 1;
                    $sql = "SELECT * FROM `tbservice` where serstatus !='Fully Complete' and header = '$request'";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="service" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Issue</th>
                    <th width="10%">Remark </th>
                    <th width="20%"> Customer </th>
                    <th width="10%"> Office </th>
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
                  <td><?php echo $row['remark'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['office'] ?></td>
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
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Issue : <?php echo $row['sername'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Service Date : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">Queue : <?php echo $row['timer'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['header'] ?></p>
                                <?php if ($row['serstatus'] == 'Partial') { ?>
                                  <legend>ผู้รับผิดชอบงาน</legend>
                                <input type="checkbox" id="employee1" name="employee1" >
                                <label for="timer">นาย วราเทพ เหรียญโมรา</label>
                                <input type="checkbox" id="employee2" name="employee2" >
                                <label for="timer">นาย จตุพร อินทร์งาม</label>
                                <input type="checkbox" id="employee3" name="employee3" >
                                <label for="timer">นาย จารุวัฒน์​ อุ​พัน​วัน</label>
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
            <br>
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
                    $sql = "SELECT * FROM `tbservice` where serstatus ='Fully Complete' and header = '$request' order by serid DESC";
                    $result = mysqli_query($conn,$sql);
                ?>
              <table id="service1" class="table table-responsive" width="100%">
              <thead>
                  <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Issue</th>
                    <th width="10%">Remark </th>
                    <th width="20%"> Customer </th>
                    <th width="10%"> Office </th>
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
                  <td align="justify"><?php echo $row['remark'] ?></td>
                  <td><?php echo $row['membername'] ?></td>
                  <td><?php echo $row['office'] ?></td>
                  <td><?php echo $row['startdate'] ?></td>
                  <?php if ($row['timer'] == 'ด่วน') { ?>
                     <td class="text-danger"><?php echo $row['timer'] ?></td>
                  <?php }elseif ($row['timer'] == 'ปกติ') { ?>
                    <td><?php echo $row['timer'] ?></td>
                  <?php } ?>
                  <td class="text-success"><?php echo $row['serstatus'] ?></td>
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
                                <p class="text-center">User : <?php echo $row['membername'] ?></p>
                                <p class="text-center">Dept : <?php echo $row['dename'] ?></p>
                                <p class="text-center">Office : <?php echo $row['office'] ?></p>
                                <p class="text-center">Issue : <?php echo $row['sername'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Service Date : <?php echo $row['startdate'] ?></p>
                                <p class="text-center">Queue : <?php echo $row['timer'] ?></p>
                                <hr>
                                <p class="text-center" style="border-width:3px; border-style:solid; border-color:#000; padding: 1em;"><a href="../issue_img/<?php echo $row['img'] ?>" target="_blank"><img width="250" class="text-center" src="../issue_img/<?php echo $row['img'] ?>" /></a></p>
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
      <?php } ?>
      <?php include('./script.php') ?>
      <script>
        $(document).ready(function() {
          $('#service1').DataTable( {
      "pagingType": "numbers" ,
      "scrollCollapse" : true
    } )
  });
    </script>
  <script>
    $(document).ready(function() {
      $('#service').DataTable( {
      "pagingType": "numbers",
      "scrollCollapse" : true
    } )
  });
  </script>