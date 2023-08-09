<?php
    session_start();
    require_once('../php/connect.php');
    if (isset($_POST['submit'])) {
        if($_POST['status'] == 'Y'){
            $sql1 = "SELECT * FROM tbma where maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);

            $date = $row1['duadate'];
            $tomorrow = date('Y-m-d',strtotime($date . "+1 year"));

            $sql2 = "UPDATE `tbma` SET
            `duadate` = '$tomorrow'
            WHERE maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            if (mysqli_query($conn, $sql2)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=ma.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=ma.php');
            }
        }else if($_POST['status'] == '9M'){
            $sql3 = "SELECT * FROM tbma where maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            $result3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_assoc($result3);

            $date = $row3['duadate'];
            $tomorrow = date('Y-m-d',strtotime($date . "+9 month"));

            $sql4 = "UPDATE `tbma` SET
            `duadate` = '$tomorrow'
            WHERE maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            if (mysqli_query($conn, $sql4)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=ma.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=ma.php');
            }
        }else if($_POST['status'] == '4M'){
            $sql3 = "SELECT * FROM tbma where maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            $result3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_assoc($result3);

            $date = $row3['duadate'];
            $tomorrow = date('Y-m-d',strtotime($date . "+4 month"));

            $sql4 = "UPDATE `tbma` SET
            `duadate` = '$tomorrow'
            WHERE maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            if (mysqli_query($conn, $sql4)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=ma.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=ma.php');
            }
        }
        else if($_POST['status'] == '1M'){
            $sql3 = "SELECT * FROM tbma where maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            $result3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_assoc($result3);

            $date = $row3['duadate'];
            $tomorrow = date('Y-m-d',strtotime($date . "+1 month"));

            $sql4 = "UPDATE `tbma` SET
            `duadate` = '$tomorrow'
            WHERE maid = '".mysqli_real_escape_string($conn, $_POST['maid'])."'";
            if (mysqli_query($conn, $sql4)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=ma.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=ma.php');
            }
        }
        }
    