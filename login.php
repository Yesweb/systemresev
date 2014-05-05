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
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/style_green.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/font/stylesheet.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
 
<body>
<form class="login" name="login" action="auth.php" method="post">
 
<div class="container">

	<div class="sixteen columns">
		<h1>&nbsp;</h1>
	</div>


	<div class="five columns">
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
	<div class="six columns shadow">
		<div class="logincontainer">
		<h4>Login</h4>
			<input type="text"  name="username" id="regularInput" style="width:88%;" value="Username" />
			<input type="password" name="password" id="regularInput" style="width:88%;" value="Password" />
			<button type="submit" style="width: 100px;">Submit</button>
		</div>
		<div class="buttonlogincontainer">
			<white01>Sistem Reservasi</white01> <bar01>|</bar01> <green01>Versi 1.0.0</green01>
		</div>
	</div>
	<div class="four column">
		&nbsp;
	</div>
</div>
</form>
</body>
</html>