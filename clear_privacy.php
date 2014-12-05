<?php
$userid = $_GET ['userid'];
$token = $_GET ['token'];

$status = new Status ();

if ($userid != "" && $token != "") {
	// Status
	$status->code = "200";
	$status->msg = "已清除痕迹！";
	
	
	echo json_encode ( array (
			"status" => $status
	) );
} else {
	$status->code = "400";
	$status->msg = "操作失败！";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class Status {
	public $code;
	public $msg;
}

