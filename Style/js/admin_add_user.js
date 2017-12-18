$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	$(".user-add").click(function(){
		var ok1 = ($("#username").val() !== "") ? true : false;
		var ok2 = ($("#password").val() !== "") ? true : false;
		if (ok1 && ok2) {
			var username = $("#addUser").serialize().split("&")[0].split("=")[1];
			var password = $("#addUser").serialize().split("&")[1].split("=")[1];
			$.ajax({
				type:"post",
				url:"/super/admin_user/add",
				async:true,
				data:{"username" : username, "password" : password},
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
			alert("请填入房间号和密码！");
		};
	})
})
