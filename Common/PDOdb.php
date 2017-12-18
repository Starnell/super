<?php


namespace Common;
use PDO;

class PDOdb{
    private $dbtype;
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $charset;
    private $dbport;
    private static $conns=array();

    public function __construct($configs){
        $this->dbtype=$configs['db_type'];
        $this->dbhost=$configs['db_host'];
        $this->dbname=$configs['db_name'];
        $this->dbuser=$configs['db_user'];
        $this->dbpwd=$configs['db_pwd'];
        if (isset($configs['db_charset'])&&$configs['db_charset']){
            $this->charset=$configs['db_charset'];
        }else{
            $this->charset='utf8';
        }
        if (isset($configs['db_port'])&&$configs['db_port']){
            $this->dbport=$configs['db_port'];
        }else{
            $this->dbport=3306;
        }
    }

    private function conn(){
        try{
            $dsn=$this->dbtype.':dbname='.$this->dbname.';host='.$this->dbhost;
            $attr=[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_SILENT
            ];//ERRMODE_EXCEPTION
            $pdo=new PDO($dsn,$this->dbuser,$this->dbpwd,$attr);
            if ($this->dbtype=='mysql'){
                $pdo->query("SET NAMES '".$this->charset."'");
            }
            self::$conns[$this->dbname]=$pdo;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function connect(){
        if (isset(self::$conns[$this->dbname])){
            return self::$conns[$this->dbname];
        }else{
            $this->conn();
            return self::$conns[$this->dbname];
        }
    }

    public function close()
    {
        if (isset(self::$conns[$this->dbname])){
            unset(self::$conns[$this->dbname]);
        }
    }
}