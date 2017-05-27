<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/5/25
    Time: 13:31
    Title : 磁盘信息接口
 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

require("./unLogin.php");
require("../common/mysqlConn.php");
header("Content-Type:text/html; charset=utf-8");

//获取磁盘名称
$deviceName = $mysqli->query("SELECT `value` FROM `dd_device` WHERE `key` = 'deviceName'");
$result['deviceName'] = $deviceName->fetch_row()[0];

//获取磁盘大小
$deviceSize = $mysqli->query("SELECT `value` FROM `dd_device` WHERE `key` = 'deviceSize'");
$result['deviceSize'] = $deviceSize->fetch_row()[0];

//获取用户的磁盘空间
$userSpaceCount = $mysqli->query("select sum(UserSpace) from `dd_user`");
$result['userSpaceCount'] = $userSpaceCount->fetch_row()[0];

//系统保留空间
$SpaceReserved = $mysqli->query("select `value` from `dd_system` where `key`='SpaceReserved'");
$result['spaceReserved'] = $SpaceReserved->fetch_row()[0];

//私有云系统占用的磁盘空间
$result['ownCloudSpaceCount'] = "2560";

//Linux操作系统使用的磁盘空间(仅估计)
$result['LinuxSpace'] = "10240";

//剩余空间
$result['residualSpace'] = $result['deviceSize'] - $result['userSpaceCount'] - $result['spaceReserved'] - $result['ownCloudSpaceCount'] - $result['LinuxSpace'];

echo json_encode($result);

$mysqli->close();