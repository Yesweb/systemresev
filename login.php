<?php
session_start();
 
if (!empty($_SESSION['username'])) {
        header('location:index.php');
}

	include ("lib/adodb/adodb.inc.php");
	include ("lang/indonesia.php");
	include ("config.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/base.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/skeleton.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/layout.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
 
<body>
 
<div class="container">
	<div class="sixteen columns">
		<h1 class="remove-bottom" style="margin-top: 20px">Sistem reservasi</h1>
		<h5>Version 1.00</h5>
		<hr />
	</div>
	<div class="one-third column">
	&nbsp;
<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h5 style="color:red; text-align:center;">Username dan Password belum diisi!</h5>';
    } else if ($_GET['error'] == 2) {
        echo '<h5 style="color:red; text-align:center;">Username belum diisi!</h5>';
    } else if ($_GET['error'] == 3) {
        echo '<h5 style="color:red; text-align:center;">Password belum diisi!</h5>';
    } else if ($_GET['error'] == 4) {
        echo '<h5 style="color:red; text-align:center;">Username atau Password tidak terdaftar!</h5>';
    }
}
?>
	</div>
	<div class="one-third column">
	<h2>LOGIN</h2>
		<form name="login" action="auth.php" method="post">
			<label for="regularInput">Username</label><input type="text"  name="username" id="regularInput" />
			<label for="regularInput">Password</label><input type="password" name="password" id="regularInput" />
			<button type="submit" style="width:220px;">Login</button>
		</form>
	</div>
	<div class="one-third column">
		&nbsp;
	</div>
	<div class="sixteen columns">
		<hr />
	</div>
</div>
</body>
</html>