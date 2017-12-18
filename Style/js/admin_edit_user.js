$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	//得到该房间的id
	//var arr = "http://123.207.255.176/super/admin_user/edit/id/2";
	var arr = location.href;
	var userId = arr.split("/")[7];
	$("#username").val(userId);
	$("#username").attr("readonly",true);

	$(".editUser").click(function(){
		var bool = ($("#password").val() !== "") ? true : false;
		if(bool){
			var password = $("#password").val();
			console.log(password);
			$.ajax({
				type:"post",
				url: location.href,
				async:true,
				data:{"password":password},
				timeout:10000,
                success:function (data) {
                    var data=JSON.parse(data);
                    if(data.status){
                        alert('提交成功！');
                        location.replace(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
				error:function (errorMsg) {
					console.log(errorMsg);
			    }
			});
		}else{
			alert("未输入密码！");
		};
	})
})
