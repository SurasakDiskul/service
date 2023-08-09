<?php session_start();
    require_once('../php/connect.php'); //เรียกใช้ Database
    if (isset($_POST['submit'])) {//Check if isset ว่าได้มีการกดปุ่ม submit หรือเปล่าถ้ากดให้ทำงานต่อไป
        echo '
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $doc_file = (isset($_POST['issue_img']) ? $_POST['issue_img'] : '');
    $upload=$_FILES['issue_img']['name'];
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['issue_img']['name'],".");
    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //โฟลเดอร์ที่เก็บไฟล์
    $path="../issue_img/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    if(move_uploaded_file($_FILES['issue_img']['tmp_name'],$path_copy)){
        $sql9 = "INSERT INTO `tbservicehistory`(`docid`, `sername`) 
        VALUES (
                    '".$_POST['docid']."', 
                    '".$_POST['aa']."'
                    )";
        $result9 = mysqli_query($conn,$sql9); 
        //ประกาศตัวแปร และ ใช้คำสั่งในการเพิ่มข้อมูลลง Table ใน Database
        $sql1 = "INSERT INTO `tbservice`(`docid` ,`sername` , `remark`, `price`, `membername`, `dename`, `office`, `img`, `serstatus`, `timer`, `startdate`, `header`) 
        VALUES (
                    '".$_POST['docid']."',
                    '".$_POST['aa']."', 
                    '".$_POST['remark']."',
                    '".$_POST['price']."',
                    'User - IT',
                    'IT', 
                    '".$_POST['office']."', 
                    '".$newname."', 
                    'Partial',
                    'ปกติ', 
                    '".$_POST['startdate']."',
                    '".$_POST['leader']."'
                    )";
                    if (mysqli_query($conn, $sql1)) { // if check ว่า insert ข้อมูลสำเร็จหรือไม่
                        echo '<script>alert("Insert Successfully!!")</script>';
                        header('Refresh:0; url=service.php');
                    }else{
                        echo '<script>alert("Insert Failed!!")</script>';
                        header('Refresh:0; url=service.php');
                    }
    }
}
    }
    mysqli_close($conn);
?>