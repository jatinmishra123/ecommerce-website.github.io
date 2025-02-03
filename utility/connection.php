<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname='grocerry';
$con= mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($con,'grocerry');
define('D',"/backend_projects/grocerry");
?>