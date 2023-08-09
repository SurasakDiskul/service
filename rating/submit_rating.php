<?php session_start();
    require_once('../php/connect.php'); //เรียกใช้ Database
    if (isset($_POST['submit'])) {//Check if isset ว่าได้มีการกดปุ่ม submit หรือเปล่าถ้ากดให้ทำงานต่อไป
        echo '
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
	  $star0 = 0 ;
      $today = date("Ymd");
      $office = $_SESSION['office'];
    if ($_POST['star1'] != '') {
        $star = $star + 1 ;
        
    }elseif ($_POST['star2'] != ''){
        $star = $star0 + 2 ;
        
    }elseif ($_POST['star3'] != ''){
        $star = $star0 + 3 ;
        
    }elseif ($_POST['star4'] != ''){
        $star = $star0 + 4 ;
        
    }elseif ($_POST['star5'] != ''){
        $star = $star0 + 5 ;
        
    }
        //ประกาศตัวแปร และ ใช้คำสั่งในการเพิ่มข้อมูลลง Table ใน Database
        $sql1 = "INSERT INTO `tbreview`(`membername` , `starrating`, `remark`, `datereview`, `office`) 
        VALUES (
                    '".$_POST['membername']."', 
                    '$star',
                    '".$_POST['remark']."',
                    '$today',
                    '$office'
                    )";
                    if (mysqli_query($conn, $sql1)) { // if check ว่า insert ข้อมูลสำเร็จหรือไม่
                        echo '<script>
                            setTimeout(function() {
                            swal({
                                title: "เพิ่มข้อมูลสำเร็จ!",
                                text: "ขอบคุณสำหรับการรีวิว ขอบคุณครับ.",
                                type: "success",
                                timer: 2000,
                                showConfirmButton: false
                            }, function() {
                                window.location = "./index.php"; //หน้าที่ต้องการให้กระโดดไป
                            });
                            }, 1000);
                        </script>';
                    } else {  //ถ้าไม่สำเร็จให้แสดงหน้า ERROR
                        echo '<script>
                            setTimeout(function() {
                            swal({
                                title: "เพิ่มข้อมูลไม่สำเร็จ!",
                                text: "กรุณาตรวจสอบอีกครั้ง.",
                                type: "warning",
                                showConfirmButton: true
                            }, function() {
                                window.location = "./index.php"; //หน้าที่ต้องการให้กระโดดไป
                            });
                            }, 1000);
                            </script>';
                                                }
    }
    mysqli_close($conn);
?>