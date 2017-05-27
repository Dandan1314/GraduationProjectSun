<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/2/13
    Time: 14:02
    Title : 删除用户
 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

header('content-type:text/html;charset=utf-8');
require("./unLogin.php");
require("../common/mysqlConn.php");

$id = @$_GET['id'];

$mysqli->query("delete from `dd_user` where id = '$id'");

$return = array();
$return['referer'] = '';
$return['refresh'] = true;
$return['state'] = 'success';
$return['message'] = '提交成功';

echo json_encode($return);