<?php
session_start();
require_once('../php/connect.php'); //เรียกใช้ Database
 $count=count($_POST["checkbox"]);
  $ck0 = $_POST['checkbox'][0];
  $ck1 = $_POST['checkbox'][1];
  $ck2 = $_POST['checkbox'][2];
  $ck3 = $_POST['checkbox'][3];
  $ck4 = $_POST['checkbox'][4];
  $ck5 = $_POST['checkbox'][5];
  $ck6 = $_POST['checkbox'][6];
  $ck7 = $_POST['checkbox'][7];
  $ck8 = $_POST['checkbox'][8];
  $ck9 = $_POST['checkbox'][9];
 $ck10 = $_POST['checkbox'][10];
 $ck11 = $_POST['checkbox'][11];
 $ck12 = $_POST['checkbox'][12];
 $ck13 = $_POST['checkbox'][13];
 $ck14 = $_POST['checkbox'][14];
 $ck15 = $_POST['checkbox'][15];
 $ck16 = $_POST['checkbox'][16];
 $ck17 = $_POST['checkbox'][17];
 $check = $ck0.'  '.$ck1.'  '.$ck2.'  '.$ck3.'  '.$ck4.'  '.$ck5.'  '.$ck6.'  '.$ck7.'  '.$ck8.'  '.$ck9.'  '.$ck10.'  '.$ck11.'  '.$ck12.'  '.$ck13.'  '.$ck14.'  '.$ck15.'  '.$ck16.'  '.$ck17;
 for($i=0;$i<$count;$i++){  //ใช้คำสั่ง for และ if เพื่อให้ Loop check ว่ามีการ Insert ข้อมูลแบบ Dynamic หรือไม่
            $sql = "UPDATE `tbeq` SET
            `remain` = '0',
            `eqnumber` = '".$_POST["number"]."'
            WHERE equipment = '".mysqli_real_escape_string($conn, $_POST['checkbox'][$i])."'";
            $result = mysqli_query($conn,$sql);
                $sql3 = "INSERT INTO sub_tbequipment (eqnumber, equipment) 
                VALUES (
                '".$_POST["number"]."',
                '".$_POST['checkbox'][$i]."'
                )";
                $result3 = mysqli_query($conn,$sql3);
    }
     $sql2 = "INSERT INTO tbequipment (eqnumber ,membername, equipment, leader, eqstatus) 
                VALUES (
                '".$_POST["number"]."',
                '".$_POST["membername"]."',
                '".$check."', 
                '".$_POST["leader"]."',
                'Partial'
                )";
                if (mysqli_query($conn, $sql2)) { // if check ว่า insert ข้อมูลสำเร็จหรือไม่
                    echo '<script>alert("Insert Successfully!!")</script>';
                    header('Refresh:0; url=equipment.php');
                }else{
                    echo '<script>alert("Insert Failed!!")</script>';
                    header('Refresh:0; url=equipment.php');
                }

?>