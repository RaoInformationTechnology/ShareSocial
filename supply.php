<?php
include 'config.php';
$current_url =$_SERVER["REQUEST_URI"];
error_reporting(-1);
ini_set('display_errors', 'On');


$id = $_GET['id'];
$result = mysqli_query($con,"select * from `details` where id = $id") or die(mysqli_error($con));
while($x = mysqli_fetch_assoc($result)){
	echo $title = $x["title"];
	$site_name = $x["site_name"];
	$image = $x["file"];
	$description = $x["description"];
	$author = $x["author"];
	$url = $x["url"];

	$image = $image;
}

$whatsapp = false;

if (strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot-Mobile") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "+https://developers.google.com/+/web/snippet/") !== false  || strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'whatsapp') !== false || strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'linkedin') !== false) {
	if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'whatsapp') !== false){
		$whatsapp = true;
	}else{
		$whatsapp = false;
	}
	    // echo "<meta property='og:title' content='DETECTED FB' />";
}
else {
	ob_start();
	header("Location:".$url);
	exit();
}
?>

<html>
<head>

	<meta property="fb:app_id" content="807373209363035" /> 
	<?php 
	if($whatsapp){
		?>

		<meta property="og:type" content="website" />
		<meta property="og:image:height" content="250" />
		<meta property="og:image:width" content="250" />
		<meta name="title" content="<?php echo $title; ?>" />
		<meta property="og:title" content="<?php echo $title; ?>" />

		<?php
	}
	else{
		?>
		<meta name="title"   content="<?php echo $title; ?>" />
		<meta property="og:title" content="<?php echo $title; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image:height" content="400" />
		<meta property="og:image:width" content="600" />

		
		<?php
	}
	?>
	<link rel="canonical" href="<?php echo $current_url;?>"/>
	<meta property="og:site_name" content="<?php echo $site_name; ?>" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@nytimesbits" />
	<meta name="twitter:creator" content="@nickbilton" />
	
	<meta property="og:url" content="<?php echo $current_url;?>" />
	<meta property="og:image" content="<?php echo $image; ?>" />
	<meta property="image" content="<?php echo $image; ?>" />
	
	<meta property="og:description"   content="<?php echo $description; ?>" />
	<meta property="og:author"   content="<?php echo $author; ?>" />
	<meta property="og:publisher"   content="<?php echo $author; ?>" />

	<meta name="author" content="<?php echo $author; ?>">
	<meta name="language" content="English">
	
	<meta name="url" content="<?php echo $current_url;?>" />
	<meta name="description"   content="<?php echo $description; ?>" />
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83220033-1', 'auto');
		ga('send', 'pageview');

	</script>
</head>

<body>
	<?php 

	if($whatsapp){
		?>
		<link itemprop="thumbnailUrl" href="<?php echo $image; ?>"> 
		<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
			<link itemprop="url" href="<?php echo $image; ?>"> 
		</span>
		<?php
	}
	?>
</body>


</html>
