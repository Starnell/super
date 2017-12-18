<?php
namespace App;
class About{

    function index(){
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('about.html');
    }

}