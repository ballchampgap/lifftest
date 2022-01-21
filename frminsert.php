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

    $sql =  "INSERT INTO data_epis (Name2,lat2,lon2,Plant2,Pest2,Details2,created_at)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip', '1970-01-01 00:00:01')";
    $resultInsert = mysqli_query($con, $sql);
}
else{

    $sql =  "INSERT INTO datapest (Name2,lat2,lon2,Plant2,Pest2,Details2,created_at)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip', '1970-01-01 00:00:01')";
    $resultInsert = mysqli_query($con, $sql);
}
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
if ($resultInsert) 
{

    header("Location:http://localhost/PHP-ADD/");
}

?>