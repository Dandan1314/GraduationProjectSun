/**
 * Created by Mingzhe Sun on 2017/4/6.
 */

$(function () {

    //页面加载时候的列表
    loadFile();


    $('.getList').click(function () {

        //先清空路径
        $('#userUrl').html("");

        if( $(this).attr("id") == "all" ){
            //清空原内容
            $('#fileList').text("");
            loadFile();
        } else {
            //获取左侧点击内容的ID值，并访问对应的目录
            var dirName = $(this).attr("id");

            //点击左侧按钮，使路径发生变化
            var userUrl = '';
            userUrl += '<span class="color-white"> > </span>';
            userUrl += '<span href="#" class="userUrl color-white f12">';
            userUrl += dirName;
            userUrl += '</span>';

            $('#userUrl').text("").append(userUrl);

            //载入目录下的内容
            $('#fileList').text("");
            loadFile(dirName);

        };
    });

    //刷新当前列表
    $('#refresh').click(function () {
        urlLength = $('.userUrl').length - 1;
        if( urlLength != -1){
            dirName = "";
            for( var i=0; i<=urlLength ; i++){
                dirName += $('.userUrl').eq(i).text() + '/';
            };
            dirName = dirName.substring(0,dirName.length-1);
            $('#fileList').text("");
            loadFile(dirName);
        }else{
            $('#fileList').text("");
            loadFile();
        }
    });

    //返回上一层
    $('#upOne').click(function () {
        urlLength = $('.userUrl').length - 2;
        if( urlLength != -2){
            dirName = "";
            for( var i=0; i<=urlLength ; i++){
                dirName += $('.userUrl').eq(i).text() + '/';
            };
            dirName = dirName.substring(0,dirName.length-1);
            $('#userUrl span').last().remove();
            $('#userUrl span').last().remove();
            $('#fileList').text("");
            loadFile(dirName);
        }
    });

    //返回根目录
    $('#upToIndex').click(function () {
        $('#userUrl').text("");
        $('#fileList').text("");
        loadFile();
    });

    //用户修改密码
    $('#chPwdReLogin').click(function () {
        var oldPwd = $('#oldPwd').val().trim();
        var newPwd1 = $('#newPwd1').val().trim();
        var newPwd2 = $('#newPwd2').val().trim();
        if ( oldPwd == '' || newPwd1 == '' || newPwd2 == ''){
            $('#changePwdShow').text('信息填写不完整！').css('color','red');
            return false;
        }else  if ( oldPwd == newPwd1 ){
            $('#changePwdShow').text('新旧密码相同！').css('color','red');
            return false;
        }else if( newPwd1 != newPwd2 ){
            $('#changePwdShow').text('两次新密码不一致！').css('color','red');
            return false;
        }else if ( oldPwd.length < 6 || newPwd1.length < 6 ){
            $('#changePwdShow').text('密码长度最小为6位！').css('color','red');
            return false;
        }else{
            $.ajax({
                type: "post",
                url: "../../php/common/changePwd.php",
                data: {
                    oldPwd:oldPwd,
                    newPwd1:newPwd1
                },
                dataType:"json",
                success:function (response,status,xhr) {
                    if( response.state == 'success'){
                        $('#changePwdShow').text('修改成功，重新登录生效！').css('color','green');
                        return true;
                    } else{
                        $('#changePwdShow').text('原密码不正确，请检查！').css('color','red');
                        return false;
                    }
                },
                error:function () {
                    alert("内部错误，请联系管理员！");
                }
            });
        }
    });

    //加载用户共享的内容
    $('#seeShare').click(function () {

        var dirName = $('#seeUsrName').val() + "/share";
        $('#userUrl').text('');
        $('#fileList').text("");

        loadFile(dirName,"1");

    });

    //退出登录
    $('#logoutOK').click(function () {
        $.ajax({
            type: "post",
            url: "../../php/common/logout.php",
            dataType:"json",
            success:function(response,state,xhr){
                window.location.href = response.referer;
            },
            error:function () {
                $('#error').modal({
                    show:true,
                    backdrop:true
                });
            }
        });
    });

});

