$(document).ready(function(){
	//项目url前缀
	var projectUrl = "";
	//var arr = "http://localhost/super/movie/detail/id/1";
	//获取电影id
	var arr = location.href;

    //获取具体电影的数据
    $.ajax({
        url: arr.replace('detail','get_detail'),//获取具体类型电影的url
        type: "get",
        dataType: "json",
        async:"true",
        timeout:10000,
        success:function(data){
            // var data = JSON.parse(data);
            console.log(data);
            if(data){
                $(".movie-title").text(data.movieName + "|" + data.average + "分");
                $(".movie-synopsis").text(data.synopsis);
                $(".movie-release-date").text(data.releaseDate);
                $(".movie-runtime").text(data.runtime);
                $(".movie-area").text(data.area);
                $(".movie-director").text(data.director);
                $(".movie-screenwriter").text(data.screenwriter);
                $(".movie-performers").text(data.performer);
                $(".movie-img").attr("src",data.imgSrc);
                $("#play").attr("href",'/super/movie/play/id/'+data.id);
            }
        },
        error:function (errorMsg) {
            alert("电影数据加载失败");
        }
    });


	var movieId = arr.split("/")[7];
	//console.log(movieId);
	$('#stars-rating').raty({
  		click: function(score, evt) {
  			var movieScore = {"id": movieId, "grade": score};
  			if(confirm("您对该电影的评分为：" + score)){
  				//传输给定的分数
				$.ajax({
					url: '/super/movie/grade',//打星url
					type: "post",
					data: movieScore,
					dataType: "json",
					async:"true",
					timeout:10000,
					success:function (data) {
						if(data.result){
							alert('评分成功！');
							window.location.replace(arr);
						}else{
                            alert('评分失败！')
						}
                    }

				});
  			}
		}	
	});
})