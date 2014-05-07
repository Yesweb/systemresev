<?php
ob_start();
$usern = $_SESSION['username'];
?>
<html>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>System Reservasi HPAM</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/base.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/skeleton.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/layout.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/tables.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/style_green.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/font/stylesheet.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script type="text/javascript">
window.onload = function () {
    setCursor(document.getElementById('focus'), 0, 0)
}

function setCursor(el, st, end) {
    if (el.setSelectionRange) {
        el.focus();
        el.setSelectionRange(st, end);
    } else {
        if (el.createTextRange) {
            range = el.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', st);
            range.select();
        }
    }
}
</script>

</head>
<body>

<div class="container shadow" style="background: #e4e4e5;">
	<div class="sixteen columns headerbg" style="margin-left: 0px; margin-right: 0px; width:100%;">
		<div class="ten columns" style="border: 0px solid red;">
			<h3 class="logotext" style="margin-top: 7px;">Sistem reservasi</h3>
		</div>
		<div class="five columns" style="border: 0px solid red;">
			<div class="welcome">Wellcome, <strong><?=$usern?></strong></div>
		</div>
	</div>
	
	<div class="twelve columns panelkiri" style="margin-left: 0px; margin-right: 0px;">
		<div class="contentcontainer">
<?php
		include ("design/".$_CONFIG['templ']['main']."/switching.php");
?>
		</div>
	</div>

	<div class="four columns" style="margin-left: 0px; margin-right: 0px; border:solid 0px red;">
		<div class="menucontainer" style="border:solid 0px red;">
<?php
		include ("design/".$_CONFIG['templ']['main']."/menu.php");
?>
		</div>
	</div>
	
	<div class="sixteen columns" style="background: #000000; margin-left: 0px; margin-right: 0px; width:100%;">
		<div class="footer">Sistem reservasi &copy; yesweb.co.id</div>
	</div>
</div>
</body>
</html>