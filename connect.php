<?php
$host        = "host = ec2-54-157-15-228.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7fj264o5io37t";
   $credentials = "user = hnkkpwkeaplrup password=815f51a88490c034b86254dc776c49d16d9c20e4858ffc186e73ff74072aa98b";
   $db = pg_connect( "$host $port $dbname $credentials");
?>