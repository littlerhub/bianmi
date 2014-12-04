<?php
$userid = $_POST ['userid'];
$contacts = $_POST ['contacts'];

$status = new Status ();

if ($userid != NULL) {
	$status->code = "200";
	$status->msg = "add secret ok";
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
class Status {
	public $code;
	public $msg;
}

