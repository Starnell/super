<?php
namespace App;
use \Common\Functions;
class Common2{

    function __construct(){
        function __construct(){ //用户登陆

            $obj=new Functions();
            $isLogin=$obj->isLogin2();
            if ($isLogin==0){
                $res=$obj->showError('请先以用户身份登陆！','/super/login');
                echo $res;
            }
        }
    }

}
