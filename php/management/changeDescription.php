<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/4/6
    Time: 19:33
    Title : 修改使用说明接口

 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

header('content-type:text/html;charset=utf-8');
require("./unLogin.php");
require("../common/mysqlConn.php");

if ( $_SESSION['permission'] == "1"){
    $return['state'] = 'success';
    $systemDescription = @$_POST['systemDescription'];
    $mysqli->query("UPDATE dd_system SET `value`='$systemDescription' WHERE `key`='HowToUse'");
}else{
    $return['state'] = 'false';
    $return['message'] = '使用说明修改失败，请检查程序运行状态！';
}

$return['referer'] = '';
$return['refresh'] = true;

echo json_encode($return);

$mysqli->close();