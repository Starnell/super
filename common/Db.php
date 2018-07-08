<?php

namespace common;
use PDO;

class Db{
    private $dbtype;
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $charset='utf8';
    private $dbport=3306;
    private static $conn=null;

    private function __construct(){
        $objConfig=\common\classes\Register::get('objConfig');
        $config=$objConfig['db'];
        $this->dbtype=$config['db_type'];
        $this->dbhost=$config['db_host'];
        $this->dbname=$config['db_name'];
        $this->dbuser=$config['db_user'];
        $this->dbpwd=$config['db_pwd'];
        if (isset($config['db_charset'])&&$config['db_charset']){
            $this->charset=$config['db_charset'];
        }
        if (isset($config['db_port'])&&$config['db_port']){
            $this->dbport=$config['db_port'];
        }
        $this->conn();
    }

    private function conn(){
        try{
            $dsn=$this->dbtype.':dbname='.$this->dbname.';host='.$this->dbhost;
            $attr=[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ];
			/*
			PDO::ERRMODE_SLIENT（默认模式） 只简单地设置错误码
			PDO::ERRMODE_WARING 除设置错误码之外，PDO 还将发出一条传统的 E_WARNING 信息。
			PDO::ERRMODE_EXCEPTION  内部抛出异常，中断页面
			*/
            $pdo=new PDO($dsn,$this->dbuser,$this->dbpwd,$attr);
            if ($this->dbtype=='mysql'){
                $pdo->query("SET NAMES '".$this->charset."'");
            }
            self::$conn=$pdo;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function get(){
        if (isset(self::$conn)){
            return self::$conn;
        }else{
            new self();
            return self::$conn;
        }
    }

    public function close(){
        if (isset(self::$conn)){
            self::$conn=null;
        }
    }
}