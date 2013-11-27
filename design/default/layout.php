<?php ob_start(); ?>
<html style="height: 100%;">
<head>
<title>System Reservasi</title>

<style type="text/css" media="all">
	@import "design/<?= $_CONFIG['templ']['main']; ?>/css/style.css";
</style>

</head>
<body style="height: 100%;">

<div class="panelkiri">

	<div style="border:solid 0px red;" class="invoice">
		<?php
			include ("design/".$_CONFIG['templ']['main']."/switching.php");
		?>
	</div>

</div>

<div class="panelkanan" style="border:solid 0px red;">
	<?php
	include ("design/".$_CONFIG['templ']['main']."/menu.php");
	?>
</div>

</body>
</html>