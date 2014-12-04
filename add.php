<?php
$userid = $_POST ['userid'];
$content = $_POST ['content'];
$imageUrl = $_POST ['image_url'];
$audioUrl = $_POST ['audio_url'];
$longitude = $_POST ['longitude'];
$latitude = $_POST ['latitude'];
$createAt = $_POST ['created_time'];

$status = new Status ();

if ($content != NULL && $content != "") {
	$status->code = "200";
	$status->msg = "add secret ok" . "longtitude->" . $longitude . "    latitude->" . $latitude;
	echo json_encode ( array (
			"status" => $status 
	) );
} else {
	$status->code = "400";
	$status->msg = "add secret error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
// echo json_encode(array("user"=>$userid, "content"=>$content, "imageUrl"=>$imageUrl, "audioUrl"=>$audioUrl, "createAt"=>$createAt));
class Status {
	public $code;
	public $msg;
}

