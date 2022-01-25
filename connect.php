<?php

$host = "ec2-54-157-15-228.compute-1.amazonaws.com";
$user = "hnkkpwkeaplrup";
$password = "815f51a88490c034b86254dc776c49d16d9c20e4858ffc186e73ff74072aa98b";
$dbname = "d7fj264o5io37t";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
//create a pdo instance
   $myPOD = new PDO($dsn, $user, $password);

}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>