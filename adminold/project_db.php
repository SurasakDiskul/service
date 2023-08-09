<?php
    session_start();
    require_once('../php/connect.php');
    $leader = $_SESSION['membername'];
    if (isset($_POST['submit'])) {
        if($_POST['status'] == 'Wait'){
            $sql = "UPDATE `tbnewwork` SET
            `prostatus` = 'Partial',
            `leader` = '$leader'
            WHERE newid = '".mysqli_real_escape_string($conn, $_POST['newid'])."'";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=project.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=project.php');
            }
        }else if($_POST['status'] == 'Partial'){
            $startdate = $_POST['startdate'];
            $enddate = date("Ymd");
                $date1=date_create("$startdate");
                $date2=date_create("$enddate");
                $DateDiff=date_diff($date1,$date2);
                echo $DateDiff = $DateDiff->format("%a");
            if( $DateDiff > 46){
                if($_POST['employee1'] == ''){
                    $employee1 = '0';
                }else{
                    $employee1 = '0';
                }
                if($_POST['employee2'] == ''){
                    $employee2 = '0';
                }else{
                    $employee2 = '0';
                }
                if($_POST['employee3'] == ''){
                    $employee3 = '0';
                }else{
                    $employee3 = '0';
                }
                if($_POST['employee4'] == ''){
                        $employee4 = '0';
                    }else{
                        $employee4 = '0';
                    }
                    if($_POST['employee5'] == ''){
                        $employee5 = '0';
                    }else{
                        $employee5 = '0';
                    }
        } elseif($DateDiff > 31 && $DateDiff < 45){
            if($_POST['employee1'] == ''){
                $employee1 = '0';
            }else{
                $employee1 = '0.5';
            }
            if($_POST['employee2'] == ''){
                $employee2 = '0';
            }else{
                $employee2 = '0.5';
            }
            if($_POST['employee3'] == ''){
                $employee3 = '0';
            }else{
                $employee3 = '0.5';
            }
            if($_POST['employee4'] == ''){
                    $employee4 = '0';
                }else{
                    $employee4 = '0.5';
                }
                if($_POST['employee5'] == ''){
                    $employee5 = '0';
                }else{
                    $employee5 = '0.5';
                }
            } elseif($DateDiff < 30){
                if($_POST['employee1'] == ''){
                    $employee1 = '0';
                }else{
                    $employee1 = '1';
                }
                if($_POST['employee2'] == ''){
                    $employee2 = '0';
                }else{
                    $employee2 = '1';
                }
                if($_POST['employee3'] == ''){
                    $employee3 = '0';
                }else{
                    $employee3 = '1';
                }
                if($_POST['employee4'] == ''){
                   $employee4 = '0';
                }else{
                    $employee4 = '1';
                }if($_POST['employee5'] == ''){
                    $employee5 = '0';
                }else{
                    $employee5 = '1';
                }
            }
            $sql1 = "UPDATE `tbnewwork` SET
            `prostatus` = 'Fully Complete',
            `price` = '".$_POST['price']."',
            `employee1` = '$employee1',
            `employee2` = '$employee2',
            `employee3` = '$employee3',
            `employee4` = '$employee4',
            `employee5` = '$employee5',
            `enddate` = '$enddate'
            WHERE newid = '".mysqli_real_escape_string($conn, $_POST['newid'])."'";
            if (mysqli_query($conn, $sql1)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=project.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=project.php');
            }
        }
        }
    