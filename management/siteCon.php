<?php
	require("../php/management/unLogin.php");
?>
<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-sliders"></i>站点设置</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form" method="get" action="#">
                                        <div class="title_bar">站点信息设置</div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站名称</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="网站名称" id="siteName">
                                            </div>
                                            <p class="col-sm-7 help-block">必填</p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">网站域名</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="网站域名" id="domainName">
                                            </div>
                                            <p class="col-sm-7 help-block">填写您站点的完整域名。例如: http://www.xxxx.com，不要以斜杠 (“/”) 结尾</p>
                                        </div>
                                        <hr/>
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-2 control-label">CDN域名</label>-->
<!--                                            <div class="col-sm-3">-->
<!--                                                <input type="text" class="form-control" placeholder="CDN域名">-->
<!--                                            </div>-->
<!--                                            <p class="col-sm-7 help-block"></p>-->
<!--                                        </div>-->
<!--                                        <hr/>-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">保留空间</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="保留空间" id="spaceReserved">
                                            </div>
                                            <p class="col-sm-7 help-block">单位：MB</p>
                                        </div>
<!--                                        <div class="title_bar">站点状态设置</div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-2 control-label">站点状态</label>-->
<!--                                            <div class="col-sm-3">-->
<!--                                                <div class="radio">-->
<!--                                                    <label>-->
<!--                                                        <input type="radio" name="audit" value="1" checked>开启-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                                <div class="radio">-->
<!--                                                    <label>-->
<!--                                                        <input type="radio" name="audit" value="2">关闭-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <p class="col-sm-7 help-block">站点关闭后，任何人都无法访问</p>-->
<!--                                        </div>-->
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary">提交</button>
<!--                                                <button type="button" class="btn btn-primary J_ajaxSubmitBtn">提交</button>-->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>

</div>

<script src="../js/management/siteCon.js"></script>