<?php
require("../common/mysqlConn.php");
session_start();
header("Content-Type:text/html; charset=utf-8");

$username = @$_SESSION['username'];
$date = date("Y-m-d");
$ipAddr = $_SERVER["REMOTE_ADDR"];

$row = $mysqli->query("select `username`,`lastTime`,`lastIP` from `dd_user` where `username` = '" . $username . "'");
$result = $row->fetch_row();


if (isset($_SESSION['lastTime']) && isset($_SESSION['lastIP'])) {
    $mysqli->query("UPDATE `dd_user` SET `lastTime`= '" . $date . "',`lastIP`='" . $ipAddr . "'  WHERE `username`= '" . $username . "'");
} else {
    $_SESSION['lastTime'] = $result[1];
    $_SESSION['lastIP'] = $result[2];
    $mysqli->query("UPDATE `dd_user` SET `lastTime`= '" . $date . "',`lastIP`='" . $ipAddr . "'  WHERE `username`= '" . $username . "'");
}


$adminInfo['username'] = $result[0];
$adminInfo['lastTime'] = @$_SESSION['lastTime'];
$adminInfo['lastIP'] = @$_SESSION['lastIP'];
//	$adminInfo['softVersion']   软件版本，后续开发。
$adminInfo['OS'] = PHP_OS;
$adminInfo['phpVersion'] = PHP_VERSION;
$adminInfo['MySQLVersion'] = $mysqli->server_info;
$adminInfo['serverVersion'] = $_SERVER['SERVER_SOFTWARE'];
//	$adminInfo['maxFileSize'] = ini_get('upload_max_filesize');
$adminInfo['maxExecutionTime'] = ini_get('max_execution_time') . " seconds";

echo json_encode($adminInfo);

$mysqli->close();
