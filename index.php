

<html>
<head>
	<meta name="description" content="ShareSocial provides a service of sharing any webpage, of any website, with photo of your choice and your own description on social networks such as FB, LinkedIn, Google+ and whatsapp.">
	<meta name="keywords" content="SEO, share, facebook, custom article, dynamic link binding,ShareSocial, Facebook, Google+, LinkedIn, WhatsApp, Social, share, socialmedia, eventsharing, share social media links, share social media, event share social, share social network">
	<meta name="author" content="Rao Information Technology">
	<meta name="image" content="http://www.sharesocial.in/finalLogo-min.png">
	<meta name="msvalidate.01" content="26DE60B69591E871D77DF0E47F9CB256" />
	<meta charset="UTF-8">
	
	<meta name="og:title" content="Share Social">
	<meta name="og:image" content="http://www.sharesocial.in/finalLogo-min.png">
	<meta name="og:description" content="ShareSocial provides a service of sharing any webpage, of any website, with photo of your choice and your own description on social networks such as FB, LinkedIn, Google+ and whatsapp.">
	<meta name="og:keywords" content="SEO, share, facebook, custom article, dynamic link binding">
	<meta name="og:author" content="Rao Information Technology">

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83220033-1', 'auto');
  ga('send', 'pageview');

</script>

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
		height: 75%;
	}
	.underline{
		text-decoration: underline;
	}
	.light-grey{
		background-color: #eee;
	}
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>

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
		<div class="row ">
			<div class="col-md-12">
				<div class="row flex full-height light-grey">
					<div class="col-md-8 col-md-offset-2 w3">
						<h2 class="text-primary">Fill your page details</h2>
						<form method="post" enctype="multipart/form-data" action="add.php">
							<table class="table table-responsive">
								<tr>
									<td class="text-primary">Author :</td>
									<td><input required class="form-control" type="text" name="author"></td>
								</tr>
								<tr>
									<td class="text-primary">Title :</td>
									<td><input required class="form-control" type="text" name="title"></td>
								</tr>
								<tr>
									<td class="text-primary">Description :</td>
									<td><input required class="form-control" type="text" name="description"></td>
								</tr>
								<tr>
									<td class="text-primary">URL :</td>
									<td><input required class="form-control" type="text" name="url"></td>
								</tr>
								<tr>
									<td class="text-primary">Site Name :</td>
									<td><input required class="form-control" type="text" name="site_name"></td>
								</tr>
								<tr>
									<td class="text-primary">Image :</td>
									<td><input required class="" type="file" name="file"></td>
								</tr>
							<!-- 	<tr>
									<td>&nbsp;</td>
									<td>
										<div class="g-recaptcha" data-sitekey="6LcSZ6QUAAAAAO86RCEfao6Azab2XZ8lAnHBmmiC"></div>
									</td>
								</tr> -->
								<tr>
									<td colspan="2" class="text-center"><button type="submit" name="formSubmit" class="btn btn-success">Submit</button></td>
								</tr>
							</table>
						</form>
					</div>

				</div>
			</div>
			<hr style="width:100%; height:2px; background-color:black;">
		</div>
		<div class="row"  style="font-family:monospace">
			<div class="col-md-12 light-grey">
				<h1 class="text-center">Tutorial</h1>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="well">
							<h2 class="page-header">Step 1</h2>
							<div class="row">
								<div class="col-md-10 col-md-offset-1 well-lg">
									<p class="lead text-justify">Open the page you want to share and copy paste them into the associated fields as shown below.
										The image would be displayed differently in each site, like, It would be around 600X400 in Facebook while 250X250 in whatsapp. So the subject in the image should be preferably in the middle.
									</p>
									<img src="tutorial/source.png" class="img-responsive img-thumbnail">
								</div>
								<div class="col-md-10 col-md-offset-1 jumbotron text-center">
									<img src="tutorial/form.png" class="img-responsive img-thumbnail">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="well">
							<h2 class="page-header">Step 2</h2>
							<div class="row">
								<div class="col-md-10 col-md-offset-1 jumbotron text-center">
									<p class="lead text-justify">Press Submit and get your generated link. Now Go to Facebook and paste it into the share post section and wait till it loads the section. After it has loaded properly along with the image, remove the link and write your own message there and post it.
										If the image doesn't appear in the article, then refresh the page again and paste the link into the box again.
									</p>
									<div class="row">
										<div class="col-md-6 text-center">
											<h3 class="text-danger underline">Facebook</h3>
											<img src="tutorial/fbOutput.png" class="img-responsive img-thumbnail">
										</div>
										<div class="col-md-6 text-center">
											<h3 class="text-danger underline">Google + </h3>
											<img src="tutorial/googlePlusOutput.png" class="img-responsive img-thumbnail">
										</div>
										<div class="col-md-6 text-center">
											<h3 class="text-danger underline">LinkedIn</h3>
											<img src="tutorial/linkedinOutput.png" class="img-responsive img-thumbnail">
										</div>
										<div class="col-md-6 text-center">
											<h3 class="text-danger underline">WhatsApp</h3>
											<img src="tutorial/whatsappOutput.png" class="img-responsive img-thumbnail">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	

<div class="well-sm">
<a href="http://www.raoinformationtechnology.com">Developed by Rao Information Technology Pvt Ltd</a>
</div>
</body>



</html>
