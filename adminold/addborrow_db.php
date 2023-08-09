<?php session_start();
    require_once('../php/connect.php'); //เรียกใช้ Database
    if (isset($_POST['submit'])) {//Check if isset ว่าได้มีการกดปุ่ม submit หรือเปล่าถ้ากดให้ทำงานต่อไป
        echo '
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
        //ประกาศตัวแปร และ ใช้คำสั่งในการเพิ่มข้อมูลลง Table ใน Database
        $sql2 = "UPDATE `tbborrowlist` SET
            `borstatus` = '0'
            WHERE borname = '".mysqli_real_escape_string($conn, $_POST['borname'])."'";
        $result2 = mysqli_query($conn, $sql2);
        $sql1 = "INSERT INTO `tbborrow`(`membername` , `dename`, `office`, `remark`, `startdate`, `enddate`, `borstatus`, `notebook`) 
        VALUES (
                    'User - IT',
                    'IT', 
                    'CJL',
                    '".$_POST['remark']."', 
                    '".$_POST['startdate']."', 
                    '".$_POST['enddate']."', 
                    'Partial',
                    '".$_POST['borname']."'
                    )";
                    if (mysqli_query($conn, $sql1)) {
                        echo '<script>alert("Insert Successfully!!")</script>';
                        header('Refresh:0; url=borrow.php');
                    }else{
                        echo '<script>alert("Insert Failed!!")</script>';
                        header('Refresh:0; url=borrow.php');
                    }
    }
    mysqli_close($conn);
?>