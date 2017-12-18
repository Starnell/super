$(document).ready(function(){
	var projectUrl = "";//项目url前缀
	moviesTable(1);
	function moviesTable(num){
		$.ajax({
			url: '/super/admin_movie/get_movies/page/'+num,//获取电影数据的url
			type: "get",
			dataType: "json",
			async:"true",
			timeout:10000,
			success:function(data){
				//var data = JSON.parse(data);
				console.log(data);
                $(".result-tab").empty();
                var movieHead = "<tr>\n"+
								"	<th style='width:30%;'>电影名称</th>\n"+
								"	<th style='width:30%;'>发布时间</th>\n"+
								"	<th style='width:25%;'>片长</th>\n"+
								"	<th style='width:10%;'>平均评分</th>\n"+
								"	<th style='width:5%;'>操作</th>\n"+
								"</tr>";
                $(".result-tab").append(movieHead);
				for(var i = 0; i < data.results.length; i++){
					var movieItem ="<tr>\n" +
	                            	   "		<td><a href='" + data.results[i].url + "' target='_blank'>" + data.results[i].movieName + "</a></td>\n" +
	                            	   "		<td>" + data.results[i].releaseDate + "</td>\n" +
	                            	   "		<td>" + data.results[i].runtime + "</td>\n" +
	                            	   "		<td>" + data.results[i].average + "</td>\n" +
				                   "    <td>\n" +
				                   "         <a class='link-del' href='" + projectUrl + "admin_movie/del/id/" + data.results[i].mid + "'onclick='return confirm(\'你确定要删除吗？\');'>删除</a>\n" +
				                   "    </td>\n" +
				                   "</tr>" ;
					$(".result-tab").append(movieItem);
				};
				//分页
				$("#admin-movies-page").paging({
					pageNo: num,
					totalPage: data.totalSize/8,//flow
					totalSize: data.totalSize,
					callback: function(num) {
						moviesTable(num);
					}
				})
			},
			error:function (errorMsg) {
				console.log(errorMsg);
	      	}
		});
	}
	
})
