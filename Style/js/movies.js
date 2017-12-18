$(document).ready(function(){
	//var projectUrl = "";
	//切换类型导航的类型
	$(".type li").click(function(){
		$(this).siblings().removeClass("am-active");
		$(this).addClass("am-active");
		//获取电影类型参数
		var movieType = $(".type li").eq($(".type").find(".am-active").index()).find("a").attr("title");
		console.log(movieType);
		//初始获取第一页电影内容
		ajaxTest(1, movieType);
	});
	//默认进入页面为type=all,page=1
	ajaxTest(1,"all");
	//获取某类型某页面的电影数据
	function ajaxTest(num, movieType) {
		$.ajax({
			url: "/super/movie/get_movies",//获取具体类型电影的url
			type: "post",
			//data: movieType,
			data:{"type":movieType,"page":num},
			dataType: "json",
			async:"true",
			timeout:10000,
			success: function(data) {
				//var data = JSON.parse(data);
				console.log(data);
                $(".moviesList").empty();
				for(var i = 0; i < data.results.length; i++){
					var movieItem = "<li>\n" +
		        						"	<div class='am-gallery-item'>\n" +
		           					"		<a href='" + data.results[i].url + "' class=''>\n" +
		           					"			<div class='customer-case-img'>\n" +
		            					"				<img src='" + data.results[i].imgSrc + "'/>\n" +
		            					"			</div>\n" +
		            					"			<h3 class='am-gallery-title'>" + data.results[i].movieName + "</h3>\n" +
		            					"			<div class='am-gallery-desc gallery-words'>" + data.results[i].synopsis + "</div>\n" +
		           					"		</a>\n" +
		        						"	</div>\n" +
		      						" </li>";
					$(".moviesList").append(movieItem);
				};
				//分页
				$("#page").paging({
					pageNo: num,
					totalPage: data.totalSize/8,//flow
					totalSize: data.totalSize,
					callback: function(num) {
						ajaxTest(num, movieType);
					}
				})
			},
			error:function (errorMsg) {
            		alert("电影数据加载失败");
       		}
		});
	};
	
})
