<?php

$userid = $_GET ['userid'];
$token = $_GET ['token'];

$sessionid=session_id(); 

if ($userid != "" && $token != "") {

$status = new Status ();
$status->code = "200";
$status->msg = "reminder ok".$sessionid;
$reminder = new Reminder ();
$reminder->has_reminder = true;
echo json_encode ( array (
		"status" => $status,
		"reminder" => $reminder 
) );

}
class Status {
	public $code;
	public $msg;
}
class Reminder {
	public $has_reminder;
}
