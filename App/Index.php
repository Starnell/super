<?php

namespace App;

class Index{

    function index(){
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('index.html');
    }

    function logout(){
        unset($_SESSION['uid']);
        unset($_SESSION['username']);
        unset($_SESSION['userType']);
        echo "<script language=\"JavaScript\">\r\n";
        echo "history.go(-1);\r\n";
        echo "console.log('a');\r\n";
        echo "</script>";
    }

}











