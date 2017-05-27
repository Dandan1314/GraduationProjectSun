function check_value(){
	
	if ($('#oldPwd').val().trim() == '' || $('#newPwd1').val().trim() == '' || $('#newPwd2').val().trim() == '') {
		return '请将信息填写完整后再次提交！';
	} else if ($('#newPwd1').val().trim().length < 6 ){
		return '密码长度至少6位!';
	} else if ($('#newPwd1').val().trim() != $('#newPwd2').val().trim()){
		return '两次新密码输入不一致！';
	} else if( $('#oldPwd').val().trim() == $('#newPwd1').val().trim()){
		return '密码未变化，无需修改';	
	}
	
	return true;
	
}

function jump_to_index(){
	location.href = '/';
}
