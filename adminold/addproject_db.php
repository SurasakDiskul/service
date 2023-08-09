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
    $doc_file = (isset($_POST['project_img']) ? $_POST['project_img'] : '');
    $upload=$_FILES['project_img']['name'];
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['project_img']['name'],".");
    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //โฟลเดอร์ที่เก็บไฟล์
    $path="../project_img/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    if(move_uploaded_file($_FILES['project_img']['tmp_name'],$path_copy)){
        //ประกาศตัวแปร และ ใช้คำสั่งในการเพิ่มข้อมูลลง Table ใน Database
        $sql = "INSERT INTO `tbnewwork`(`membername` , `dename`, `office`, `project`, `remark`, `img`, `startdate`, `leader`, `prostatus`) 
        VALUES (
                    'User - IT',
                    'IT', 
                    'CJL',
                    '".$_POST['project']."', 
                    '".$_POST['remark']."', 
                    '".$newname."', 
                    '".$_POST['startdate']."', 
                    '".$_POST['leader']."',
                    'Partial'
                    )";
                    if (mysqli_query($conn, $sql)) { // if check ว่า insert ข้อมูลสำเร็จหรือไม่
                        echo '<script>alert("Insert Successfully!!")</script>';
                        header('Refresh:0; url=project.php');
                    }else{
                        echo '<script>alert("Insert Failed!!")</script>';
                        header('Refresh:0; url=project.php');
                    }
    }
}
    }
    mysqli_close($conn);
?>