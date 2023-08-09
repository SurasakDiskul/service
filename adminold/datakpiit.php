<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'Network (อินเทอร์เน็ต)' and serstatus = 'Fully Complete' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$a = $row['a'];
$b=$row['b'];
$c=$row['c'];
$d=$row['d'];
if($a>$b && $a>$c && $a>$d){
    $employee11 = 'นายวราเทพ เหรียญโมรา' ;
    $employee21 = ' ';
    $employee31 = ' ';
    $employee41 = ' ';
}elseif($b>$a && $b>$c && $b>$d){
    $employee21 = 'นาย จารุวัฒน์​ อุ​พัน​วัน';
    $employee11 = ' ';
    $employee31 = ' ';
    $employee41 = ' ';
}elseif($c>$a && $c>$b && $c>$d){
    $employee31 = 'นายจตุพร อินทร์งาม' ;
    $employee21 = ' ';
    $employee11 = ' ';
    $employee41 = ' ';
}elseif($d>$a && $d>$b && $d>$c){
    $employee41 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee21 = ' ';
    $employee31 = ' ';
    $employee11 = ' ';
}else{
    $employee41 = '-' ;
    $employee21 = '-';
    $employee31 = '-';
    $employee11 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql1 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'Hardware (อุปกรณ์คอมพิวเตอร์)' and serstatus = 'Fully Complete' ";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$a1 = $row1['a'];
$b1=$row1['b'];
$c1=$row1['c'];
$d1=$row1['d'];
if($a1>$b1 && $a1>$c1 && $a1>$d1){
    $employee12 = 'นายวราเทพ เหรียญโมรา' ;
    $employee22 = ' ';
    $employee32 = ' ';
    $employee42 = ' ';
}elseif($b1>$a1 && $b1>$c1 && $b1>$d1){
    $employee22 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee12 = ' ';
    $employee32 = ' ';
    $employee42 = ' ';
}elseif($c1>$a1 && $c1>$b1 && $c1>$d1){
    $employee32 = 'นายจตุพร อินทร์งาม' ;
    $employee22 = ' ';
    $employee12 = ' ';
    $employee42 = ' ';
}elseif($d1>$a1 && $d1>$b1 && $d1>$c1){
    $employee42 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee22 = ' ';
    $employee32 = ' ';
    $employee12 = ' ';
}else{
    $employee42 = '-' ;
    $employee22 = '-';
    $employee32 = '-';
    $employee12 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql2 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'Software (โปรแกรมในคอมพิวเตอร์)' and serstatus = 'Fully Complete' ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$a2 = $row2['a'];
$b2=$row2['b'];
$c2=$row2['c'];
$d2=$row2['d'];
if($a2>$b2 && $a2>$c2 && $a2>$d2){
    $employee13 = 'นายวราเทพ เหรียญโมรา' ;
    $employee23 = ' ';
    $employee33 = ' ';
    $employee43 = ' ';
}elseif($b2>$a2 && $b2>$c2 && $b2>$d2){
    $employee23 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee13 = ' ';
    $employee33 = ' ';
    $employee43 = ' ';
}elseif($c2>$a2 && $c2>$b2 && $c2>$d2){
    $employee33 = 'นายจตุพร อินทร์งาม' ;
    $employee23 = ' ';
    $employee13 = ' ';
    $employee43 = ' ';
}elseif($d2>$a2 && $d2>$b2 && $d2>$c2){
    $employee43 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee23 = ' ';
    $employee33 = ' ';
    $employee13 = ' ';
}else{
    $employee43 = '-' ;
    $employee23 = '-';
    $employee33 = '-';
    $employee13 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql3 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'กล้องวงจรปิด (CCTV)' and serstatus = 'Fully Complete' ";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

$a3 = $row3['a'];
$b3=$row3['b'];
$c3=$row3['c'];
$d3=$row3['d'];
if($a3>$b3 && $a3>$c3 && $a3>$d3){
    $employee14 = 'นายวราเทพ เหรียญโมรา' ;
    $employee24 = ' ';
    $employee34 = ' ';
    $employee44 = ' ';
}elseif($b3>$a3 && $b3>$c3 && $b3>$d3){
    $employee24 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee14 = ' ';
    $employee34 = ' ';
    $employee44 = ' ';
}elseif($c3>$a3 && $c3>$b3 && $c3>$d3){
    $employee34 = 'นายจตุพร อินทร์งาม' ;
    $employee24 = ' ';
    $employee14 = ' ';
    $employee44 = ' ';
}elseif($d3>$a3 && $d3>$b3 && $d3>$c3){
    $employee44 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee24 = ' ';
    $employee34 = ' ';
    $employee14 = ' ';
}else{
    $employee44 = '-' ;
    $employee24 = '-';
    $employee34 = '-';
    $employee14 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql4 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'ระบบ ERP Eflowsys' and serstatus = 'Fully Complete' ";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);

$a4 = $row4['a'];
$b4=$row4['b'];
$c4=$row4['c'];
$d4=$row4['d'];
if($a4>$b4 && $a4>$c4 && $a4>$d4){
    $employee15 = 'นายวราเทพ เหรียญโมรา' ;
    $employee25 = ' ';
    $employee35 = ' ';
    $employee45 = ' ';
}elseif($b4>$a4 && $b4>$c4 && $b4>$d4){
    $employee25 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee15 = ' ';
    $employee35 = ' ';
    $employee45 = ' ';
}elseif($c4>$a4 && $c4>$b4 && $c4>$d4){
    $employee35 = 'นายจตุพร อินทร์งาม' ;
    $employee25 = ' ';
    $employee15 = ' ';
    $employee45 = ' ';
}elseif($d4>$a4 && $d4>$b4 && $d4>$c4){
    $employee45 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee25 = ' ';
    $employee35 = ' ';
    $employee15 = ' ';
}else{
    $employee45 = '-' ;
    $employee25 = '-';
    $employee35 = '-';
    $employee15 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql5 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'โปรแกรมใช้งานภายในบริษัท (Coding)' and serstatus = 'Fully Complete' ";
$result5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_assoc($result5);

$a5 = $row5['a'];
$b5=$row5['b'];
$c5=$row5['c'];
$d5=$row5['d'];
if($a5>$b5 && $a5>$c5 && $a5>$d5){
    $employee16 = 'นายวราเทพ เหรียญโมรา' ;
    $employee26 = ' ';
    $employee36 = ' ';
    $employee46 = ' ';
}elseif($b5>$a5 && $b5>$c5 && $b5>$d5){
    $employee26 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee16 = ' ';
    $employee36 = ' ';
    $employee46 = ' ';
}elseif($c5>$a5 && $c5>$b5 && $c5>$d5){
    $employee36 = 'นายจตุพร อินทร์งาม' ;
    $employee26 = ' ';
    $employee16 = ' ';
    $employee46 = ' ';
}elseif($d5>$a5 && $d5>$b5 && $d5>$c5){
    $employee46 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee26 = ' ';
    $employee36 = ' ';
    $employee16 = ' ';
}else{
    $employee46 = '-' ;
    $employee26 = '-';
    $employee36 = '-';
    $employee16 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql6 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'ขอเปิดสิทธิ์เข้าใช้เว็บไซต์ (Fortigate)' and serstatus = 'Fully Complete' ";
$result6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_assoc($result6);

$a6 = $row6['a'];
$b6=$row6['b'];
$c6=$row6['c'];
$d6=$row6['d'];
if($a6>$b6 && $a6>$c6 && $a6>$d6){
    $employee17 = 'นายวราเทพ เหรียญโมรา' ;
    $employee27 = ' ';
    $employee37 = ' ';
    $employee47 = ' ';
}elseif($b6>$a6 && $b6>$c6 && $b6>$d6){
    $employee27 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee17 = ' ';
    $employee37 = ' ';
    $employee47 = ' ';
}elseif($c6>$a6 && $c6>$b6 && $c6>$d6){
    $employee37 = 'นายจตุพร อินทร์งาม' ;
    $employee27 = ' ';
    $employee17 = ' ';
    $employee47 = ' ';
}elseif($d6>$a6 && $d6>$b6 && $d6>$c6){
    $employee47 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee27 = ' ';
    $employee37 = ' ';
    $employee17 = ' ';
}else{
    $employee47 = '-' ;
    $employee27 = '-';
    $employee37 = '-';
    $employee17 = '-';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql7 =" SELECT sum(`employee1`) as a , SUM(`employee2`)as b,SUM(`employee3`)as c ,SUM(`employee4`)as d FROM `tbservice` where sername = 'จุดติดตั้ง Wi-Fi' and serstatus = 'Fully Complete' ";
$result7 = mysqli_query($conn, $sql7);
$row7 = mysqli_fetch_assoc($result7);

$a7 = $row7['a'];
$b7=$row7['b'];
$c7=$row7['c'];
$d7=$row7['d'];
if($a7>$b7 && $a7>$c7 && $a7>$d7){
    $employee18 = 'นายวราเทพ เหรียญโมรา' ;
    $employee28 = ' ';
    $employee38 = ' ';
    $employee48 = ' ';
}elseif($b7>$a7 && $b7>$c7 && $b7>$d7){
    $employee28 = 'นาย จารุวัฒน์​ อุ​พัน​วัน ' ;
    $employee18 = ' ';
    $employee38 = ' ';
    $employee48 = ' ';
}elseif($c7>$a7 && $c7>$b7 && $c7>$d7){
    $employee38 = 'นายจตุพร อินทร์งาม' ;
    $employee28 = ' ';
    $employee18 = ' ';
    $employee48 = ' ';
}elseif($d7>$a7 && $d7>$b7 && $d7>$c7){
    $employee48 = 'นายสุรศักดิ์ ดิศกุล' ;
    $employee28 = ' ';
    $employee38 = ' ';
    $employee18 = ' ';
}else{
    $employee48 = '-' ;
    $employee28 = '-';
    $employee38 = '-';
    $employee18 = '-';
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>