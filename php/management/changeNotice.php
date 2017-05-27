<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/4/6
    Time: 15:17
    Title : 修改公告接口

 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

header('content-type:text/html;charset=utf-8');
require("./unLogin.php");
require("../common/mysqlConn.php");

if ( $_SESSION['permission'] == "1"){
    $return['state'] = 'success';
    $noticeInfo = @$_POST['noticeInfo'];
    $mysqli->query("UPDATE dd_system SET `value`='$noticeInfo' WHERE `key`='SystemNotice'");
}else{
    $return['state'] = 'false';
    $return['message'] = '公告修改失败，请检查程序运行状态！';
}

$return['referer'] = '';
$return['refresh'] = true;

echo json_encode($return);

$mysqli->close();