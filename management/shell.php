<?php
	require("../php/management/unLogin.php");
?>
<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-terminal"></i>执行Shell命令</header>
                    <section>
                        <div class="container-fluid">
                        	
                        	<div class="row">
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control shellBack" disabled="disabled"></textarea>
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                </div>
                            </div>
                            
                            
                            	<hr />
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form" method="get" action="../server/ajaxReturn.php" data-validate="ShellContent">
                                        <div class="form-group">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="ShellContent"></textarea>
                                            </div>
                                            <div class="col-sm-3 SubShell">
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


<script>
    function ShellContent($from) {
        var ShellContent = $from.find('textarea[name="ShellContent"]');
        if ($.trim(ShellContent.val()) == '') {
            return '提交的信息不能为空';
        }

        return true;
    }
</script>