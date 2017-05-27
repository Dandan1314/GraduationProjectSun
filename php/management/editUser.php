<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/2/13
    Time: 17:04
    Title : 编辑用户
 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

header('content-type:text/html;charset=utf-8');
require("./unLogin.php");
require("../common/mysqlConn.php");

$username = @$_GET['username'];
$password = md5(@$_POST['password']);
$permission = @$_POST['permission'];
$EmailAddr = @$_POST['EmailAddr'];
$contract = @$_POST['contract'];

if (@$_POST['password'] == null) {
    $mysqli->query("UPDATE `dd_user` SET  `permission` = '" . $permission . "',`EmailAddr` = '" . $EmailAddr . "',`contract` = '" . $contract . "' where `username` = '" . $username . "'");
} else {
    $mysqli->query("update `dd_user` set `password` = '" . $password . "',`permission` = '" . $permission . "',`EmailAddr` = '" . $EmailAddr . "',`contract` = '" . $contract . "' where `username` = '" . $username . "'");
}

$return = array();
$return['referer'] = '';
$return['refresh'] = true;
$return['state'] = 'success';
$return['message'] = '提交成功';

echo json_encode($return);