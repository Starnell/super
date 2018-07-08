<?php
namespace common\classes;
class Loader{
    static function autoload($class){
        require_once APPLICATION_PATH.'/'.str_replace('\\','/',$class).'.php';
    }
}