<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloguś";

$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("połączenie nieudane" . $conn->connect_error);
 }
 
?>