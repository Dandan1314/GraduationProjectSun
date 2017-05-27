function check_value(){
	
	var Email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //验证邮箱的正则表达式
	
	if ($('#username').val().trim() == '' || $('#password').val().trim() == '' || $('#permission').val().trim() == '' || $('#EmailAddr').val().trim() == '' || $('#contract').val().trim() == '') {
		return '请将信息填写完整后再次提交！';
	} else 
	if ($('#password').val().trim().length < 6 ){
		return '密码长度至少6位!';
	} else if (!$('#EmailAddr').val().trim().match(Email)){
		return '邮箱格式不正确';
	}
	
	return true;
	
}