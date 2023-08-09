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
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
<?php
$sql_re0 = "SELECT * FROM tbma WHERE company = '$request'";
$result_re0 = mysqli_query($conn, $sql_re0);
$row_re0 = mysqli_num_rows($result_re0);

$sql_re1 = "SELECT ROUND(sum(price),2) FROM tbma WHERE company = '$request'";
$result_re1 = mysqli_query($conn, $sql_re1);
$row_re1 = mysqli_fetch_row($result_re1);
$sum_re1 = $row_re1[0];
$sum_re1 = number_format("$sum_re1",2,".",",");
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re2 = "SELECT * FROM tbma WHERE `mastatus` = 'Fully Complete' and company = '$request'";
$result_re2 = mysqli_query($conn, $sql_re2);
$row_re2 = mysqli_num_rows($result_re2);
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re3 = "SELECT ROUND(sum(price),2) FROM tbma
WHERE `mastatus` = 'Fully Complete' and company = '$request'";
$result_re3 = mysqli_query($conn, $sql_re3);
$row_re3 = mysqli_fetch_row($result_re3);
$sum_re3 = $row_re3[0];
$sum_re3 = number_format("$sum_re3",2,".",",");
//<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->
$sql_re4 = "SELECT COALESCE(sum(price), '0') FROM tbservice
WHERE `serstatus` = 'Fully Complete' AND `sername` ='กล้องวงจรปิด (CCTV)' or `sername` ='จุดติดตั้ง Wi-Fi'";
$result_re4 = mysqli_query($conn, $sql_re4);
$row_re4 = mysqli_fetch_row($result_re4);
$sum_re4 = $row_re4[0];
?>
<!-------------------------PHP----------------------------------------------------------------------------------------------------------------->

<div class="container1">
<div class="container-fluid py-4">
      
<!------------------------------------------------------------------------------------------------------------------------>
      <div class="row mt-4">
        <!--Table-->
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
              
<div class="container1">
            <div class="card-body px-2 pt-2 pb-2">
              <!--<a href="./adddoc.php" class="btn btn-primary" style="float:left;">เพิ่มเอกสาร</a>-->
                    <div class="table-responsive col-lg-12 ">
                        <?php 
                            $i = 1;
                            $sql = "SELECT * FROM `tbma` WHERE company = '$request'";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="myTABLE" class="table table-responsive" width="100%">
                      <thead>
                          <tr>
                          <th width="5%">ID</th>
                            <th width="5%">Company</th>
                            <th width="10%">Suppier </th>
                            <th width="10%"> วันครบกำหนด </th>
                            <th width="15%"> Price/Year </th>
                            <th width="10%"> Leader </th>
                            <th width="10%"> Status </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['company'] ?></td>
                            <td><?php echo $row['suppier'] ?></td>
                            <td><?php echo $row['duadate'] ?></td>
                            <td><?php echo number_format($row['price']) ?></td>
                            <td><?php echo $row['leader'] ?></td>
                            <td class="text-center">
                              <?php
                            $startdate = $row['duadate'];
                            $enddate = date("Ymd");
                            $date1=date_create("$startdate");
                            $date2=date_create("$enddate");
                            $DateDiff=date_diff($date1,$date2);
                            //echo
                            $DateDiff = $DateDiff->format("%a");
                            ?>
                              <?php if ($DateDiff > 30) { ?>
                                <button class="btn btn-success ">Done</button>
                              <?php }elseif ($DateDiff <30) { ?>
                                <button class="btn btn-danger ">Paid</button>
                              <?php } ?>
                            </td>
                          <td>
                          <a class="btn text-center" name="modal" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['maid'] ?>"><i class="fa fa-eye"></i></a>
                          </td>
                          </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="my-modal<?php echo $row['maid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">รายละเอียด</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="row gy-4" action="./service_db.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control " id="serid" name="serid" value="<?php echo $row['maid'] ?>" readonly>
                                <label type="hidden" for="enddate" class="form-label text-dark"></label>
                                <p class="text-center">Company : <?php echo $row['company'] ?></p>
                                <p class="text-center">Suppier : <?php echo $row['suppier'] ?></p>
                                <h6 class="text-center">Infomation : <?php echo $row['infomation'] ?></h6>
                                <p class="text-center">DueDate : <?php echo $row['duadate'] ?></p>
                                <p class="text-center">Price : <?php echo number_format($row['price']) ?> บาท</p>
                                <p class="text-center">TypePrice : <?php echo $row['typeprice'] ?></p>
                                <p class="text-center">Remark : <?php echo $row['remark'] ?></p>
                                <p class="text-center">Leader : <?php echo $row['leader'] ?></p>
                                <input type="hidden" class="form-control " id="status" name="status" value="<?php echo $row['mastatus'] ?>" readonly>
                              </div>
                            <div class="modal-footer">
                               <div class="row">
                                <input type="text" class="form-control text-center" id="status" name="status" value="<?php echo $row['mastatus'] ?>" readonly>
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
            <?php } ?>
            <?php include('./js.php') ?>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#fetchval").on('change',function(){
            var value = $(this).val();
            console.log(value); 

            $.ajax({
                url:"fetchma.php",
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
          $('#ma').DataTable( {
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
