<?php
$userid = $_GET ['userid'];
$token = $_GET ['token'];
$secretid = $_GET ['secretid'];


$status = new Status ();

if ($userid != "" && $token != "" && $secretid != "") {
	// Status
	$status->code = "200";
	$status->msg = "get secret  details ok";
	// Secrets
	$secret = new Secret ();
	$secret->id = 123123;
	$secret->content = "秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容秘密内容";
	$secret->image_url = "http://bianmi.qiniudn.com/secret/image/3670996646360963567.jpg?attname=";
	$secret->audio_url = "http://bianmi.qiniudn.com/secret/audio/89a9a9b5c7044e14b60a868f30e460c9_1412348604306.amr?attname=";
	$secret->audio_length = 60;
	$secret->comments = 3423;
	$secret->likes = 22;
	$secret->creat_time = 1234123;
	
	echo json_encode ( array (
			"status" => $status,
			"secret" => $secret 
	) );
} else {
	$status->code = "400";
	$status->msg = "add secret error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class Secret {
	public $id;
	public $content;
	public $image_url;
	public $audio_url;
	public $audio_length;
	public $likes;
	public $comments;
	public $creat_time;
}
class Status {
	public $code;
	public $msg;
}