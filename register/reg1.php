<?php 
include("../lib/koneksi.php");
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$code = generateRandomString(8);
$email = $_GET['email'];
$pass = $_GET['password'];
$email = mysql_real_escape_string($email);
$pass = mysql_real_escape_string($pass);

$query = mysql_query("INSERT INTO user (email,password,admin,regby,isactive) VALUES ('".$email."','".$pass."',0,'nakomedia', '1')");
if($query) {
exit(header('location: /login/index.php?reg=0')); // result berhasil
} else {
exit(header('location: /register/index.php?reg=1')); // sebaliknya result gagal
}

?>
