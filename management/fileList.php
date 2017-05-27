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
                    <header><i class="fa fa-fw fa-list"></i>文件列表（批量管理需使用FTP工具）</header>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                        	<th>ID</th>
                                            <th>文件名</th>
                                            <th>上传时间</th>
                                            <th>文件大小</th>
                                            <th class="hideThAfer">所属用户</th>
                                            <th class="hideThAfer">分享情况</th>
                                            <th class="hideThAfer">文件路径</th>
                                            <th class="hideThAfer">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        	<td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>2017年1月18日</td>
                                            <td>127.0.0.1</td>
                                            <td>1024MB</td>
                                            <td>admin@admin.com</td>
                                            <td>13333333333</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>admin@admin.admin</td>
                                            <td>$170,750</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashton Cox</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>admin@admin.admin</td>
                                            <td>$86,000</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Cedric Kelly</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>admin@admin.admin</td>
                                            <td>$433,060</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Brielle Williamson</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>admin@admin.admin</td>
                                            <td>$372,000</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Herrod Chandler</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>admin@admin.admin</td>
                                            <td>$137,500</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Rhona Davidson</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>admin@admin.admin</td>
                                            <td>$327,900</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Colleen Hurst</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>admin@admin.admin</td>
                                            <td>$205,500</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Sonya Frost</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>admin@admin.admin</td>
                                            <td>$103,600</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Jena Gaines</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>admin@admin.admin</td>
                                            <td>$90,560</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Airi Satou</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>admin@admin.admin</td>
                                            <td>$162,700</td>
                                            <td>
                                            	<button type="button" class="btn btn-warning btn-xs J_confirm_modal" data-tip="屏蔽这个文件？" data-target="../server/ajaxReturn.json">屏蔽</button>
                                            	<button type="button" class="btn btn btn-info btn-xs J_confirm_modal" data-tip="不再屏蔽这个文件？" data-target="../server/ajaxReturn.json">取消屏蔽</button>
                                            	<button type="button" class="btn btn-danger btn-xs J_confirm_modal" data-tip="一定要删除？" data-target="../server/ajaxReturn.json">删除</button>
                                            </td>
                                        </tr>
                                        </tbody>
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

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            /*paging: false,
            lengthChange: false,
            searching: false,
            ordering: false,
            info: false,*/
            scrollX: true,
            "language": {
                url:'../templates/DataTables/Chinese.json'
            }
        });
    });
</script>