<?php
// ���ղ���
$userid = $_GET ['userid'];

// ״̬�����
$status = new Status ( );
$status->code = "500";
$status->msg = "signin error";
if ($userid != "") {
	// ����Status����
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