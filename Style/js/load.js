$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	$(".load").click(function(){
		var ok1 = (typeof($("input[name=type]:checked").val()) == "undefined")?false:true;
		var ok2 = ($("#user").val()!=="")?true:false;
		var ok3 = ($("#pwd").val()!=="")?true:false;
		var type = $("#type:checked").val();
		var username = $("#user").val();
		var password = $("#pwd").val();
		//console.log($("#type:checked").val()+$("#user").val()+$("#pwd").val());
		if (ok1 && ok2 && ok3) {
			$.ajax({
				type:"post",
				url:'/super/login/login',
				async:true,
				data:{"type":type, "username":username, "password": password},
				timeout:10000,
                success:function (data) {
                    var data = JSON.parse(data);
					if(data.status){
						if(data.msg=='back'){
							history.go(-1);
						}else{
                            window.location.replace(data.msg);
						}
					}else{
						console.log(data);
						alert(data.msg);
					}
                },
				error:function(errorMsg){
					console.log(errorMsg);
				}
			});
		} else{
			alert("登录失败");
		}
	})
	
})
