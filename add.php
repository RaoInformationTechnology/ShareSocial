<?php 


include "config.php";

echo "g";
	error_reporting(-1);
	ini_set('display_errors', 'On');



/**********************RECAPTCHA**********************/


    // if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
    //     $secret = '6LfjcScTAAAAALHZhESeu5mmFUJ8skP0g_c-1Gkf';
	   //  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    //     $responseData = json_decode($verifyResponse);
    //     if($responseData->success):
    //     	$notRobot = true;
    //     else:
    //         $notRobot = false;
    //     endif;
    // else:
    //     $errMsg = 'Please click on the reCAPTCHA box.';
	   //  echo $errMsg;
    // 	exit();
    // endif;


/*****************************************************************/






	echo "hello";

	if(isset($_POST['formSubmit'])){



	$author = mysqli_real_escape_string($con,$_POST['author']);
	$title = mysqli_real_escape_string($con,$_POST['title']);
	$description = mysqli_real_escape_string($con,$_POST['description']);
	$url = mysqli_real_escape_string($con,$_POST['url']);
	echo $site_name = mysqli_real_escape_string($con,$_POST['site_name']);

	$target = "images/".$_FILES["file"]["name"];

	if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)){
		mysqli_query($con,"INSERT INTO `details`(`title`, `author`, `url`, `description`, `file`, `site_name`) VALUES ('$title','$author','$url','$description','$target','$site_name')") or die(mysqli_error($con));
		$last_id = mysqli_insert_id($con);

		// $url = "http://".$_SERVER["SERVER_NAME"]."/generate.php?id=".$last_id;
		$url = "generate.php?id=".$last_id;
		ob_start();
		header("Location:".$url);
		exit();
	}
	else{
		echo "Failed to upload file";
		header("Location : index.php?pm=IMAGE");
	}
}
else{
	echo "YOUR ARE A BOT";
}
