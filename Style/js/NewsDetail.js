$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	//获取具体咨询的数据
	var url=location.href;
	$.ajax({
		url:url.replace('detail','get_detail'),//获取具体咨询的url
		type: "get",
		dataType: "json",
		async:"true",
		timeout:10000,
		success:function(data){
			//var data = JSON.parse(data);
			console.log(data);
			var source = (data.source == "original") ? "原创" : data.source;
			if(data){
                $(".news-detail-title").text(data.title);
                $(".news-detail-meta").text("作者：" + data.author + "  发布时间：" + data.pub_time + "  来源：" + source);
                $(".news-detail-lead").text(data.abstract);
                $("#news-content").html(data.content);//可能有编码问题
            }
		},
		error:function (errorMsg) {
            	alert("咨询数据加载失败");
       	}
	});
})
