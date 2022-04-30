<?php

$sname= "localhost";
$unmae= "root";
$password = "";
 
$db_name = "sneakersy_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("sneakersy_db") or die(mysql_error());
mysql_query("SET NAMES utf-8");