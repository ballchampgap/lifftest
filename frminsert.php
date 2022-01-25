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

    $sql =  "INSERT INTO epis (lat,lon,plant,pest_epis,what,descrip,yourname)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip','$pname')";
    $pdo -> query($sql);
}
else{

    $sql =  "INSERT INTO datapest (lat,lon,plant,pest_epis,what,descrip,yourname)
    VALUE ('$pname', '$lat', '$lon','$planteco', '$epi','$descrip','$pname')";
    $pdo -> query($sql);
}
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
if ($resultInsert) 
{

    header("Location:http://localhost/PHP-ADD/");
}

?>