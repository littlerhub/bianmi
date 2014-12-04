<?php
// 接收参数
$userid = $_GET ['userid'];

// 状态码对象
$status = new Status ( );
$status->code = "500";
$status->msg = "signin error";
if ($userid != "") {
	// 返回Status对象
	$status->code = "200";
	$status->msg = "signout ok";
	$json = array ("status" => $status );
} else {
	$json = array ("status" => $status );
}
echo json_encode ( $json );

class Status {
	public $code;
	public $msg;
}

?>