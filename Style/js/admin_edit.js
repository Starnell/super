$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	$("#username").attr("readonly","readonly");
	$(".admin_edit").click(function(){
		if ($("#password").val()!=="") {
			$.ajax({
				type:"post",
				url:location.href,
				async:true,
				data:{"password": $("#password").val()},
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
				error:function(errorMsg){
					console.log(errorMsg);
				}
			});
		} else{
			alert("请填写新的密码！");
		}
	});
})
