<?php
    require("../php/management/unLogin.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>私有云工作台</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/favicon.ico"> -->
    <link rel="stylesheet" href="../css/management/vendor/bootstrap/dist/bootstrap.css">
    <link rel="stylesheet" href="../css/management/vendor/Animate.css">
    <link rel="stylesheet" href="../css/management/basic.css">
    <link rel="stylesheet" href="../css/management/vendor/font_awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/management/vendor/jquery.jqplot.css"/>
    <link rel="stylesheet" type="text/css" href="../css/management/style.css"/>
    <!--[if lt IE 9]>
    <script src="../public/js/vendor/html5shiv.min.js"></script>
    <script src="../public/js/vendor/respond.min.js"></script>
    <![endif]-->
    <script>
        window.common_conf = {
            defaultHash: 'main.php',
            baseURL: './'
        };
    </script>
</head>

<body>
<header id="page_header">
    <div class="logow animated fadeInLeft"><a href="#"><img src="../img/management_logo.png" width="56"></a></div>
    <div class="right_side">
        <!--<span class="fullScreen_btn"><i class="fa fa-arrows-alt"></i></span>-->
        <span class="logout_btn J_confirm_modal" data-target="../php/common/logout.php" data-tip="确认退出吗？"><i
                    class="fa fa-sign-out"></i></span>
        <span class="toggleMenu_btn"><i class="fa fa-bars"></i></span>
    </div>
</header>
<aside id="left_panel">
    <div class="login_info">
            <span>
                <div>
                    <a href="#" data-toggle="dropdown">
                        <i class="fa fa-user"></i><span class="name"><?php session_start();
                            echo $_SESSION['username'] ?></span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#changePwd.php">修改密码</a></li>
                        <li><a tabindex="-1" href="#" class="J_confirm_modal" data-target="../php/common/logout.php"
                               data-tip="确认退出吗？">退出</a></li>
                    </ul>
                </div>
            </span>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#main.php"><i class="fa fa-lg fa-fw fa-home"></i><span>工作台</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-user" aria-hidden="true"></i><span>用户管理</span><b><i
                                class="fa fa-plus-square-o"></i></b></a>
                <ul>
                    <li><a href="#addUser.php"><i class="fa fa-lg fa-fw fa-user-plus"
                                                  aria-hidden="true"></i><span>添加用户</span></a></li>
                    <li><a href="#userList.php"><i class="fa fa-lg fa-fw fa-users"
                                                   aria-hidden="true"></i><span>用户列表</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-cogs" aria-hidden="true"></i><span>系统管理</span><b><i
                                class="fa fa-plus-square-o"></i></b></a>
                <ul>
                    <li><a href="#spaceManage.php"><i class="fa fa-lg fa-fw fa-database"
                                                  aria-hidden="true"></i></i><span>空间管理</span></a></li>
                    <li><a href="#noticeManage.php"><i class="fa fa-lg fa-fw fa-sticky-note"
                                                  aria-hidden="true"></i><span>公告管理</span></a></li>
                    <li><a href="#systemDescription.php"><i class="fa fa-lg fa-fw fa-sticky-note-o"
                                                  aria-hidden="true"></i><span>系统说明</span></a></li>
                    <li><a href="#siteCon.php"><i class="fa fa-lg fa-fw fa-sliders"
                                                  aria-hidden="true"></i><span>站点设置</span></a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyBtn"><i class="fa fa-arrow-circle-left"></i></span>
</aside>
<div id="main">
    <div id="ribbon">
        <ol class="breadcrumb"></ol>
    </div>
    <div id="content"></div>
</div>
<footer id="page_footer">
    <div class="inside"><i class="fa fa-copyright"></i><a href="http://www.92dan.cn" target="_blank">2013级 物联网2版 孙明喆
            1308114224</a></div>
</footer>

<!--Common Modal -->
<div class="modal fade" id="modal_ajax_content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
</div>
<div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body"></div>
            <div class="modal-footer" style="text-align:center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-danger J_confirm_btn"><i class="fa fa-refresh fa-spin"></i> 确定
                </button>
            </div>
        </div>
    </div>
</div>

<script src="../js/common/jquery-3.1.1.min.js"></script>
<script src="../js/management/vendor/bootstrap/dist/bootstrap.js"></script>
<script src="../js/management/vendor/ie10-viewport-bug-workaround.js"></script>
<script src="../js/management/ajaxForm.js"></script>
<script src="../js/management/basic.js"></script>


</body>
</html>