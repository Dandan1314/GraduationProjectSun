<?php
	require("common/mysqlConn.php");
	session_start();
	header("Content-Type:text/html; charset=utf-8");
	
	$username = @$_POST['username'];
	$password = md5(@$_POST['password']);
	
	$result = array();
	if ($username != '' && $password != '') {
	    $row = $mysqli->query("SELECT `username`,`password`,`permission` FROM `dd_user` where `username` = '".$username."' and `password` = '".$password."'");
	    $loginInfo = $row->fetch_row();
	    if($loginInfo[2] == '1'){
	        $result['type'] = 1;
	        $result['msg'] = '管理员登录成功';
	        $_SESSION['username'] = $username;
	        $_SESSION['permission'] = '1';
	    }else if($loginInfo[2] == '0'){
	    	$result['type'] = 2;
	        $result['msg'] = '普通用户登录成功';
	        $_SESSION['username'] = $username;
	        $_SESSION['permission'] = '0';
	    }else{
	        $result['type'] = 0;
	        $result['msg'] = '用户名或密码不正确';
	    }
	} else {
	    $result['type'] = 0;
	    $result['msg'] = '参数传输不正确';
	}
	
	echo json_encode($result);

	$mysqli->close(); //关闭与数据库的连接
	
