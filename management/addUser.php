<?php
	require("../php/management/unLogin.php");
?>
<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-user-plus"></i>添加用户</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form" method="post" action="../php/management/addUser.php" data-validate="check_value">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">用户名</label>
                                            <div class="col-sm-3">
                                                <input id="username" name="username" type="text" class="form-control" placeholder="请输入用户名">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">密码</label>
                                            <div class="col-sm-3">
                                                <input id="password" name="password" type="text" class="form-control" placeholder="请输入密码">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
											<label class="col-sm-2 control-label">用户权限</label>
											<div class="col-sm-3">
												<select id="permission" name="permission" class="form-control">
													<option>请选择</option>
													<option value="0">普通用户</option>
													<option value="1">管理员</option>
												</select>
											</div>
                                            <p class="col-sm-7 help-block"></p>
										</div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">邮箱</label>
                                            <div class="col-sm-3">
                                                <input id="EmailAddr" name="EmailAddr" type="text" class="form-control" placeholder="请输入邮箱">
                                            </div>
                                            <p class="col-sm-7 help-block"></p>
                                        </div>
                                        <hr/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">联系方式</label>
                                            <div class="col-sm-3">
                                                <input id="contract" name="contract" type="text" class="form-control" placeholder="请输入联系方式">
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
<script src="../js/management/adduser.js" type="text/javascript" charset="utf-8"></script>