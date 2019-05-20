<?php
header('Access-Control-Allow-Origin: '. $_SERVER['HTTP_ORIGIN'] );
header('Access-Control-Allow-Credentials: true' );
header('Access-Control-Request-Method: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: *,x-requested-with,Content-Type');
header('X-Frame-Options: DENY');





$API_ACCESS_KEY ='AAAAPrVIlv0:APA91bFY4kh2GcMRpGyJcoRXbd6h_Yojg5QH3JS_3LU_i8u0JwTIRstQRCPp_thvI4cChHecW8NLEA2uRNnkWdWDPnKIsbo3XuLPb-NpHuJaHZU1TCfFUioioRXAW8nQg6eTIS0iRX-Q';

$singleID = $_POST['token'];
$registrationIDs = array($_POST['token']);
$fcmMsg = array(
	'body' => $_POST['msg'],
	'title' => '❤ Message From Bae ❤',
	'sound' => "default",
	'color' => "#203E78",
	'vibrate'	=> 1,
	'largeIcon'	=> 'assets/images/heart.png',
	'smallIcon'	=> 'small_icon'
	);
$fcmFields = array(
	'to' => $singleID,
	'priority' => 'high',
	'notification' => $fcmMsg
	);

$headers = array(
	'Authorization: key=' . $API_ACCESS_KEY,
	'Content-Type: application/json'
	);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result . "\n\n";