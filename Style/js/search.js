$(document).ready(function(){
	//项目url前缀
	var projectUrl = "/super";
	var input = location.search;
	var searchInf = input.split("=")[1];
	//得到相应的电影数据
	$.ajax({
		url: projectUrl + "/movie/results/wd/"+searchInf,//获取具体咨询的url
		type: "get",
		dataType: "json",
		async:"true",
		timeout:10000,
		success:function(data){
			// var data = JSON.parse(data);
			console.log(data);
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
		},
		error:function (errorMsg) {
	    		alert("搜索失败");
	    }
	});
})
