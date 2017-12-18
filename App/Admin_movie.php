<?php
namespace App;
use \Common\Factory;
use \Common\Upload;
class Admin_movie extends Common1 {

    function index(){
        global $smarty;
        $username=$_SESSION['username'];
        $smarty->assign('username',$username);
        $smarty->display('admin_movies.html');
    }

    function get_movies(){
        $page=$_GET['page']?$_GET['page']:1;
        global $db;
        $model=Factory::getModel('movie');
        $data=$model->get_admin_movies($db,$page);
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
            $data['movieName']=$_POST['movieName'];
            $data['synopsis']=$_POST['synopsis'];
            $data['releaseDate']=$_POST['releaseDate'];
            $data['runtime']=$_POST['runtime'];
            $data['area']=$_POST['area'];
            $data['director']=$_POST['director'];
            $data['screenwriter']=$_POST['screenwriter'];
            $data['performer']=$_POST['performer'];
            $model=Factory::getModel('movie');
            $model->add_movie($db,$data);
        }else{
            global $smarty;
            $username=$_SESSION['username'];
            $smarty->assign('username',$username);
            $smarty->display('admin_add_movie.html');
        }
    }

    function del(){
        $mid=$_GET['id'];
        global $db;
        $model=Factory::getModel('movie');
        $model->del_movie($db,$mid);
    }

}