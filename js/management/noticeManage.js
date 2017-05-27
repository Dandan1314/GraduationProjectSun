/**
 * Created by Mingzhe Sun on 2017/4/6.
 */

$(function () {

    $('#summernote').summernote({
        lang: 'zh-CN',
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: true,
        callbacks: {
            onInit: function () {

                $.ajax({
                    type:"post",
                    url:"../php/management/siteCon.php",
                    dataType:"json",
                    success:function (response,status,xhr) {
                        var noticeHistory = response.SystemNotice;
                        $('#summernote').summernote('code', noticeHistory);
                    },
                    error:function () {
                        alert("请求地址连接失败");
                    }
                });

            },
            onFocus: function () {
            },
            onBlur: function () {
            }
        }
    });

});

//ajax提交验证之后的回掉函数
function CallBackForAjax() {

    var noticeInfo = $('#summernote').summernote('code');

    $.ajax({
        type:"post",
        url:"../php/management/changeNotice.php",
        data:{
            noticeInfo:noticeInfo
        },
        dataType:"json",
        success:function (response,status,xhr) {
        },
        error:function () {
            alert('公告修改失败！');
        }
    });
    return true;

};