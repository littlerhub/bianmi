<?php

$secretid = $_POST['secretid'];
$userid = $_POST['userid'];
$content = $_POST['content'];
$audioUrl = $_POST['audio_url'];
$createAt = $_POST['created_time'];

$status = new Status();

if($content != NULL && $content != "123"){
	$status->code = "200";
	$status->msg = "add secret ok";
	echo json_encode(array("status"=>$status));
}else{
	$status->code = "400";
	$status->msg = "add secret error";
	echo json_encode(array("status"=>$status));
}
//echo json_encode(array("user"=>$userid, "content"=>$content, "imageUrl"=>$imageUrl, "audioUrl"=>$audioUrl, "createAt"=>$createAt));
class Status{
	public $code;
	public $msg;
}

