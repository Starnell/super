<?php
namespace common\classes;
class Config implements \ArrayAccess{
    protected $path;
    protected $configs=array();

    function __construct($path){
        $this->path=$path;
    }

    function offsetGet($key){
        if (empty($this->configs[$key])){
            $file_path=$this->path.'/'.$key.'.php';
            $config=require_once $file_path;
            $this->configs[$key]=$config;
        }
        return $this->configs[$key];
    }

    function offsetSet($key, $value){
        throw new \Exception('Cannot write config file.');
    }

    function offsetExists($key){
        return isset($this->configs[$key]);
    }

    function offsetUnset($key){
        unset($this->configs[$key]);
    }
}