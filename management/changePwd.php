<?php
	require("../php/management/unLogin.php");
?>
<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-file"></i>修改密码</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form" method="post" action="../php/common/changePwd.php" data-validate="check_value" data-callBack="jump_to_index">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">当前用户</label>
                                            <div class="col-sm-3">
                                                <input id="username" name="username" type="text" class="form-control" value="<?php session_start();echo $_SESSION['username']?>" disabled="disabled">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">当前密码</label>
                                            <div class="col-sm-3">
                                                <input id="oldPwd" name="oldPwd" type="password" class="form-control" placeholder="当前密码">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">新密码</label>
                                            <div class="col-sm-3">
                                                <input id="newPwd1" name="newPwd1" type="password" class="form-control" placeholder="新密码">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">确认密码</label>
                                            <div class="col-sm-3">
                                                <input id="newPwd2" name="newPwd2" type="password" class="form-control" placeholder="新密码">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-3" style="color: red;">
                                                	* 请注意，密码修改成功后，将会直接跳转到登录界面，请使用新密码登录。
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary J_ajaxSubmitBtn">提交</button>
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
<script src="../js/management/changePwd.js" type="text/javascript" charset="utf-8"></script>