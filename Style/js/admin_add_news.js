function change() {
    var linkObj=document.getElementById('link');
    linkObj.style.visibility='visible';
}
function deal() {
    var originalObj=document.getElementById('original');
    var linkObj=document.getElementById('link');
    var sourceObj=document.getElementById('source');
    if(originalObj.checked){
        sourceObj.value=originalObj.value;
    }
    var link=linkObj.value;
    if(link!==''){
        sourceObj.value=link;
    }
    var alldone=true;
    if(document.getElementById('title').value==''){
        alldone=false;
    }
    if(document.getElementById('author').value==''){
        alldone=false;
    }
    if(document.getElementById('source').value==''){
        alldone=false;
    }
    if(document.getElementById('imgSrc').value==''){
        alldone=false;
    }
    if(document.getElementById('abstract').value==''){
        alldone=false;
    }
    if(document.getElementById('content').value==''){
        alldone=false;
    }
    if(alldone){
        return true;
    }else{
        alert('还有内容未完成！');
        return false;
    }
}
