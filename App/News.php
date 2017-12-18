<?php

namespace App;
use \Common\Factory;
class News{

    function index(){
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('movieNews.html');
    }

    function get_news(){
        global $db;
        $page=$_POST['page']?$_POST['page']:1;
        $model=Factory::getModel('news');
        $data=$model->get_news($db,$page);
        echo json_encode($data);
    }

    function detail(){
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('newsDetail.html');
    }

    function get_detail(){
        global $db;
        $nid=$_GET['id'];
        $model=Factory::getModel('news');
        $data=$model->get_detail($db,$nid);
        echo json_encode($data);
    }

}