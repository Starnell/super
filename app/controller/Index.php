<?php

namespace app\controller;
use \common\classes\Template;
use \app\model\User as UserModel;

class Index{

    private $smarty;

    public function __construct(){
        $this->smarty=Template::get();
    }

    function index(){
        $this->smarty->assign('data','Hello, super!');
        $this->smarty->display('Index/index.html');
    }

    function show(){
        $userModel=new UserModel();
        $data=$userModel->get_all();
        var_dump($data);
    }

}
