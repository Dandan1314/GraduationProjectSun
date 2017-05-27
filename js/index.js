$("#username,#password").keyup(function() {
	if($("#username").val().trim().length != 0 && $("#password").val().trim().length != 0) {
		$("#loginbtn").animate({
			left: "0",
			duration: "slow"
		});
		$("#lockbtn").animate({
			left: "260px",
			duration: "slow"
		});
	}
});

$("#username,#password").keyup(function() {
	if($("#username").val().trim().length == 0 || $("#password").val().trim().length == 0) {
		$("#loginbtn").animate({
			left: "-260px",
			duration: "slow"
		});
		$("#lockbtn").animate({
			left: "0",
			duration: "slow"
		});
	}
});

$("#loginbtn").click(function sub() {
	$("#loading").removeClass("hidden");
	$.ajax({
		type: "post",
		url: "../php/login.php",
		data: {
			username: $("#username").val(),
			password: $("#password").val()
		},
		dataType: "json",
		success: function(response, status, xhr) {
			if(response.type == 2) {
				location.href = 'cloudMain/';
			} else if(response.type == 1) {
				location.href = 'management/';
			} else {
				$("#loading").addClass("hidden");
				$("#false").html('<i class="fa fa-times bigicon"></i><span class="loginFalse f24 fr pr15">登录失败！</span>');
			}
		},
		error: function() {
			$("#loading").addClass("hidden");
			$("#false").html('<i class="fa fa-times bigicon"></i><span class="loginFalse f24 fr pr15">请求出错！</span>');
		}
	});
});



// 点击弹出的内容
$(function () {

    //获取公告和使用方法
    $.ajax({
        type:"post",
        url:"../php/management/siteCon.php",
        dataType:"json",
        success:function (response,xhr,status) {
            var SystemNotice = response.SystemNotice;
            var HowToUse = response.HowToUse;

            $("#howToUse").popover({
                animation:'true',
                html:true,
                title:'使用说明',
                content: HowToUse ,
                delay: { "show": 120, "hide": 120 },
                placement:'top'
            })

            //获取时间戳 var myDate = new Date().getTime();

            //加载系统公告内容
            //获取到当天的日期
            //加载使用说明
            var myDate = new Date();
            var dateToday = myDate.toLocaleDateString();
            //尝试获取当前localStrage中的dateToday
            var getLST = localStorage.getItem("dateToday",dateToday);

            if ( dateToday != getLST ){

                localStorage.setItem("dateToday",dateToday);

                $('.modal-body').html(SystemNotice);

                //今天第一次登录弹出模态框
                $('#notice').modal({
                    show:true,
                    backdrop:true
                });
            }

        },
        error:function () {
            $('#error').modal({
                show:true,
                backdrop:true
            });
        }
    });
});