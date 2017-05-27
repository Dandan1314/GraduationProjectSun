<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/5/9
    Time: 23:06
    Title : 其他用户共享文件的下载
 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
require("./unLogin.php");
$fileUrl = @$_GET['fileName'];
$file = "/home/ftp/".$fileUrl;

echo $file;

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