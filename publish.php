<?php
$userid = $_POST ['userid'];
$token = $_POST ['token'];
$content = $_POST ['content'];
$imageUrl = $_POST ['image_url'];
$audioUrl = $_POST ['audio_url'];
$audioLength = $_POST ['audio_length'];
$longitude = $_POST ['longitude'];
$latitude = $_POST ['latitude'];
$city = $_POST ['city'];

$status = new Status ();

if ($userid != "" && $token != "") {
	$status->code = "200";
	$status->msg = "发表成功!";
	echo json_encode ( array (
			"status" => $status 
	) );
} else {
	$status->code = "400";
	$status->msg = "发表失败！";
	echo json_encode ( array (
			"status" => $status 
	) );
}

class Status {
	public $code;
	public $msg;
}

