<?php
    session_start();
    $header = $_SESSION['membername'];
    require_once('../php/connect.php');
    if (isset($_POST['submit'])) {
        if($_POST['status'] == 'Wait'){
            $sql = "UPDATE `tbservice` SET
            `serstatus` = 'Partial',
            `header` = '$header'
            WHERE serid = '".mysqli_real_escape_string($conn, $_POST['serid'])."'";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Update Status Successfully!!")</script>';
                header('Refresh:0; url=service.php');
            }else{
                echo '<script>alert("Update Status Failed!!")</script>';
                header('Refresh:0; url=service.php');
            }
        }else if($_POST['status'] == 'Partial'){
            $date1 = date("Ymd_His");
            //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
            $numrand = (mt_rand());
            $doc_file = (isset($_POST['service_img']) ? $_POST['service_img'] : '');
            $upload=$_FILES['service_img']['name'];
            //ตัดขื่อเอาเฉพาะนามสกุล
            $typefile = strrchr($_FILES['service_img']['name'],".");
            //มีการอัพโหลดไฟล์
            if($upload !='') {
            //โฟลเดอร์ที่เก็บไฟล์
            $path="../service_img/";
            //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
            $newname = $numrand.$date1.$typefile;
            $path_copy=$path.$newname;
            //คัดลอกไฟล์ไปยังโฟลเดอร์
            if(move_uploaded_file($_FILES['service_img']['tmp_name'],$path_copy)){
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
                }
            }
            $sql1 = "UPDATE `tbservice` SET
            `service_img` = '$newname',
            `serstatus` = 'Fully Complete',
            `issue` = '".$_POST['issue']."',
            `employee1` = '$employee1',
            `employee2` = '$employee2',
            `employee3` = '$employee3',
            `employee4` = '$employee4',
            `enddate` = '$enddate'
            WHERE serid = '".mysqli_real_escape_string($conn, $_POST['serid'])."'";
            if (mysqli_query($conn, $sql1)) {
                echo '<script>alert("Service Fully Complete!!")</script>';
                header('Refresh:0; url=service.php');
            }else{
                echo '<script>alert("Service Fully Failed!!")</script>';
                header('Refresh:0; url=service.php');
            }
        }
        }
    }
}
    