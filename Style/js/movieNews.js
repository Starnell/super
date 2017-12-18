$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
    //默认进入页面为page=1
	ajaxTest(1);
	//获取某页面的电影咨询
	function ajaxTest(num) {
		$.ajax({
			url: "/super/news/get_news",//获取电影资讯的url
			type: "post",
			data: {
				page:num
            },
			dataType: "json",
			async:"true",
			timeout:10000,
			success: function(data) {
				//var data = JSON.parse(data);
				console.log(data);
                $("#movieNews").empty();
				for(var i = 0; i < data.results.length; i++){
					var newsItem =  "<a href='" + data.results[i].url + "'>\n" +
							    		"	<li class='am-u-lg-12 am-u-md-12 am-u-sm-12'>\n" +
								    	"		<div class='am-u-lg-8 am-u-md-8 am-u-sm-12 service-content'>\n" +
								    	"			<h4 class='w-blue'>" + data.results[i].title + "</h4>\n" +
								   	"			<p>" + data.results[i].abstract + "</p>\n" +
								   	"		</div>\n" +
							 		"		<div class='am-u-lg-4 am-u-md-4 am-u-sm-12 service-img'>\n" + 
								    	"  			<img src='" + data.results[i].imgSrc + "' style='height: 150px;width: 150px;' />\n" +
								    	"		</div>\n" +
								   	"	</li>\n" +
									"</a>\n";
					$("#movieNews").append(newsItem);
				};
				//分页
				$("#newsPage").paging({
					pageNo: num,
					totalPage: (data.totalSize/6),//flow
					totalSize: data.totalSize,
					callback: function(num) {
						ajaxTest(num);
					}
				})
			},
			error:function (errorMsg) {
            		alert("电影资讯数据加载失败");
       		}
		});
	};
})