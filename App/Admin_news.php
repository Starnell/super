<?php

namespace App;
use \Common\Factory;
use \Common\Upload;

class Admin_news extends Common1{

    function index(){
        global $smarty;
        $username=$_SESSION['username'];
        $smarty->assign('username',$username);
        $smarty->display('admin_news.html');
    }

    function get_news(){
        $page=$_GET['page']?$_GET['page']:1;
        global $db;
        $model=Factory::getModel('news');
        $data=$model->get_admin_news($db,$page);
        echo json_encode($data);
    }

    function add(){
        if ($_POST){
            global $db;
            $data=array();
            $data['imgSrc']='';
            $filename='imgSrc';
            $uploadPath=BASEPATH.'/Style/Uploads';
            $uploads=new Upload($filename,$uploadPath);
            $res=$uploads->uploadFile();
            if (isset($res['destination'])){
                $imgSrc='/super'.str_replace(BASEPATH,'',$res['destination']);
                $data['imgSrc']=$imgSrc;
            }
            $data['title']=$_POST['title'];
            $data['pub_time']=time();
            $data['abstract']=$_POST['abstract'];
            $data['author']=$_POST['author'];
            $data['source']=$_POST['source'];
            $data['content']=$_POST['content'];
            $model=Factory::getModel('news');
            $model->add_news($db,$data);
        }else{
            global $smarty;
            $username=$_SESSION['username'];
            $smarty->assign('username',$username);
            $smarty->display('admin_add_news.html');
        }
    }
    //修改ueditor上传图片路径！
    //Ueditor/php/config.json

    function del(){
        $nid=$_GET['id'];
        global $db;
        $model=Factory::getModel('news');
        $model->del_news($db,$nid);
    }

}