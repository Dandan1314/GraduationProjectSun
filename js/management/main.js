$(function(){

	$.ajax({
		type:"post",
		url:"../../php/management/main.php",
		dataType:"json",
		success:function(response,status,xhr){
			$('#username').html(response.username);
			$('#lastTime').html(response.lastTime);
			$('#lastIP').html(response.lastIP);
			$('#OS').html(response.OS);
			$('#phpVersion').html(response.phpVersion);
			$('#MySQLVersion').html(response.MySQLVersion);
			$('#serverVersion').html(response.serverVersion);
//			$('#maxFileSize').html(response.maxFileSize);
			$('#maxExecutionTime').html(response.maxExecutionTime);
		}
	});

});