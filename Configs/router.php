<?php
//定义模块路径
if (strstr(__DIR__,'\\Configs')){
    define('MODULE_DIR',str_replace('\\Configs','',__DIR__).'/App');
}elseif(strstr(__DIR__,'/Configs')){
    define('MODULE_DIR',str_replace('/Configs','',__DIR__).'/App');
}
$_DocumentPath = $_SERVER['DOCUMENT_ROOT'];                       //eg.D:/WampServer/demo
$_FilePath = __FILE__;                                            //eg.D:\WampServer\demo\super\Configs\router.php
$_RequestUri = $_SERVER['REQUEST_URI'];                           //eg.==>/super/movie/detail/id/1
$_AppPath = str_replace($_DocumentPath, '', $_FilePath);  //D:\WampServer\demo\super\Configs\router.php
$_UrlPath = $_RequestUri;                                         // /super/movie/detail/id/1

$_AppPathArr = explode(DIRECTORY_SEPARATOR, $_AppPath);  //DIRECTORY_SEPARATOR ==> /
/*
  0 => string 'D:' (length=2)
  1 => string 'WampServer' (length=10)
  2 => string 'demo' (length=4)
  3 => string 'super' (length=5)
  4 => string 'Configs' (length=7)
  5 => string 'router.php' (length=10)
 */
for ($i = 0; $i < count($_AppPathArr); $i++) {
    $p = $_AppPathArr[$i];
    if ($p) {
        $_UrlPath = preg_replace('/^\/'.$p.'\//', '/', $_UrlPath, 1); //$_UrlPath==>/super/movie/detail/id/1
		//最大替换次数1
    }
}
//$_UrlPath==>/movie/detail/id/1
$_UrlPath = preg_replace('/^\//', '', $_UrlPath, 1); //movie/detail/id/1
$_AppPathArr = explode("/", $_UrlPath);
/*
  0 => string 'movie' (length=5)
  1 => string 'detail' (length=6)
  2 => string 'id' (length=2)
  3 => string '1' (length=1)
*/
$_AppPathArr_Count = count($_AppPathArr);
$arr_url = array(
    'controller' => 'index',  //默认控制器index
    'method' => 'index',      //默认方法index
    'parms' => array()
);
if ($_AppPathArr[0]){
    $arr_url['controller'] = $_AppPathArr[0];
}
if ($_AppPathArr[1]){
    $arr_url['method'] = $_AppPathArr[1];
}

//get传参形式  ?wd=dhgfh
if (strstr($arr_url['controller'],'?')&&strstr($arr_url['controller'],'=')){
    $parms=strstr($arr_url['controller'],'?');
    $arr_url['controller']=str_replace($parms,'',$arr_url['controller']);
    $parms=substr($parms,1);
    $parmsArray[]=$parms;
    if (strstr($parms,'&')){
        $parmsArray=explode('&',$parms);
    }
}

if (strstr($arr_url['method'],'?')&&strstr($arr_url['method'],'=')){
    $parms=strstr($arr_url['method'],'?');
    $arr_url['method']=str_replace($parms,'',$arr_url['method']);
    $parms=substr($parms,1);
    $parmsArray[]=$parms;
    if (strstr($parms,'&')){
        $parmsArray=explode('&',$parms);
    }
}


if ($_AppPathArr_Count > 2 and $_AppPathArr_Count % 2 != 0) {
   //  (1)不可行   die('参数错误');
    /*
     * (2)可行  改，默认方法index
     */
    $arr_url['method']='index';

    if ($parmsArray){
        foreach ($parmsArray as $k){
            $value=strstr($k,'=');
            $key=str_replace($value,'',$k);
            $value=substr($value,1);
            $arr_temp_hash=array(strtolower($key),$value);
            $arr_url['parms'] = array_merge($arr_url['parms'], $arr_temp_hash);
        }
    }else{
        for ($i = 1; $i < $_AppPathArr_Count; $i += 2) {
            $arr_temp_hash = array(strtolower($_AppPathArr[$i])=>$_AppPathArr[$i + 1]);
            $arr_url['parms'] = array_merge($arr_url['parms'], $arr_temp_hash);
        }
    }

    /*
     * 到这里结束
     */

} else {
    if ($parmsArray){
        foreach ($parmsArray as $k){
            $value=strstr($k,'=');
            $key=str_replace($value,'',$k);
            $value=substr($value,1);
            $arr_temp_hash=array(strtolower($key)=>$value);
            $arr_url['parms'] = array_merge($arr_url['parms'], $arr_temp_hash);
        }
    }else{
        for ($i = 2; $i < $_AppPathArr_Count; $i += 2) {
            $arr_temp_hash = array(strtolower($_AppPathArr[$i])=>$_AppPathArr[$i + 1]);
            $arr_url['parms'] = array_merge($arr_url['parms'], $arr_temp_hash);
        }
    }
}

/*
 * 转换为get接收
 */
foreach ($arr_url['parms'] as $k=>$v){
    $_GET[$k]=$v;
}

$controller_name = ucwords($arr_url['controller']);
$controller_file = MODULE_DIR.'/'.$controller_name.'.php';
$method_name = $arr_url['method'];
if (file_exists($controller_file)) {
    $class_name='\\App\\'.$controller_name;              //控制器路径
    $obj_controller = new $class_name;
    if (!method_exists($obj_controller, $method_name)) {
        die("要调用的方法不存在！");
    } else {
        if (is_callable(array($obj_controller, $method_name))) {
            $obj_controller -> $method_name();
            //$obj_controller -> printResult();
        }
    }
} else {
    die("要调用的控制器不存在！");
}

