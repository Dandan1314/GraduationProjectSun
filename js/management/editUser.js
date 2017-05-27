/**
 * Created by Mingzhe Sun on 2017/2/13.
 */
function check_value(){

    var Email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //验证邮箱的正则表达式

    if( $('#password').val().trim().length > 0 && $('#password').val().trim().length < 6 ){
        return '若要修改密码，请使长度不低于6位！';
    } else  if ( $('#permission').val() != 0 && $('#permission').val() != 1  ){
        return '请设置正确的权限！';
    } else if (!$('#EmailAddr').val().trim().match(Email)){
        return '邮箱格式不正确！';
    } else if ( $('#contract').val().trim().length == null ){
        return '联系方式不能为空！';
    }

    return true;

}
