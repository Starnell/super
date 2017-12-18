$(document).ready(function(){
	//项目url前缀
	var projectUrl = "/super";
	newsTable(1);
	function newsTable(num){
		$.ajax({
			url: "/super/admin_news/get_news/page/"+num,//获取具体咨询的url
			type: "get",
			dataType: "json",
			async:"true",
			timeout:10000,
			success:function(data){
				//var data = JSON.parse(data);
				console.log(data);
                $(".result-tab").empty();
                var newsHead = "<tr>\n"+
								"	<th style='width:20%;'>资讯标题</th>\n"+
								"	<th style='width:45%;'>资讯摘要</th>\n"+
								"	<th style='width:15%;'>发布时间</th>\n"+
								"	<th style='width:10%;'>发布者</th>\n"+
								"	<th style='width:5%;'>来源</th>\n"+
								"   <th style='width:5%;'>操作</th>\n"+
								"</tr>";
				$(".result-tab").append(newsHead);
				for(var i = 0; i < data.results.length; i++){
					var source = (data.results[i].source == "original") ? "原创" : "转载";
					var newsItem =" <tr>\n" +
				                  "      <td><a href='" + projectUrl + "/news/detail/id/" + data.results[i].nid + "' target='_blank'>" + data.results[i].title + "</a></td>\n" +
				                  "      <td>" + data.results[i].abstract + "</td>\n" +
				                  "      <td>" + data.results[i].pub_time +"</td>\n" +
				                  "      <td>" + data.results[i].author +"</td>\n" +
				                  "      <td>" + source + "</td>\n " +
			                      "      <td style='width:5%;'>\n" +
			                      "          <a class='link-del' href='" + projectUrl + "/admin_news/del/id/" + data.results[i].nid + "' onclick=\"return confirm('你确定要删除吗？')\";>删除</a>\n" +
			                      "      </td>\n"
			                      " </tr>"
					$(".result-tab").append(newsItem);
				}
				//分页
				$("#admin-news-page").paging({
					pageNo: num,
					totalPage: (data.totalSize/6),//flow
					totalSize: data.totalSize,
					callback: function(num) {
						newsTable(num);
					}
				})
			},
			error:function (errorMsg) {
				console.log(errorMsg);
	      	}
		});
	}
})
