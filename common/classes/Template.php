<?php
namespace common\classes;

class Template{

    private static $smarty;

    private function __construct(){
        $objConfig=\common\classes\Register::get('objConfig');
        $config=$objConfig['smarty'];
        $smarty=\common\classes\Register::get('smarty');
        $smarty->config_dir      =  $config['smarty_config_dir'];
        $smarty->caching         =  $config['smarty_caching'];
        $smarty->template_dir    =  $config['smarty_template_dir'];
        $smarty->compile_dir     =  $config['smarty_compile_dir'];
        $smarty->cache_dir       =  $config['smarty_cache_dir'];
        $smarty->left_delimiter  =  $config['smarty_delimiter'][0];
        $smarty->right_delimiter =  $config['smarty_delimiter'][1];
        self::$smarty=$smarty;
    }

    public static function get(){
        $key='TemplateObj';
        $smarty=\common\classes\Register::get($key);
        if (!$smarty){
            new self();
            $smarty=self::$smarty;
            \common\classes\Register::set($key,$smarty);
        }
        return $smarty;
    }
}