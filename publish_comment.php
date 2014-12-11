<?php

$userid = $_POST['userid'];
$token = $_POST['token'];
$content = $_POST['content'];
$secretid = $_POST['secretid'];
$audioUrl = $_POST['audio_url'];
$audioLength = $_POST['audio_length'];


$status = new Status();

if($userid != "" && $token != ""){
	$status->code = "200";
	$status->msg = "publish comment ok";
	echo json_encode(array("status"=>$status));
}else{
	$status->code = "400";
	$status->msg = "publish comment error";
	echo json_encode(array("status"=>$status));
}

class Status{
	public $code;
	public $msg;
}

