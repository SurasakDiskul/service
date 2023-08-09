<?php 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//นับงาน SERVICE ทั้งหมดแบบแยกตามประเภทงาน
$sql99 = "SELECT * FROM tbservice where sername = 'Network (อินเทอร์เน็ต)'";
$result99 = mysqli_query($conn,$sql99);
$row99 = mysqli_num_rows($result99);

$sql98 = "SELECT * FROM tbservice where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)'";
$result98 = mysqli_query($conn,$sql98);
$row98 = mysqli_num_rows($result98);

$sql97 = "SELECT * FROM tbservice where sername = 'Software (โปรแกรมในคอมพิวเตอร์)'";
$result97 = mysqli_query($conn,$sql97);
$row97 = mysqli_num_rows($result97);

$sql96 = "SELECT * FROM tbservice where sername = 'กล้องวงจรปิด (CCTV)'";
$result96 = mysqli_query($conn,$sql96);
$row96 = mysqli_num_rows($result96);

$sql95 = "SELECT * FROM tbservice where sername = 'ระบบ ERP Eflowsys'";
$result95 = mysqli_query($conn,$sql95);
$row95 = mysqli_num_rows($result95);

$sql94 = "SELECT * FROM tbservice where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result94 = mysqli_query($conn,$sql94);
$row94 = mysqli_num_rows($result94);

$sql93 = "SELECT * FROM tbservice where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)'";
$result93 = mysqli_query($conn,$sql93);
$row93 = mysqli_num_rows($result93);

$sql92 = "SELECT * FROM tbservice where sername = 'จุดติดตั้ง Wi-Fi'";
$result92 = mysqli_query($conn,$sql92);
$row92 = mysqli_num_rows($result92);
//นับงาน SERVICE ทั้งหมดแบบแยกตามประเภทงาน
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//employee 1
$sql0 = "SELECT sum(employee1) FROM tbservice where sername = 'Network (อินเทอร์เน็ต)'";
$result0 = mysqli_query($conn,$sql0);
$row0 = mysqli_fetch_array($result0);
$sum0 = $row0[0];

$sql1 = "SELECT sum(employee1) FROM tbservice where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
$sum1 = $row1[0];

$sql2 = "SELECT sum(employee1) FROM tbservice where sername = 'Software (โปรแกรมในคอมพิวเตอร์)'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
$sum2 = $row2[0];

$sql3 = "SELECT sum(employee1) FROM tbservice where sername = 'กล้องวงจรปิด (CCTV)'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_array($result3);
$sum3 = $row3[0];

$sql4 = "SELECT sum(employee1) FROM tbservice where sername = 'ระบบ ERP Eflowsys'";
$result4 = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_array($result4);
$sum4 = $row4[0];

$sql5 = "SELECT sum(employee1) FROM tbservice where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result5 = mysqli_query($conn,$sql5);
$row5 = mysqli_fetch_array($result5);
$sum5 = $row5[0];

$sql6 = "SELECT sum(employee1) FROM tbservice where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)'";
$result6 = mysqli_query($conn,$sql6);
$row6 = mysqli_fetch_array($result6);
$sum6 = $row6[0];

$sql7 = "SELECT sum(employee1) FROM tbservice where sername = 'จุดติดตั้ง Wi-Fi'";
$result7 = mysqli_query($conn,$sql7);
$row7 = mysqli_fetch_array($result7);
$sum7 = $row7[0];
//employee1
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql8 = "SELECT sum(employee2) FROM tbservice where sername = 'Network (อินเทอร์เน็ต)'";
$result8 = mysqli_query($conn,$sql8);
$row8 = mysqli_fetch_array($result8);
$sum8 = $row8[0];

$sql9 = "SELECT sum(employee2) FROM tbservice where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)'";
$result9 = mysqli_query($conn,$sql9);
$row9 = mysqli_fetch_array($result9);
$sum9 = $row9[0];

$sql10 = "SELECT sum(employee2) FROM tbservice where sername = 'Software (โปรแกรมในคอมพิวเตอร์)'";
$result10 = mysqli_query($conn,$sql10);
$row10 = mysqli_fetch_array($result10);
$sum10 = $row10[0];

$sql11 = "SELECT sum(employee2) FROM tbservice where sername = 'กล้องวงจรปิด (CCTV)'";
$result11 = mysqli_query($conn,$sql11);
$row11 = mysqli_fetch_array($result11);
$sum11 = $row11[0];

$sql12 = "SELECT sum(employee2) FROM tbservice where sername = 'ระบบ ERP Eflowsys'";
$result12 = mysqli_query($conn,$sql12);
$row12 = mysqli_fetch_array($result12);
$sum12 = $row12[0];

$sql13 = "SELECT sum(employee2) FROM tbservice where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result13 = mysqli_query($conn,$sql13);
$row13 = mysqli_fetch_array($result13);
$sum13 = $row13[0];

$sql14 = "SELECT sum(employee2) FROM tbservice where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)'";
$result14 = mysqli_query($conn,$sql14);
$row14 = mysqli_fetch_array($result14);
$sum14 = $row14[0];

$sql15 = "SELECT sum(employee2) FROM tbservice where sername = 'จุดติดตั้ง Wi-Fi'";
$result15 = mysqli_query($conn,$sql15);
$row15 = mysqli_fetch_array($result15);
$sum15 = $row15[0];
//employee2
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//employee3
$sql16 = "SELECT sum(employee3) FROM tbservice where sername = 'Network (อินเทอร์เน็ต)'";
$result16 = mysqli_query($conn,$sql16);
$row16 = mysqli_fetch_array($result16);
$sum16 = $row16[0];

$sql17 = "SELECT sum(employee3) FROM tbservice where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)'";
$result17 = mysqli_query($conn,$sql17);
$row17 = mysqli_fetch_array($result17);
$sum17 = $row17[0];

$sql18 = "SELECT sum(employee3) FROM tbservice where sername = 'Software (โปรแกรมในคอมพิวเตอร์)'";
$result18 = mysqli_query($conn,$sql18);
$row18 = mysqli_fetch_array($result18);
$sum18 = $row18[0];

$sql19 = "SELECT sum(employee3) FROM tbservice where sername = 'กล้องวงจรปิด (CCTV)'";
$result19 = mysqli_query($conn,$sql19);
$row19 = mysqli_fetch_array($result19);
$sum19 = $row19[0];

$sql20 = "SELECT sum(employee3) FROM tbservice where sername = 'ระบบ ERP Eflowsys'";
$result20 = mysqli_query($conn,$sql20);
$row20 = mysqli_fetch_array($result20);
$sum20 = $row20[0];

$sql21 = "SELECT sum(employee3) FROM tbservice where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result21 = mysqli_query($conn,$sql21);
$row21 = mysqli_fetch_array($result21);
$sum21 = $row21[0];

$sql22 = "SELECT sum(employee3) FROM tbservice where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)'";
$result22 = mysqli_query($conn,$sql22);
$row22 = mysqli_fetch_array($result22);
$sum22 = $row22[0];

$sql23 = "SELECT sum(employee3) FROM tbservice where sername = 'จุดติดตั้ง Wi-Fi'";
$result23 = mysqli_query($conn,$sql23);
$row23 = mysqli_fetch_array($result23);
$sum23 = $row23[0];
//employee3
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//employee4
$sql24 = "SELECT sum(employee4) FROM tbservice where sername = 'Network (อินเทอร์เน็ต)'";
$result24 = mysqli_query($conn,$sql24);
$row24 = mysqli_fetch_array($result24);
$sum24 = $row24[0];

$sql25 = "SELECT sum(employee4) FROM tbservice where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)'";
$result25 = mysqli_query($conn,$sql25);
$row25 = mysqli_fetch_array($result25);
$sum25 = $row25[0];

$sql26 = "SELECT sum(employee4) FROM tbservice where sername = 'Software (โปรแกรมในคอมพิวเตอร์)'";
$result26 = mysqli_query($conn,$sql26);
$row26 = mysqli_fetch_array($result26);
$sum26 = $row26[0];

$sql27 = "SELECT sum(employee4) FROM tbservice where sername = 'กล้องวงจรปิด (CCTV)'";
$result27 = mysqli_query($conn,$sql27);
$row27 = mysqli_fetch_array($result27);
$sum27 = $row27[0];

$sql28 = "SELECT sum(employee4) FROM tbservice where sername = 'ระบบ ERP Eflowsys'";
$result28 = mysqli_query($conn,$sql28);
$row28 = mysqli_fetch_array($result28);
$sum28 = $row28[0];

$sql29 = "SELECT sum(employee4) FROM tbservice where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)'";
$result29 = mysqli_query($conn,$sql29);
$row29 = mysqli_fetch_array($result29);
$sum29 = $row29[0];

$sql30 = "SELECT sum(employee4) FROM tbservice where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)'";
$result30 = mysqli_query($conn,$sql30);
$row30 = mysqli_fetch_array($result30);
$sum30 = $row30[0];

$sql31 = "SELECT sum(employee4) FROM tbservice where sername = 'จุดติดตั้ง Wi-Fi'";
$result31 = mysqli_query($conn,$sql31);
$row31 = mysqli_fetch_array($result31);
$sum31 = $row31[0];
//employee4
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//row
//99=Network
//98=Hardware
//97=Software
//96=CCTV
//95=ERP
//94=Coding
//93=Fortigate
//92=WIFI
//sum
//0-7=employee1
//8-15=employee2
//16-23=employee3
//24-31=employee4
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//employee1
if($row99 == '0'){
    $em11 = '0';
    $em21 = '0';
    $em31 = '0';
    $em41 = '0';
}else{
    $em11 = ($sum0/$row99)*100;
    $em11 = number_format($em11, 2 );

    $em21 = ($sum8/$row99)*100;
    $em21 = number_format($em21, 2 );

    $em31 = ($sum16/$row99)*100;
    $em31 = number_format($em31, 2 );

    $em41 = ($sum24/$row99)*100;
    $em41 = number_format($em41, 2 );
}
if($row98 == '0'){
    $em12 = '0';
    $em22 = '0';
    $em32 = '0';
    $em42 = '0';
}else{
    $em12 = ($sum1/$row98)*100;
    $em12 = number_format($em12, 2 );

    $em22 = ($sum9/$row98)*100;
    $em22 = number_format($em22, 2 );

    $em32 = ($sum17/$row98)*100;
    $em32 = number_format($em32, 2 );

    $em42 = ($sum25/$row98)*100;
    $em42 = number_format($em42, 2 );
}
if($row97 == '0'){
    $em13 = '0';
    $em23 = '0';
    $em33 = '0';
    $em43 = '0';
}else{
    $em13 = ($sum2/$row97)*100;
    $em13 = number_format($em13, 2 );

    $em23 = ($sum10/$row97)*100;
    $em23 = number_format($em23, 2 );

    $em33 = ($sum18/$row97)*100;
    $em33 = number_format($em33, 2 );

    $em43 = ($sum26/$row97)*100;
    $em43 = number_format($em43, 2 );
}
if($row96 == '0'){
    $em14 = '0';
    $em24 = '0';
    $em34 = '0';
    $em44 = '0';
}else{
    $em14 = ($sum3/$row96)*100;
    $em14 = number_format($em14, 2 );

    $em24 = ($sum11/$row96)*100;
    $em24 = number_format($em24, 2 );

    $em34 = ($sum19/$row96)*100;
    $em34 = number_format($em34, 2 );

    $em44 = ($sum27/$row96)*100;
    $em44 = number_format($em44, 2 );
}
if($row95 == '0'){
    $em15 = '0';
    $em25 = '0';
    $em35 = '0';
    $em45 = '0';
}else{
    $em15 = ($sum4/$row95)*100;
    $em15 = number_format($em15, 2 );

    $em25 = ($sum12/$row95)*100;
    $em25 = number_format($em25, 2 );

    $em35 = ($sum20/$row95)*100;
    $em35 = number_format($em35, 2 );

    $em45 = ($sum28/$row95)*100;
    $em45 = number_format($em45, 2 );
}
if($row94 == '0'){
    $em16 = '0';
    $em26 = '0';
    $em36 = '0';
    $em46 = '0';
}else{
    $em16 = ($sum5/$row94)*100;
    $em16 = number_format($em16, 2 );
    
    $em26 = ($sum13/$row94)*100;
    $em26 = number_format($em26, 2 );

    $em36 = ($sum21/$row94)*100;
    $em36 = number_format($em36, 2 );

    $em46 = ($sum29/$row94)*100;
    $em46 = number_format($em46, 2 );
}
if($row93 == '0'){
    $em17 = '0';
    $em27 = '0';
    $em37 = '0';
    $em47 = '0';
}else{
    $em17 = ($sum6/$row93)*100;
    $em17 = number_format($em17, 2 );

    $em27 = ($sum14/$row93)*100;
    $em27 = number_format($em27, 2 );

    $em37 = ($sum22/$row93)*100;
    $em37 = number_format($em37, 2 );


    $em47 = ($sum30/$row93)*100;
    $em47 = number_format($em47, 2 );
}
if($row92 == '0'){
    $em18 = '0';
    $em28 = '0';
    $em38 = '0';
    $em48 = '0';
}else{
    $em18 = ($sum7/$row92)*100;
    $em18 = number_format($em18, 2 );

    $em28 = ($sum15/$row92)*100;
    $em28 = number_format($em28, 2 );

    $em38 = ($sum23/$row92)*100;
    $em38 = number_format($em38, 2 );

    $em48 = ($sum31/$row92)*100;
    $em48 = number_format($em48, 2 );
}
?>