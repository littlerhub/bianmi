<?php
$status = new Status ();

$status->code = "200";
$status->msg = "like ok";
$config = new Config ();
$config->show_ad = true;
$config->sms_access = false;
echo json_encode ( array (
		"status" => $status,
		"config" => $config 
) );
class Status {
	public $code;
	public $msg;
}
class Config {
	public $show_ad;
	public $sms_access;
}
