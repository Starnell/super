<?php

namespace App;
use \Common\Factory;

class Login{

    function index(){
        global $smarty;
        if ($_SESSION['uid']){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"您已经登录，请勿重复登录\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }else{
            $smarty->display('login.html');
        }
    }

    function login(){
        global $db;
        $info=array();
        if ($_POST['username']){
            $info['username']=$_POST['username'];
            $info['password']=$_POST['password'];
            $info['type']=$_POST['type'];
            $model=Factory::getModel('user');
            $data=$model->login($db,$info);
            echo json_encode($data);
        }
    }

}