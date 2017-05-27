<?php
	
	header('content-type:text/html;charset=utf-8');

	session_start();
    session_destroy();

    require("../common/mysqlConn.php");
	$referer = $mysqli->query("select `value` from `dd_system` where `key` = 'DomainName'");


	$return = array();
	$return['referer'] = 'http://'.$referer->fetch_row()[0].'/';
	$return['refresh'] = true;
	$return['state'] = 'success';
	$return['message'] = '提交成功';
	
	echo json_encode($return);
	