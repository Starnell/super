$(document).ready(function(){
	//项目url前缀
	var projectUrl = "/super";
	$.ajax({
		type:"get",
		url:"/super/admin_user/get_rooms",
		async:true,
		dataType:"json",
		timeout:10000,
		success:function(data){
			//var data = JSON.parse(data);
			console.log(data);
			for(var i =0; i < data.length; i++){
				var userItem = " <tr>\n" +
		                       "     <td>" + data[i].uid + "</td>\n" +
		                       "     <td>" + data[i].username + "</td>\n" +
		                       "     <td>" + data[i].password + "</td>\n" +
		                       "     <td>\n" +
		                       "         <a class='link-del' href='" + projectUrl + "/admin_user/edit/id/" + data[i].uid + "'>编辑</a>\n" +
						       "     &nbsp;&nbsp;<a class='link-del' href='"+projectUrl + "/admin_user/delete/id/" +data[i].uid + "' onclick=\"return confirm('你确定要删除吗？')\">删除</a>\n" +
		                       "     </td>\n" +
		                       " </tr>";
				$(".result-tab").append(userItem);
			};
		},
		error:function (errorMsg) {
			console.log(errorMsg);
	    }
	});
})
