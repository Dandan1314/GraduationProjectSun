<?php
	header('content-type:text/html;charset=utf-8');
    require("./unLogin.php");
	require("../common/mysqlConn.php");
	
	$username = @$_POST['username'];
	$password = md5(@$_POST['password']);
	$permission = @$_POST['permission'];
	$EmailAddr = @$_POST['EmailAddr'];
	$contract = @$_POST['contract'];
	$Dir = '/home/ftp/'.$username;

	if($username == ""){
	    exit;
    }
	
	$return = array();
	
	$chkUsr = $mysqli->query("select `username` from `dd_user` where `username`='$username'");
	$chkUsrName = $chkUsr->num_rows;
	
	$chkEmail = $mysqli->query("select `EmailAddr` from `dd_user` where `EmailAddr`='$EmailAddr'");
	$chkEmailAddr = $chkEmail->num_rows;
	
	$chkCon = $mysqli->query("select `contract` from `dd_user` where `contract`='$contract'");
	$chkContract = $chkCon->num_rows;
	
	if($chkUsrName != 0 ){
		$return['state'] = 'failure';
		$return['message'] = "存在相同的用户名!";
	} else if ($chkEmailAddr != 0){
		$return['state'] = 'failure';
		$return['message'] = "存在相同的邮箱!";
	} else if ($chkContract != 0){
		$return['state']= 'failure';
		$return['message'] = "存在相同的联系方式!";
	} else {
		$mysqli->query("insert into `dd_user` (`username`,`password`,`permission`,`EmailAddr`,`contract`,`Dir`) values ('$username','$password','$permission','$EmailAddr','$contract','$Dir')");
		$return['state']= 'success';
		$return['message'] = "提交成功";
	}
	
	$return['referer'] = '';
	$return['refresh'] = false;
	
	
	echo json_encode($return);
	
	$mysqli->close();