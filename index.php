<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/management/vendor/font_awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <title>私有云系统</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="loginpanel">
            <i id="loading" class="hidden fa fa-spinner fa-spin bigicon"></i>
            <div id="false"></div>
            <h2>私有云系统登录</h2>
            <div>
                <input id="username" type="text" placeholder="用户名">
                <input id="password" type="password" placeholder="密码">

                <div class="buttonwrapper">
                    <button id="loginbtn" class="btn btn-warning loginbutton">
                        <span class="fa fa-check"></span>
                    </button>
                    <span id="lockbtn" class="fa fa-lock lockbutton redborder"></span>
                </div>
            </div>
            <a tabindex="0" class="btn btn-lg btn-danger mt50" role="button" data-toggle="popover" data-trigger="hover"
               id="howToUse">使用说明</a>

        </div>
    </div>
</div>
</div>

<!-- 公告模态框开始-->
<div class="modal fade" id="notice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 公告 </div>
            <form class="form-horizontal">
                <div class="modal-body">
                </div>
            </form>
            <div class="modal-footer ac">
                <button class="btn btn-danger" data-dismiss="modal">我已经看过，今天不再提示</button>
            </div>
        </div>
    </div>
</div>
<!--公告模态框结束-->
<!--错误提示模态框开始-->
<div class="modal fade" id="error">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 加载失败 </div>
            <div class="modal-body">
                    <p>请检查：</p>
                    <p>网络是否畅通</p>
                    <p>如果进行了目录或者用户请求，请检查请求的目标是否存在</p>
                    <p>如果问题存在，请联系系统管理员</p>
            </div>
            <div class="modal-footer ac">
                <button class="btn btn-danger" data-dismiss="modal">我知道了</button>
            </div>
        </div>
    </div>
</div>
<!--错误提示模态框结束-->

<script src="js/common/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/common/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/index.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>