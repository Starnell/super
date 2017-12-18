<?php

namespace Common;
class Loader{

    static function autoload($class){
        require_once BASEPATH.'/'.str_replace('\\','/',$class).'.php';
    }

}