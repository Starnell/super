<?php

namespace app\model;
use \common\Db;
use PDO;

class user{

    private $db;

    function __construct(){
        $this->db=Db::get();
    }

    function get_all(){
        $query='select * from userinfo';
        $res=$this->db->query($query);
        if ($res->rowCount()){
            $info=$res->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }

}
