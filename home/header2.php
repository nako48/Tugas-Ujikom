<?php 
error_reporting(0) ?>
<?php

session_start();

if (empty($_SESSION['email'])){
  header('location: ../login/index.php'); 
}
include('../lib/koneksi.php');
$totaluser = mysql_query("SELECT * FROM user WHERE isactive='1'");
$totaluser = mysql_num_rows($totaluser);
$verif = mysql_query("SELECT * FROM user WHERE isactive='0'");
$verif = mysql_num_rows($verif);
$queryw = "SELECT * FROM news WHERE id IN(SELECT MAX(id) FROM news)";
$exew = mysql_query($queryw);
while($roww = mysql_fetch_assoc($exew)){
  $news = $roww['message']; 

}
$email = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email='$email'";
$exe = mysql_query($query);
$no = 1;
while($row = mysql_fetch_assoc($exe)){
  $invite = $row['regby']; 
  $admin = $row['admin']; 
}
$cekuser = mysql_query("SELECT * FROM user WHERE email = '".$_SESSION["email"]."'");
$jumlah = mysql_num_rows($cekuser);
if($jumlah == 0) {
  session_destroy();
  header('location: /login/index.php');
}
if ($banned == 1) {
  session_destroy();
  header('location: /login/index.php?banned');
}

?>
<?php

$ndauser = mysql_query ("SELECT email, COUNT(email) FROM user");
$kutuser = mysql_fetch_array($ndauser);
$limituser=$kutuser['COUNT(email)'];
$query = "SELECT * FROM user ORDER BY email LIMIT 0,$limituser";
$exe = mysql_query($query);
$no = 1;
while($row = mysql_fetch_assoc($exe)){
  $statusband=$row['isactive'];
  $mailuser=$row['email'];
  $cre=$row['credits'];
  if($statusband==0){$statusnya='<font color=red>No Verifikasi</font>';}else{$statusnya='<font color=green>Verifikasi</font>';}
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-3">
          <br>
          <div class="list-group">
            <?php if($admin==1){ ?>
            <a href="/data.php" class="list-group-item active">LIST DATA</a>
                    <?php } ?>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
        </div>