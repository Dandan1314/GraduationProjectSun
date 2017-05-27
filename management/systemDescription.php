<?php
    require("../php/management/unLogin.php");
?>
<link rel="stylesheet" href="../templates/summernote/summernote.css">
<script src="../templates/summernote/summernote.js"></script>
<script src="../templates/summernote/lang/summernote-zh-CN.js"></script>

<div class="content_wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <aside>
                    <header><i class="fa fa-fw fa-file"></i>系统说明</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form" method="post" data-callBack="CallBackForAjax" action="../php/management/changeNotice.php">
                                        <div class="form-group" style="margin-bottom: 0;">
                                            <div class="col-sm-10">
                                                <div class="form-control" id="summernote"></div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 0;">
                                            <div class=" col-sm-12">
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

<script src="../js/management/systemDescription.js"></script>
