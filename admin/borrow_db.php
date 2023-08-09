<?php
    session_start();
    require_once('../php/connect.php');
    $notebook = $_POST['borname'];
    if (isset($_POST['submit'])) {
        if($_POST['status'] == 'Wait'){
            $sql = "UPDATE `tbborrow` SET
            `borstatus` = 'Partial',
            `notebook` = '".$_POST['borname']."'
            WHERE borid = '".mysqli_real_escape_string($conn, $_POST['borid'])."'";
            $result = mysqli_query($conn, $sql);
            $sql2 = "UPDATE `tbborrowlist` SET
            `borstatus` = '0'
            WHERE borname = '".mysqli_real_escape_string($conn, $_POST['borname'])."'";
            if (mysqli_query($conn, $sql2)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=borrow.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=borrow.php');
            }
        }else if($_POST['status'] == 'Partial'){
            //DATEDIFF
            $enddate = $_POST['enddate'];
            $finish = date("Ymd");
                $date1=date_create("$enddate");
                $date2=date_create("$finish");
                $DateDiff=date_diff($date1,$date2);
                echo $DateDiff = $DateDiff->format("%R%a");
            if($DateDiff < 0){
                $DateDiff = '0';
            }elseif($DateDiff > 0){
                $enddate = $_POST['enddate'];
                $finish = date("Ymd");
                $date1=date_create("$enddate");
                $date2=date_create("$finish");
                $DateDiff=date_diff($date1,$date2);
                $DateDiff = $DateDiff->format("%a");
            }
            $sql1 = "UPDATE `tbborrow` SET
            `borstatus` = 'Fully Complete',
            `datecomplete` = '$finish',
            `datediff` = '$DateDiff'
            WHERE borid = '".mysqli_real_escape_string($conn, $_POST['borid'])."'";
            $result1 = mysqli_query($conn, $sql1);

            $sql3 = "UPDATE `tbborrowlist` SET
            `borstatus` = '1'
            WHERE borname = '".mysqli_real_escape_string($conn, $_POST['borname'])."'";
            if (mysqli_query($conn, $sql3)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=borrow.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=borrow.php');
            }
        }
        }
    