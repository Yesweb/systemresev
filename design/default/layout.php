<?php ob_start(); ?>
<html style="height: 100%;">
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>System Reservasi</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/base.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/skeleton.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/layout.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/style.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/tables.css">

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
<body style="height: 100%;">

<div class="container">
	<div class="sixteen columns">
		<h1 class="remove-bottom" style="margin-top: 20px">Sistem reservasi</h1>
		<h5>Version 1.00</h5>
	</div>
	
	<div class="twelve columns">
		<?php
			include ("design/".$_CONFIG['templ']['main']."/switching.php");
		?>
	</div>

	<div class="four columns panelkanan" style="border:solid 0px red;">
		<?php
		include ("design/".$_CONFIG['templ']['main']."/menu.php");
		?>
	</div>
	
	<div class="sixteen columns">
		<h5>Footer</h5>
	</div>
</div>
</body>
</html>