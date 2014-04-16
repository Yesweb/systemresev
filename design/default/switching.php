<?php
include ("lib/back.php");
include ("application/app_set_param.php");

$usern = $_SESSION['username'];
$stat = $db->Execute("SELECT permit FROM user WHERE username='$usern'");
while($data_termstat = $stat->FetchRow()) {
	$cek_termstat = $data_termstat['permit'];
}


switch($_GET['view']) {
	case "":
		include ("design/".$_CONFIG['templ']['main']."/block_design_log.php");
	break;
	
	case "check":
		include ("design/".$_CONFIG['templ']['main']."/block_design_check.php");
	break;
	
	case "input":
		include ("design/".$_CONFIG['templ']['main']."/block_design_input.php");
	break;
	
	case "registerform":
		include ("design/".$_CONFIG['templ']['main']."/block_design_registerform.php");
	break;
	
	case "register":
		include ("design/".$_CONFIG['templ']['main']."/block_design_register.php");
	break;
	
	case "aktivasiform":
		include ("design/".$_CONFIG['templ']['main']."/block_design_aktivasiform.php");
	break;
	
	case "aktivasi":
		include ("design/".$_CONFIG['templ']['main']."/block_design_aktivasi.php");
	break;
	
	case "deaktivasiform":
		include ("design/".$_CONFIG['templ']['main']."/block_design_deaktivasiform.php");
	break;
	
	case "deaktivasi":
		include ("design/".$_CONFIG['templ']['main']."/block_design_deaktivasi.php");
	break;
	
	case "memberlist":
		include ("design/".$_CONFIG['templ']['main']."/block_design_memlist.php");
	break;
	
	case "history":
		include ("design/".$_CONFIG['templ']['main']."/block_design_history.php");
	break;
	
	case "user":
		include ("design/".$_CONFIG['templ']['main']."/block_design_user.php");
	break;
	
	case "adduser":
		include ("design/".$_CONFIG['templ']['main']."/block_design_adduser.php");
	break;
	
	case "adduserinsert":
		include ("design/".$_CONFIG['templ']['main']."/block_design_adduserinsert.php");
	break;
	
	case "group":
		include ("design/".$_CONFIG['templ']['main']."/block_design_group.php");
	break;
	
	case "addgroup":
		include ("design/".$_CONFIG['templ']['main']."/block_design_addgroup.php");
	break;
	
	case "addgroupinsert":
		include ("design/".$_CONFIG['templ']['main']."/block_design_addgroupinsert.php");
	break;
	
	case "groupmanage":
		include ("design/".$_CONFIG['templ']['main']."/block_design_groupmanage.php");
	break;
	
	case "menuadd":
		include ("design/".$_CONFIG['templ']['main']."/block_design_menuadd.php");
	break;

	//error handling
	case "81":
		echo "<h4 style='text-align:center;'>$code81<br /><br />[ $back ]</h4>";
	break;

	case "82":
		echo "<h4 style='text-align:center;'>$code82<br /><br />[ $back ]</h4>";;
	break;

	case "91":
		echo "<h4 style='text-align:center;'>$code91<br /><br />[ $back ]</h4>";
	break;

	case "92":
		echo "<h4 style='text-align:center;'>$code92<br /><br />[ $back ]</h4>";
	break;

	case "93":
		echo "<h4 style='text-align:center;'>$code93<br /><br />[ $back ]</h4>";
	break;

	case "94":
		echo "<h4 style='text-align:center;'>$code94<br /><br />[ $back ]</h4>";
	break;

	case "95":
		echo "<h4 style='text-align:center;'>$code95<br /><br />[ $back ]</h4>";
	break;
}
?>