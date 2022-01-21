<?php

    $host = "ec2-18-210-159-154.compute-1.amazonaws.com";
    $username = "qgauuuivddfazg";
    $password = "c65d118db55f21168a5259dd6e21af9db079b95f2a2f7aa4454cddc74666c7a9";
    $db_name = "ddjec5aekd1isp";
    $port = "5432";

    $con = pg_connect($host, $username, $password, $db_name, $port); //เชื่อมต่อกับฐานข้อมูล

    if (pg_connect_errno())
  {
  echo "Failed to connect to Postgresql: " . pg_connect_error();
  }
?>