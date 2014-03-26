<?php
include ("application/app_set_param.php");

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
	
	case "memberlist":
		include ("design/".$_CONFIG['templ']['main']."/block_design_memlist.php");
	break;

	//error handling
	case "81":
		echo "<h4 style='text-align:center;'>$code81</h4>";
	break;

	case "82":
		echo "<h4 style='text-align:center;'>$code82</h4>";;
	break;

	case "91":
		echo "<h4 style='text-align:center;'>$code91</h4>";
	break;

	case "92":
		echo "<h4 style='text-align:center;'>$code92</h4>";
	break;

	case "93":
		echo "<h4 style='text-align:center;'>$code93</h4>";
	break;

	case "94":
		echo "<h4 style='text-align:center;'>$code94</h4>";
	break;

	case "95":
		echo "<h4 style='text-align:center;'>$code95</h4>";
	break;
}
?>