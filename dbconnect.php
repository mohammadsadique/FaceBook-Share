<?php
$host = "localhost";
$user = "neurojtl_rb";
$pass = "rbHello@123#";
$db = "neurojtl_rb";
$conn = mysqli_connect($host,$user,$pass) or die ("db error new");
mysqli_select_db($conn,$db) or die ("db error new");
?>