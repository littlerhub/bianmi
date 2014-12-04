<?php
$userid = $_POST ['userid'];
$secretid = $_POST ['commentid'];
$isliked = $_POST ['isliked'];

$status = new Status ();

if ($isliked) {
	$status->code = "200";
	$status->msg = "like ok";
	echo json_encode ( array (
			"status" => $status 
	) );
} else {
	$status->code = "400";
	$status->msg = "like error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class Status {
	public $code;
	public $msg;
}

