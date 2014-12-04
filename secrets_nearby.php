<?php
$secretid = $_GET ['lastid'];
$batch = $_GET ['batch'];

$status = new Status ();

if ($batch != NULL) {
	// Status
	$status->code = "200";
	$status->msg = "add secret ok";
	// Secrets
	$secret = new Secret ();
	$secret->id = 123123;
	$secret->content = "附近---并不是所有的秘密都叫变秘!";
	$secret->image_url = "http://bianmi.qiniudn.com/test.jpg";
	$secret->audio_url = "http://bianmi.qiniudn.com/secret/audio/89a9a9b5c7044e14b60a868f30e460c9_1412348604306.amr?attname=";
	$secret->audio_length = 60;
	$secret->comments = 3423;
	$secret->likes = 22;
	$secret->from = "200米内";
	$secret->creat_time = 1234123;
	$secrets = array (
			0 => $secret,
			1 => $secret,
			2 => $secret,
			3 => $secret 
	);
	
	$list = new DataList ();
	$list->has_more = true;
	$list->secrets = $secrets;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
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
	public $from;
	public $creat_time;
}
class Status {
	public $code;
	public $msg;
}
class DataList {
	public $has_more;
	public $secrets;
}
