<?php
//定义模块路径
define('MODULE_DIR',APPLICATION_PATH.DIRECTORY_SEPARATOR.'app');

//获得当前项目名称
$documentPath=$_SERVER['DOCUMENT_ROOT'];     //当前项目所在文件夹
$filePath=__FILE__;                          //当前文件所在路径
if (DIRECTORY_SEPARATOR=='\\'){
    $filePath=str_replace('\\','/',$filePath);
}
$appPath=str_replace($documentPath,'',$filePath);
$appPathArr=explode('/',$appPath);
if ($appPathArr[0]){
    $appName=$appPathArr[0];
}else{
    $appName=$appPathArr[1];
}

//去除url中项目名
$requestUri=$_SERVER['REQUEST_URI'];  //当前访问url(不带域名)
$urlPath=preg_replace("/^\/$appName\//",'',$requestUri,1);
$urlPathArr=explode('/',$urlPath);

//解析
$urlPathArrCount=count($urlPathArr);
//设置默认控制器和方法
$url_arr=array(
    'controller'=>'index',
    'method'=>'index',
    'params'=>array()
);
$params='';
//实际控制器
if (isset($urlPathArr[0])&&$urlPathArr[0]){
    //如果有传参 == 使用默认方法名情况下
    if (strstr($urlPathArr[0],'?')&&strstr($urlPathArr[0],'=')){
        $arr=explode('?',$urlPathArr[0]);
        $url_arr['controller']=$arr[0];
        $params=strtolower($arr[1]);
    }else{
        $url_arr['controller']=$urlPathArr[0];
    }
}
//实际方法
if (isset($urlPathArr[1])){
    //如果有传参
    if (strstr($urlPathArr[1],'?')&&strstr($urlPathArr[1],'=')){
        $arr=explode('?',$urlPathArr[1]);
        $url_arr['method']=$arr[0];
        $params=strtolower($arr[1]);
    }else{
        $url_arr['method']=$urlPathArr[1];
    }
}

//实际参数
if ($params){
    $paramsArr=explode('&',$params);
    $paramsArrNew=array();
    for ($i=0;$i<count($paramsArr);$i++){
        $index=strpos($paramsArr[$i],'=');
        $paramsArrNew[substr($paramsArr[$i],0,$index)]=substr($paramsArr[$i],$index+1);
    }
    $url_arr['params']=$paramsArrNew;
}
//restful方式传参
if ($urlPathArrCount>2){
    $restParams=array();
    if ($urlPathArrCount%2!=0){
        $url_arr['method']='index';
        $restParams=array_slice($urlPathArr,1);
    }else{
        $restParams=array_slice($urlPathArr,2);
    }
    for ($i=0;$i<count($restParams);$i+=2){
        $url_arr['params'][strtolower($restParams[$i])]=strtolower($restParams[$i+1]);
    }
}

//将参数转化为GET传参
if ($url_arr['params']){
    foreach ($url_arr['params'] as $k=>$v){
        $_GET[$k]=$v;
    }
}

//MVC
$controller=ucwords($url_arr['controller']);
$controllerFile=MODULE_DIR.'/controller/'.$controller.'.php';
$method=$url_arr['method'];
if (file_exists($controllerFile)){
    $className='\\app\\controller\\'.$controller; //加上命名空间
    $objController=new $className;
    if (!method_exists($objController,$method)){
        die('要调用的方法不存在！');
    }else{
        if (is_callable(array($objController,$method))){
            $objController->$method();
        }
    }
}else{
    die('要调用的控制器不存在！');
}