<?php ob_start(); ?>
<html style="height: 100%;">
<head>
<title>System Reservasi</title>

	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/base.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/skeleton.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/layout.css">
	<link rel="stylesheet" href="design/<?=$_CONFIG['templ']['main']?>/css/style.css">

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