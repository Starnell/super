<?php

namespace App;
use \Common\Factory;
class Admin_user extends Common1 {

    function index(){
        global $smarty;
        $username=$_SESSION['username'];
        $smarty->assign('username',$username);
        $smarty->display('admin_users.html');
    }

    function get_rooms(){
        global $db;
        $model=Factory::getModel('user');
        $data=$model->get_room($db);
        echo json_encode($data);
    }

    function add(){
        if ($_POST){
            $username=$_POST['username'];
            $password=$_POST['password'];
            global $db;
            $model=Factory::getModel('user');
            $data=$model->add_room($db,$username,$password);
            echo json_encode($data);
        }else{
            global $smarty;
            $username=$_SESSION['username'];
            $smarty->assign('username',$username);
            $smarty->display('admin_add_user.html');
        }
    }

    function edit(){
        if ($_POST){
            $uid=$_GET['id'];
            $password=$_POST['password'];
            global $db;
            $model=Factory::getModel('user');
            $data=$model->edit_room($db,$uid,$password);
            echo json_encode($data);
        }else{
            global $smarty;
            $username=$_SESSION['username'];
            $smarty->assign('username',$username);
            $smarty->display('admin_edit_user.html');
        }
    }

    function delete(){
        if ($_GET['id']){
            global $db;
            $model=Factory::getModel('user');
            $model->delete_room($db,$_GET['id']);
        }
    }

    function edit_admin(){
        if ($_POST){
            $password=$_POST['password'];
            global $db;
            $model=Factory::getModel('user');
            $data=$model->edit_admin($db,$password);
            echo json_encode($data);
        }else{
            global $smarty;
            $username=$_SESSION['username'];
            $smarty->assign('username',$username);
            $smarty->display('admin_edit.html');
        }
    }

}