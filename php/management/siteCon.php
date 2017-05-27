<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/3/27
    Time: 23:05
    Title : 后台设置信息的获取

 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

require("../common/mysqlConn.php");
session_start();
header("Content-Type:text/html; charset=utf-8");

if ($_SESSION['permission'] == '1') {

    $row = $mysqli->query("select `value` from `dd_system`");
    $DomainName = $row->fetch_row();
    $row->fetch_row();
    $SiteName = $row->fetch_row();
    $SpaceReserved = $row->fetch_row();


    $SystemSettings['DomainName'] = $DomainName[0];
    $SystemSettings['SiteName'] = $SiteName[0];
    $SystemSettings['SpaceReserved'] = $SpaceReserved[0];

}

$row = $mysqli->query("select `value` from `dd_system` where `key` = 'HowToUse'");
$HowToUse = $row->fetch_row();
$SystemSettings['HowToUse'] = $HowToUse[0];

$row = $mysqli->query("select `value` from `dd_system` where `key` = 'SystemNotice'");
$SystemNotice = $row->fetch_row();
$SystemSettings['SystemNotice'] = $SystemNotice[0];

echo json_encode($SystemSettings);

$mysqli->close();