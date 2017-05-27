<?php
	require("../php/management/unLogin.php");
?>
<link rel="stylesheet" href="../templates/DataTables/css/dataTables.bootstrap.css">
<script src="../templates/DataTables/js/jquery.dataTables.min.js"></script>
<script src="../templates/DataTables/js/dataTables.bootstrap.min.js"></script>

<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-users"></i>用户列表</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="userList" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>用户名</th>
                                            <th>最后登录日期</th>
                                            <th>最后登录IP</th>
<!--                                            <th>剩余空间</th>-->
                                            <th>邮箱</th>
                                            <th>联系方式</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>

<!--                                        <tfoot>-->
<!--                                        <tr>-->
<!--                                        	<th>ID</th>-->
<!--                                            <th>用户名</th>-->
<!--                                            <th>最后登录日期</th>-->
<!--                                            <th>最后登录IP</th>-->
<!--                                            <th>剩余空间</th>-->
<!--                                            <th>邮箱</th>-->
<!--                                            <th>联系方式</th>-->
<!--                                            <th>操作</th>-->
<!--                                        </tr>-->
<!--                                        </tfoot>-->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>

</div>

<script src="../js/management/userList.js" type="text/javascript" charset="utf-8"></script>