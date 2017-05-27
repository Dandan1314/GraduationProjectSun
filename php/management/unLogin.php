<?php
	//防止非法访问
	session_start();
	if ($_SESSION['permission'] != '1'){
	    exit;
    }