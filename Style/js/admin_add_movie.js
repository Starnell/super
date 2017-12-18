function deal() {
    var myform=document.getElementById('myform');
    var movieType=document.getElementById('movieType');
    var types=new Array();
    var index=0;
    for (var i=0;i<myform.movieType0.length;i++){
        if (myform.movieType0[i].checked){
            types[index]=myform.movieType0[i].value;
            index++;
        }
    }
    movieType.value=types.join(',');
	var alldone=true;
    if(document.getElementById('movieName').value==''){
		alldone=false;
    }
    if(document.getElementById('movieType').value==''){
        alldone=false;
    }
    if(document.getElementById('releaseDate').value==''){
        alldone=false;
    }
    if(document.getElementById('runtime').value==''){
        alldone=false;
    }
    if(document.getElementById('area').value==''){
        alldone=false;
    }
    if(document.getElementById('director').value==''){
        alldone=false;
    }
    if(document.getElementById('screenwriter').value==''){
        alldone=false;
    }
    if(document.getElementById('performer').value==''){
        alldone=false;
    }
    if(document.getElementById('imgSrc').value==''){
        alldone=false;
    }
    if(document.getElementById('synopsis').value==''){
        alldone=false;
    }
    if(alldone){
    	return true;
	}else{
        alert('还有内容未完成！');
        return false;
	}
}

