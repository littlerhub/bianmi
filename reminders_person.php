<?php
$userid = $_GET ['userid'];
$token = $_GET ['token'];
$lastid = $_GET ['lastid'];
$batch = $_GET ['batch'];

$status = new Status ();

if ($userid != "" && $token != "" && $lastid == "") {
	// Status
	$status->code = "200";
	$status->msg = "get person_reminder ok";
	// Secrets
	$person_reminder = new PersonReminder ();
	$person_reminder->id = "123123";
	$person_reminder->secretid = "123123";
	$person_reminder->title = "我是标题";
	$person_reminder->content = "我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容我是内容";
	$person_reminder->likes = "123";
	$person_reminder->comments = "211";
	$person_reminder->image_url = "http://bianmi.qiniudn.com/20141208185154.jpg";
	
	$person_reminders = array (
			0 => $person_reminder,
			1 => $person_reminder,
			2 => $person_reminder,
			3 => $person_reminder 
	);
	
	$list = new DataList ();
	$list->has_more = true;
	$list->person_reminders = $person_reminders;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
}else if ($userid != "" && $token != "" && $lastid != "") {
	// Status
	$status->code = "200";
	$status->msg = "get person_reminder ok";
	// Secrets
	$person_reminder = new PersonReminder ();
	$person_reminder->id = "123123";
	$person_reminder->secretid = "123123";
	$person_reminder->title = "我是more标题";
	$person_reminder->content = "我是more内容";
	$person_reminder->likes = "123";
	$person_reminder->comments = "211";
	$person_reminder->image_url = "http://bianmi.qiniudn.com/test.jpg";
	
	$person_reminders = array (
			0 => $person_reminder,
			1 => $person_reminder,
			2 => $person_reminder,
			3 => $person_reminder 
	);
	
	$list = new DataList ();
	$list->has_more = false;
	$list->person_reminders = $person_reminders;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
}else {
	$status->code = "400";
	$status->msg = "get person_reminder error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class PersonReminder {
	public $id;
	public $secretid;
	public $title;
	public $content;
	public $likes;
	public $comments;
	public $image_url;
	
}
class Status {
	public $code;
	public $msg;
}
class DataList {
	public $has_more;
	public $person_reminders;
}

