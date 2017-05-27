<?php
    require("../php/cloudMain/unLogin.php");
?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>私有云系统</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		<link rel="stylesheet" type="text/css" href="../css/cloudmain/style.css" />


	</head>

	<body>

		<header class="mainHeader">
			<span class="logo fl ml20 ac color-white">私有云系统</span>
			<span class="fr color-white userInfo ml15 mr40 f16" data-toggle="modal" data-target="#logout">退出登录</span>
			<span class="fr color-white userInfo ml15 f16"><a href="#"  data-toggle="modal" data-target="#changePwd">修改密码 </a></span>
            <span class="fr color-white userInfo f14"><span id="username"><?php session_start(); echo $_SESSION['username']?></span>，欢迎您登录私有云系统。 </span>
			<span class="mobileUserinfo color-white fr ml10 mr20 f14" data-toggle="modal" data-target="#logout">退出登录</span>
			<span class="mobileUserinfo color-white fr f14">当前用户：<?php session_start(); echo $_SESSION['username']?></span>
		</header>

		<div class="mainLeft">
			<a href="#" class="cate color-white getList" id="all">全部</a>
			<a href="#" class="cate color-white getList" id="document">文档</a>
			<a href="#" class="cate color-white getList" id="pictures">图片</a>
			<a href="#" class="cate color-white getList" id="music">音乐</a>
			<a href="#" class="cate color-white getList" id="video">视频</a>
			<a href="#" class="cate color-white getList" id="software">软件</a>
			<a href="#" class="cate color-white getList" id="zip">压缩包</a>
			<a href="#" class="cate color-white getList" id="others">其他</a>
			<a href="#" class="cate color-white getList" id="share">我的分享</a>
<!--			<a href="#" class="cate color-white getList">回收站</a>-->
			<div class="progress mb0">
				<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
					<!--缺省值 深蓝色
						progress-bar-success 绿色
						progress-bar-info 浅蓝色
						progress-bar-warning 橙色
						progress-bar-danger 红色-->
					<span class="dinlineb lh14">1%</span>
				</div>
			</div>
			<p class="userSpaceInfo f16 color-black">2MB/1024MB</p>
		</div>

		<div class="mainRight">
			<div>

                <button href="#" id="refresh" class="btn btn-default active ml10 mt10" role="button"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 刷新文件列表</button>
				<button href="#" id="upOne" class="btn btn-default active ml10 mt10" role="button"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> 返回上一层</button>
				<button href="#" id="upToIndex" class="btn btn-default active ml10 mt10" role="button"><span class="glyphicon glyphicon-open" aria-hidden="true"></span> 返回顶层</button>

				<div class="input-group fileSearch  mt10 fr mr15">
					<input type="text" class="form-control f12" placeholder="查看别人的共享..." id="seeUsrName">
					<span class="input-group-btn">
					        <button class="btn btn-default" type="button" id="seeShare">
					        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
					</span>
				</div>
			</div>

			<div class="dirPosition ml10">
				<span class="f12">根目录</span>
                <span id="userUrl"></span>
                <span class="fr f12 mr20 fileCounter">已加载<span id="loadNow"></span>个文件，共<span id="fileCount"></span>个。</span>

			</div>

			<div class="lineName row f16 mt4 ml10 mr10 lh16">
				<span class="col-lg-4 col-md-3 col-sm-3 col-xs-5 pl15">
					<!--<input type="checkbox" class="fileCkboxAll fl" /> -->
					<span class="ml10">文件名</span>
				</span>
				<span class="col-lg-3 col-md-4 col-sm-4"></span>
				<span class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><span class="pl20">上传日期</span></span>
				<span class="col-lg-2 col-md-2 col-sm-2 col-xs-3">大小</span>
			</div>

			<div class="fileList row color-black boxscroll f18 ml10 mr10" id="fileList">
<!--				<div class="fileInfo mt4">-->
                <!--					<span class="col-lg-7 col-md-7 col-sm-7 col-xs-5 dinlineb">-->
                <!--						<input type="checkbox" class="fileCkbox fl" />-->
                <!--						<span class="dinlineb fileIcon fl"></span>-->
                <!--					<a href="#" class="fileName dinlineb fl">-->
                <!--						文件名测试-->
                <!--					</a>-->
                <!--					</span>-->
                <!--					<span class="col-lg-3 col-md-4 col-sm-4 dinlineb">-->
                <!--						<a href="#"><span class="glyphicon glyphicon-remove-circle lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					<a href="#"><span class="glyphicon glyphicon-registration-mark lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					<a href="#"><span class="glyphicon glyphicon-copyright-mark lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					<a href="#"><span class="glyphicon glyphicon-retweet lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					<a href="#"><span class="glyphicon glyphicon-download lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					<a href="#"><span class="glyphicon glyphicon-share lh35 fr ml8" aria-hidden="true"></span></a>-->
                <!--					</span>-->
                <!--					<span class="col-lg-3 col-md-3 col-sm-3 col-xs-4 dinlineb">-->
                <!--						<span class="fileTime pl20">16-12-05 11:22</span>-->
                <!--					</span>-->
                <!--					<span class="col-lg-2 col-md-2 col-sm-2 col-xs-3 dinlineb">-->
                <!--						<span class="fileSize">3000.52MB</span>-->
                <!--					</span>-->
                <!--				</div>-->


			</div>

		</div>

        <!--    模态框部分    -->
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
        <!--    修改密码开始    -->
        <div class="modal fade" id="changePwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
                    </div>
                    <div class="modal-body">

                        <input type="password" class="form-control mt4" id="oldPwd" placeholder="原密码">
                        <input type="password" class="form-control mt8" id="newPwd1" placeholder="新密码">
                        <input type="password" class="form-control mt8" id="newPwd2" placeholder="重复密码">

                    </div>
                    <div class="modal-footer">
                        <span class="fl" id="changePwdShow"></span>
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-danger" id="chPwdReLogin">修改密码</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    修改密码结束    -->
        <!--    退出登录开始    -->
        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="modal-body">
                        确认要退出登录吗？
                    </div>
                    <div class="modal-footer ac">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" id="logoutOK" class="btn btn-danger">确认</button>
                    </div>
                </div>
            </div>
        </div>
        <!--    退出登录结束    -->

        <script src="../js/common/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="../js/cloudmain/jquery.nicescroll.js"></script>
        <script src="../js/common/bootstrap.js"></script>
        <script src="../js/cloudmain/loadFile.fun.js"></script>
        <script src="../js/cloudmain/fileDownload.js"></script>
        <script src="../js/cloudmain/index.js"></script>
        <script>
            $(document).ready(function() {
                // $("html").niceScroll();
                // The document page (html)
                $(".boxscroll").niceScroll({
                    touchbehavior: false,
                    cursorcolor: "#00F",
                    cursoropacitymax: 0.7,
                    cursorwidth: 3,
                    cursorborder: "1px solid #2848BE",
                    cursorborderradius: "18px",
                    background: "#ccc",
                    autohidemode: "scroll"
                });
            });
        </script>

	</body>

</html>