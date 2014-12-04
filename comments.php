<?php
$userid = $_GET ['userid'];
$secretid = $_GET ['secretid'];
$lastid = $_GET ['lastid'];
$batch = $_GET ['batch'];

$status = new Status ();

if ($lastid == "") {
	// Status
	$status->code = "200";
	$status->msg = "add comment ok";
	// Comments
	$comment = new Comment ();
	$comment->id = "123123";
	$comment->userid = "asdasdasdq212312";
	$comment->content = "评论内容";
	$comment->avatar_url = "http://bianmi.qiniudn.com/dac2cd3eed2132eb59e2c3358d9f94f4.jpg";
	$comment->audio_url = "http://bianmi.qiniudn.com/comment/audio/89a9a9b5c7044e14b60a868f30e460c9_1412348604306.amr?attname=";
	$comment->audio_length = 30;
	$comment->likes = 22;
	$comment->isliked = true;
	$comment->created_time = 12234123123;
	$comments = array (
			0 => $comment,
			1 => $comment,
			2 => $comment,
			3 => $comment,
			4 => $comment,
			5 => $comment,
			6 => $comment,
			7 => $comment,
			8 => $comment 
	);
	
	$list = new DataList ();
	$list->has_more = true;
	$list->comments = $comments;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
} else if ($lastid != "") {
	// Status
	$status->code = "200";
	$status->msg = "add comment ok";
	// Comments
	$comment = new Comment ();
	$comment->id = "123123xcvxcv";
	$comment->userid = "asdasdasdq212312";
	$comment->content = "评论内容评论内容";
	$comment->avatar_url = "http://bianmi.qiniudn.com/avatar/rBACE1LjJWCTlIPaAAAX8ll_0uI754_200x200_3.jpg";
	$comment->audio_url = "http://bianmi.qiniudn.com/comment/audio/89a9a9b5c7044e14b60a868f30e460c9_1412348604306.amr?attname=";
	$comment->audio_length = 30;
	$comment->likes = 22;
	$comment->isliked = true;
	$comment->created_time = 12234123123;
	$comments = array (
			0 => $comment,
			1 => $comment,
			2 => $comment,
			3 => $comment,
			4 => $comment,
			5 => $comment,
			6 => $comment,
			7 => $comment,
			8 => $comment 
	);
	
	$list = new DataList ();
	$list->has_more = false;
	$list->comments = $comments;
	
	echo json_encode ( array (
			"status" => $status,
			"list" => $list 
	) );
} else {
	$status->code = "400";
	$status->msg = "add comment error";
	echo json_encode ( array (
			"status" => $status 
	) );
}
class Comment {
	public $id;
	public $userid;
	public $avatar_url;
	public $content;
	public $audio_url;
	public $audio_length;
	public $likes;
	public $islied;
	public $created_time;
}
class Status {
	public $code;
	public $msg;
}
class DataList {
	public $has_more;
	public $comments;
}

