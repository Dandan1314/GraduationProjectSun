<?php
	header('content-type:text/html;charset=utf-8');
	require("../common/mysqlConn.php");
	session_start();

    if( !isset($_SESSION['permission']) ) {
        exit;
    }

    $username = @$_SESSION['username'];
	
	$oldPwd = md5(@$_POST['oldPwd']);
	$newPwd = md5(@$_POST['newPwd1']);
	$return = array();
	
	$row = $mysqli->query("SELECT `password` FROM `dd_user` where `username` = '".$username."'");
	$chkOldPwd = $row->fetch_row();
	
	if( $oldPwd == $chkOldPwd[0] ) {
		$mysqli->query("UPDATE `dd_user` SET `password`= '".$newPwd."' WHERE `username` = '".$username."'");
		$return['state'] = 'success';
		$return['message'] = "提交成功!";
	} else if ( $newPwd == null ){
		$return['state'] = 'failure';
		$return['message'] = "新密码提交失败!";
	} else {
		$return['state'] = 'failure';
		$return['message'] = "原密码错误，请重新提交!";
	}
	
	$return['referer'] = '';
	$return['refresh'] = false;

	
	echo json_encode($return);
	
	$mysqli->close();
