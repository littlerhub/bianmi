<?php
$token = $_GET ['token'];
$lastid = $_GET ['lastid'];
$batch = $_GET ['batch'];

$status = new Status ();

if ($token != "" && $lastid == "") {
	// Status
	$status->code = "200";
	$status->msg = "get system_reminder ok";
	// Secrets
	$system_reminder = new SystemReminder ();
	$system_reminder->id = 123123;
	$system_reminder->title = "我是标题";
	$system_reminder->subtitle = "我是副标题";
	$system_reminder->h5_url = "http://www.baidu.com";
	$system_reminder->image_url = "http://bianmi.qiniudn.com/offical/reminder/image/ic_launcher.png";
	$system_reminders = array (
			0 => $system_reminder,
			1 => $system_reminder,
			2 => $system_reminder,
			3 => $system_reminder,
            4 => $system_reminder 			
	);
	
	$list = new DataList ();
	$list->has_more = true;
	$list->system_reminders = $system_reminders;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
}else if ($token != "" && $lastid != "") {
	// Status
	$status->code = "200";
	$status->msg = "load more system_reminder ok";
	// Secrets
	$system_reminder = new SystemReminder ();
	$system_reminder->id = 123123;
	$system_reminder->title = "我是标题";
	$system_reminder->subtitle = "我是副标题";
	$system_reminder->h5_url = "http://www.baidu.com";
	$system_reminder->image_url = "http://bianmi.qiniudn.com/offical/reminder/image/ic_launcher.png";
	$system_reminders = array (
			0 => $system_reminder,
			1 => $system_reminder,
			2 => $system_reminder,
			3 => $system_reminder,
            4 => $system_reminder 			
	);
	
	$list = new DataList ();
	$list->has_more = false;
	$list->system_reminders = $system_reminders;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
}else {
	$status->code = "400";
	$status->msg = "get system_reminder error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class SystemReminder {
	public $id;
	public $title;
	public $image_url;
	public $subtitle;
	public $h5_url;
	
}
class Status {
	public $code;
	public $msg;
}
class DataList {
	public $has_more;
	public $system_reminders;
}
