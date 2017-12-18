<?php
/*
 * 类的自动载入
 */
include_once(BASEPATH.'/Common/Smarty/Smarty.class.php');
include_once(BASEPATH.'/Common/Loader.php');
spl_autoload_register('\\Common\\Loader::autoload');//自动载入类

/*
 * 加载配置项
 */
$config_path=BASEPATH.'/Configs';
$config=new \Common\Config($config_path);
$configs=$config['config'];
/*
 * 使用模板引擎
 */
if ($configs['if_use_smarty']){
    $config_smarty=$config['smarty'];
    $smarty = new Smarty();
    $smarty->config_dir      =  $config_smarty['smarty_config_dir'];//目录变量
    $smarty->caching         =  $config_smarty['smarty_caching']; //是否使用缓存，项目在调试期间，不建议启用缓存
    $smarty->template_dir    =  $config_smarty['smarty_template_dir']; //设置模板日录
    $smarty->compile_dir     =  $config_smarty['smarty_compile_dir']; //设置编译日录
    $smarty->cache_dir       =  $config_smarty['smarty_cache_dir']; //缓存文件夹
    $smarty->left_delimiter  =  $config_smarty['smarty_delimiter'][0];
    $smarty->right_delimiter =  $config_smarty['smarty_delimiter'][1];
}


/*
 * 连接数据库
 * 也可设置同时连接两种数据库
 */
if ($configs['db_name']){
   $obj=new \Common\PDOdb($configs);
   $db=$obj->connect();
}


?>