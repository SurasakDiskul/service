<?php
    session_start();
    $header = $_SESSION['membername'];
    require_once('../php/connect.php');
    if (isset($_POST['submit'])) {
       if($_POST['status'] == 'Partial'){
            $sql = "UPDATE `tbequipment` SET
            `eqstatus` = 'Fully Complete'
            WHERE eqid = '".mysqli_real_escape_string($conn, $_POST['eqid'])."'";
            $result = mysqli_query($conn,$sql);
            $sql1 = "UPDATE `tbeq` SET
            `remain` = '1',
            `eqnumber` = ''
            WHERE eqnumber = '".mysqli_real_escape_string($conn, $_POST['eqnumber'])."'";
            if (mysqli_query($conn, $sql1)) {
                echo '<script>alert("Equipment Stock Fully Complete!!")</script>';
                header('Refresh:0; url=equipment.php');
            }else{
                echo '<script>alert("Equipment Stock Failed!!")</script>';
                header('Refresh:0; url=equipment.php');
            }
        }
    }
?>
    