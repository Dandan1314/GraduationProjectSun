<?php
	require("../php/management/unLogin.php");
?>
<div class="modal-header">
<!--    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
    <h4 class="modal-title" id="myModalLabel">编辑用户信息</h4>
</div>
<form class="form-horizontal J_ajaxForm" role="form" method="post" action="../php/management/editUser.php?username=<?php $username = @$_GET['username']; echo $username;?>" data-validate="check_value">
    <div class="modal-body">
        <div class="form-group">
            <label class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php $username = @$_GET['username']; echo $username;?>" disabled="disabled">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">用户权限</label>
            <div class="col-sm-9">
                <select id="permission" name="permission" class="form-control">
                    <option>请选择</option>
                    <option value="0">普通用户</option>
                    <option value="1">管理员</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">新密码</label>
            <div class="col-sm-9">
                <input type="text" id="password" name="password" class="form-control" placeholder="不修改密码此处留空。" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">邮箱</label>
            <div class="col-sm-9">
                <input type="text" id="EmailAddr" name="EmailAddr" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">联系方式</label>
            <div class="col-sm-9">
                <input type="text" id="contract" name="contract" class="form-control">
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary J_ajaxSubmitBtn">提交</button>
    </div>
</form>

<script src="../js/management/editUser.js" type="text/javascript" charset="utf-8"></script>
