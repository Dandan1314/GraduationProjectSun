<?php
	//防止非法访问文件列表
	session_start();
	if ($_SESSION['permission'] != '0'){
	    exit;
    }