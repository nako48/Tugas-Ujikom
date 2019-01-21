<?php
session_start();
require_once("../lib/koneksi.php");
session_start();
$username = mysql_real_escape_string(trim(stripslashes(strip_tags(htmlspecialchars($_POST['mail']))))); // Anti Bypass SQL DAN ADMIN
$username = mysql_real_escape_string($username);{
if(in_array($username,[hex2bin("5c"),"|","#"]) or in_array($pass,[hex2bin("5c"),"|","#"])){
header('location: /login/index.php?error=karakter');
}
if(!strpos($username, "@")) {
	exit(header('location: /login/index.php?error=email'));
}
$pass = mysql_real_escape_string(trim(stripslashes(strip_tags(htmlspecialchars($_POST['pass']))))); // Anti Bypass SQL DAN ADMIN
$cekuser = mysql_query("SELECT * FROM user WHERE email = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
	header('location: /login/index.php?error=1');
} else {
	if($pass <> $hasil['password']) {
		header('location: /login/index.php?error=1');
	} else {
		if($hasil['isactive'] == '0') {
			exit(header('location: /login/index.php?error=2'));
		} else {
			$_SESSION['email'] = $username;
			header('location: /home/index.php');
		}
	}
	}
}
?>