<?php

namespace App;
use \Common\Factory;
use \Common\Functions;

class Movie{

    function index(){  //显示电影列表
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('movies.html');
    }

    function get_movies(){  //获取电影列表数据
        global $db;
        $model=Factory::getModel('movie');
        $movies=$model->get_movie($db);
        echo json_encode($movies);
    }

    function detail(){  //显示电影具体页面
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('movieDetail.html');
    }

    function get_detail(){  //获取电影具体页面
        global $db;
        $model=Factory::getModel('movie');
        $data=$model->get_detail($db);
        echo json_encode($data);
    }

    function grade(){  //打星/评分
        if ($_POST['id']){
            global $db;
            $data['mid']=$_POST['id'];
            $data['grade']=$_POST['grade'];
            $model=Factory::getModel('movie');
            $data['result']=$model->grade($db,$data);
            echo json_encode($data);
        }
    }

    function play(){  //点播
        $mid=$_GET['id'];
        $obj=new Functions();
        $isLogin=$obj->isLogin2();
        if ($isLogin==0){
            $res=$obj->showError('请先以用户身份登陆！','/super/movie/detail/id/'.$mid);
            echo $res;
        }else{
            $res=$obj->showError('暂无！','/super/movie/detail/id/'.$mid);
            echo $res;
        }
    }

    function search(){
        global $smarty;
        $id=$_SESSION['uid'];
        $smarty->assign('id',$id);
        $smarty->display('search.html');
    }

    function results(){//搜索功能
        global $db;
        $wd=$_GET['wd'];
        $wd=urldecode($wd);
        $page=$_POST['page'];
//        $page=1;
        if ($wd){
            $model=Factory::getModel('movie');
            $data=$model->search($db,$wd,$page);
            echo json_encode($data);
        }
    }

}