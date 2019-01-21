<?php
$host = "localhost";         //server mysql default pada cpanel : localhost
$username = "nakomedia"; //user database mysql
$password = "kmz967zh72";  //password database mysql
$dbname = "tester"; //nama database mymsql
$con = mysql_connect($host,$username,$password) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>