<?php
require 'connect.php';


$pname = $_POST['displayName'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$planteco = $_POST['planteco'];
$epi = $_POST['epi'];
$pest = $_POST['pest'];
$descrip = $_POST['descrip'];

if ($epi=='epidemic'){

    $sql =  "INSERT INTO * FROM data_epis (Name2,lat2,lon2,Plant2,Pest2,Details2)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip')";
    $resultInsert = pg_query($con, $sql);
}
else{

    $sql =  "INSERT INTO * FROM datapest (Name2,lat2,lon2,Plant2,Pest2,Details2)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip')";
    $resultInsert = pg_query($con, $sql);
}
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
if ($resultInsert) 
{

    header("Location:http://localhost/PHP-ADD/");
}

?>