<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/5/6
    Time: 18:53
    Title : 当前用户文件下载功能
 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
require("./unLogin.php");
//session_start();

$username = @$_SESSION['username']."/";
$fileName = @$_GET['fileName'];

$file = "/home/ftp/".$username.$fileName;

if( $file != "/home/ftp///" ){
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
} else{
    header("Location:/");
}

