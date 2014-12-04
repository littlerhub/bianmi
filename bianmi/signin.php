<?php
// 接收参数
$phone = $_GET ['phone_md5'];
$pwdmd5 = $_GET ['pwd_md5'];

// 状态码对象
$status = new Status ( );
$status->code = "500";
$status->msg = "signin error";
// 用户对象
$user = new User ( );
$json = null;
if ($phone != "" && $pwdmd5 != "") {
	// 返回Status对象
	$status->code = "200";
	$status->msg = "signin ok";
	// 返回User对象
	$user->userid = md5 ( $phone + 1 );
	$user->token = md5 ( $phone +  $phone);
	$json = array ("status" => $status, "user" => $user );
} else {
	// 只返回Status对象
	$json = array ("status" => $status );
}
echo json_encode ( $json );

class Status {
	public $code;
	public $msg;
}

class User {
	public $userid;
	public $token;
}
?>