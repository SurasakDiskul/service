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
                            <option value="" disabled="" selected=""><?php echo $_POST['request'] ?></option>
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
<div class="container1">
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                        <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbnetwork` WHERE dename = '$request'";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="myTABLE" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                          <th width="5%">ID</th>
                            <th width="5%">Type</th>
                            <th width="10%">IPV4 </th>
                            <th width="20%"> Name </th>
                            <th width="15%"> Username </th>
                            <th width="10%"> Group </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nettype'] ?></td>
                            <td><?php echo $row['ip'] ?></td>
                            <td><?php echo $row['netname'] ?></td>
                            <td><?php echo $row['netuser'] ?></td>
                            <td><?php echo $row['netgroup'] ?></td>
                          <td>
                          <a class="btn btn-warning" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['id'] ?>">VIEW </a>
                          </td>
                          </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="id" name="id" value="<?php echo $row['id'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">Type : <?php echo $row['nettype'] ?></p>
                                <p class="text-center">IPV4 : <?php echo $row['ip'] ?></p>
                                <h6 class="text-center">Name : <?php echo $row['netname'] ?></h6>
                                <p class="text-center">Username : <?php echo $row['netuser'] ?></p>
                                <p class="text-center">Password : <?php echo $row['netpass'] ?></p>
                                <p class="text-center">Policy Group : <?php echo $row['group'] ?></p>
                                <?php if ($row['clouduser'] != '') { ?>
                                <p class="text-center">Cloud User : <?php echo $row['clouduser'] ?></p>
                                <p class="text-center">Cloud Password : <?php echo $row['cloudpass'] ?></p>
                                <?php }else{} ?>
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

            <?php } ?>
            <script>
        $(document).ready(function() {
            $('#myTABLE').DataTable();
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