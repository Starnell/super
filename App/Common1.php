<?php
namespace App;
use \Common\Functions;
class Common1{

    function __construct(){ //管理员登陆
        $obj=new Functions();
        $isLogin=$obj->isLogin1();
        if ($isLogin==0){
            $res=$obj->showError('请先以管理员身份登陆！','/super/login');
            echo $res;
            exit();
        }
    }

}
