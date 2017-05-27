<?php

    $mysqli = new mysqli("localhost", "owncloud", "owncloud", "owncloud");

    /* 下面两行设置连接选项 */
    $mysqli->options(MYSQLI_INIT_COMMAND, "SET AUTOCOMMIT=0"); //连接成功则执行
    $mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5); //设置倒计时

    /* 检查连接，如果连接出错输出错误信息并退出程序 */
    if (mysqli_connect_errno()) {
        printf("连接失败: %s\n", mysqli_connect_error());
        exit();
    }

    /* 设置编码为utf-8 */
    $mysqli->query("set character set 'utf8'");
    $mysqli->query("set names utf8");



