<?php
// ���ղ���
$phone = $_GET ['phone_md5'];
$pwdmd5 = $_GET ['pwd_md5'];

// ״̬�����
$status = new Status ( );
$status->code = "500";
$status->msg = "signin error";
// �û�����
$user = new User ( );
$json = null;
if ($phone != "" && $pwdmd5 != "") {
	// ����Status����
	$status->code = "200";
	$status->msg = "signin ok";
	// ����User����
	$user->userid = md5 ( $phone + 1 );
	$user->token = md5 ( $phone +  $phone);
	$json = array ("status" => $status, "user" => $user );
} else {
	// ֻ����Status����
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