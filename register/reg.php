<?php
require_once('../lib/koneksi.php');
$username = $_POST['email'];
if(!strpos($username, "@")) {
    exit(header('location: /login/index.php?reg=1'));
}
$username = mysql_real_escape_string(trim(stripslashes(strip_tags(htmlspecialchars($_POST['email'])))));
$password = mysql_real_escape_string(trim(stripslashes(strip_tags(htmlspecialchars($_POST['password'])))));
$cekuser = mysql_query("SELECT * FROM user WHERE email = '$username'");
if(mysql_num_rows($cekuser) == 1) {
header('location: /register/index.php?reg=1');
} else {
if(!$username || !$password) {
header('location: /register/index.php?reg=1');
} else {
$simpan = 1;
if($simpan) {
exit(header('location: /register/reg1.php?email='.$username.'&password='.$password));
} else {
header('location: /login/index.php?reg=1');
}
}
}
?>