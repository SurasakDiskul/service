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
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            </div>
                    </div>
            <br>
      <div class="row">
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
                    $sql = "SELECT * FROM `tbservice` where serstatus ='Fully Complete' and header = '$request' order by serid DESC";
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
      <?php } ?>
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
