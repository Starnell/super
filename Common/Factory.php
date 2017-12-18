<?php

namespace Common;

class Factory{

    static function getModel($name){
        $key=$name.'Model';
        $model=\Common\Register::get($key);
        if (!$model){
            $class='\\App\\Model\\'.ucwords($name);
            $model=new $class;
            \Common\Register::set($key,$model);
        }
        return $model;
    }

}