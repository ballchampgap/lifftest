<?php

require 'connect.php';

if(isset($_POST['submit'])){
$pname = $_POST['displayName'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$planteco = $_POST['planteco'];
$epi = $_POST['epi'];
$pest = $_POST['pest'];
$descrip = $_POST['descrip'];

// if ($epi=='epidemic'){
    $sql = $conn->prepare("INSERT INTO epis(lat,lon,plant,pest_epis,what,descrip,yourname)VALUES(:lat, :lon, :planteco, :epi, :pest, :descrip :pname)");
    $sql->bindParam(":lat", $lat);
	$sql->bindParam(":lon", $lon);
	$sql->bindParam(":planteco", $planteco);
	$sql->bindParam(":epi", $epi);
	$sql->bindParam(":pest", $pest);
	$sql->bindParam(":descrip", $descrip);
	$sql->bindParam(":pname", $pname);
	$sql->execute();

	if ($sql){
		$_SESSION['success'] = "Data has been inserted succesfully";
		header("location: index.php");
	}else{
		$_SESSION['error'] = "Data has been inserted succesfully";
		header("location: index.php");
	}
}
// else{

//     $sql =  "INSERT INTO datapess (lat,lon,plant,pest_epis,what,descrip,yourname)VALUES('$lat', '$lon','$planteco', '$epi','$descrip','$pname')";
//     $myPOD->query($sql);
// }
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
?>