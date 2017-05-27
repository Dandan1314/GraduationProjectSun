<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Created by PhpStorm.
    User: Mingzhe Sun
    Date: 2017/3/27
    Time: 15:11
    Title : PHP获取目录中的文件信息

 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
require("./unLogin.php");
//session_start();

$share = @$_POST['share'];

if ( $share == null ){
    $username = @$_SESSION['username']."/";
}

$dirName = @$_POST['dirName']."/";
$start = @$_POST['start'];
$load = @$_POST['load'];

//先打开要操作的目录，并用一个变量指向它
$Path = "/home/ftp/".$username.$dirName;

if (!is_dir($Path)) {
    header("Location: ../../");
}

$handler = opendir($Path);
$filename = scandir($Path);

//获取目录下文件的个数
$filecount = count($filename) - 2;
$result['fileCount'] = $filecount;

//列出所有文件列表，添加ID
for ($i = 0; $i < $filecount; $i++) {
    $fileNameList[$i + 1] = $filename[$i + 2];
//    $fileNameList[$i + 1] = mb_convert_encoding($filename[$i + 2], "UTF-8", "GBK");
}


$end = $start + $load;
for ($start; $start < $end; $start++) {
    $fstat = fstat(fopen( $Path . $fileNameList[$start], "r"));

//文件名，上传时间，文件大小
    $fileNameList[$start]= mb_convert_encoding($fileNameList[$start], "UTF-8", "GBK");
    $fileUpTime = date("Ymd h:i", $fstat["mtime"]);
    $fileSize = round($fstat["size"] / 1024, 2) . "KB";

//调用未转码之前的文件名，判断文件类型，转码之前文件未排序，所以数组的key从0开始
    $localUrl = $Path . $filename[$start + 1];

//判断文件类型
    if (is_dir($localUrl)) {
        $fileUpTime = '-';
        $fileSize = '-';
    }

//生成数组
    $result[$start] = ["filename" => $fileNameList[$start], "fileUpTime" => $fileUpTime, "fileSize" => $fileSize];

}

echo json_encode($result);

//print_r($result);

//关闭目录
closedir($handler);


