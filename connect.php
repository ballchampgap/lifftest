<?php

    $host = "ec2-54-157-15-228.compute-1.amazonaws.com";
    $username = "hnkkpwkeaplrup";
    $password = "815f51a88490c034b86254dc776c49d16d9c20e4858ffc186e73ff74072aa98b";
    $db_name = "d7fj264o5io37t";
    $port = "5432";

    $con = pg_connect($host, $username, $password, $db_name, $port); //เชื่อมต่อกับฐานข้อมูล

    if (pg_connect_errno())
  {
  echo "Failed to connect to MySQL: " . pg_connect_error();
  }
?>