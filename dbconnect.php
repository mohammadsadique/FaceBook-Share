<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "databasename";
$conn = mysqli_connect($host,$user,$pass) or die ("db error");
mysqli_select_db($conn,$db) or die ("db error");
?>