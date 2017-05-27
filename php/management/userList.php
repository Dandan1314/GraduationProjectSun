<?php
/**
 * Created by PhpStorm.
 * User: dt.thxopen.com
 * Date: 2014/12/7
 * Time: 11:13
 */
header('content-type:text/html;charset=utf-8');
require("./unLogin.php");
require("../common/mysqlConn.php");

//获取Datatables发送的参数 必要
$draw = @$_GET['draw'];//这个值会直接返回给前台

//排序
$order_column = @$_GET['order']['0']['column'];//那一列排序，从0开始
$order_dir = @$_GET['order']['0']['dir'];//ase desc 升序或者降序

//拼接排序sql
$orderSql = "";
if (isset($order_column)) {
    $i = intval($order_column);
    switch ($i) {
        case 0;
            $orderSql = " order by id " . $order_dir;
            break;
        case 1;
            $orderSql = " order by username " . $order_dir;
            break;
        case 2;
            $orderSql = " order by lastTime " . $order_dir;
            break;
        case 3;
            $orderSql = " order by lastIP " . $order_dir;
            break;
        default;
            $orderSql = '';
    }
}
//搜索
$search = @$_GET['search']['value'];//获取前台传过来的过滤条件


//分页
$start = @$_GET['start'];//从多少开始
$length = @$_GET['length'];//数据长度
$limitSql = '';
$limitFlag = isset($_GET['start']) && $length != -1;
if ($limitFlag) {
    $limitSql = " LIMIT " . intval($start) . ", " . intval($length);
}

//定义查询数据总记录数sql
$sumSql = "SELECT count(id) as sum FROM `dd_user`";
//条件过滤后记录数 必要
$recordsFiltered = 0;
//表的总记录数 必要
$recordsTotal = 0;
$recordsTotalResult = @$mysqli->query($sumSql);

while ($row = $recordsTotalResult->fetch_assoc()) {
    $recordsTotal = $row['sum'];
}
//定义过滤条件查询过滤后的记录数sql
$sumSqlWhere = " where `id` LIKE '%" . $search . "%'||`username`LIKE '%" . $search . "%'||`lastTime`LIKE '%" . $search . "%'||`lastIP`LIKE '%" . $search . "%'||`contract`LIKE '%" . $search . "%'||`EmailAddr` LIKE '%" . $search . "%'";
if (strlen($search) > 0) {
    $recordsFilteredResult = $mysqli->query($sumSql . $sumSqlWhere);
    while ($row = $recordsFilteredResult->fetch_array()) {
        $recordsFiltered = $row['sum'];
    }
} else {
    $recordsFiltered = $recordsTotal;
}

//query data
$totalResultSql = "SELECT id,username,lastTime,lastIP,contract,EmailAddr FROM `dd_user`";
$infos = array();
if (strlen($search) > 0) {
    //如果有搜索条件，按条件过滤找出记录
    $dataResult = $mysqli->query($totalResultSql . $sumSqlWhere . $orderSql . $limitSql);
    while ($row = $dataResult->fetch_array()) {
        $obj = array($row['id'], $row['username'], $row['lastTime'], $row['lastIP'], $row['EmailAddr'], $row['contract'], "<button type=\"button\" class=\"btn btn-primary btn-xs J_ajax_content_modal\" data-href=\"../../management/editUser.php?id=" . $row['id'] . "&&username=" . $row['username'] . "\">编辑</button> <button type=\"button\" class=\"btn btn-warning btn-xs J_confirm_modal\" data-tip=\"删除此用户？\" data-target=\"../php/management/userDelete.php?id=" . $row['id'] . "\">删除</button>");
        array_push($infos, $obj);
    }
} else {
    //直接查询所有记录
    $dataResult = $mysqli->query($totalResultSql . $orderSql . $limitSql);
    while ($row = $dataResult->fetch_array()) {
        $obj = array($row['id'], $row['username'], $row['lastTime'], $row['lastIP'], $row['EmailAddr'], $row['contract'], "<button type=\"button\" class=\"btn btn-primary btn-xs J_ajax_content_modal\" data-href=\"../../management/editUser.php?id=" . $row['id'] . "&&username=" . $row['username'] . "\">编辑</button> <button type=\"button\" class=\"btn btn-warning btn-xs J_confirm_modal\" data-tip=\"删除此用户？\" data-target=\"../php/management/userDelete.php?id=" . $row['id'] . "\">删除</button>");
        array_push($infos, $obj);
    }
}

/*
 * Output 包含的是必要的
 */
echo json_encode(array(
    "draw" => intval($draw),
    "recordsTotal" => intval($recordsTotal),
    "recordsFiltered" => intval($recordsFiltered),
    "data" => $infos
), JSON_UNESCAPED_UNICODE);


function fatal($msg)
{
    echo json_encode(array(
        "error" => $msg
    ));
    exit(0);
}