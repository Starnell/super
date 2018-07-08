<?php

define('CONFIG_PATH',APPLICATION_PATH.'/configs');

include_once(APPLICATION_PATH.'/common/vendor/Smarty/Smarty.class.php');

//类的自动载入
include_once(APPLICATION_PATH . '/common/classes/Loader.php');
spl_autoload_register('\\common\\classes\\Loader::autoload');//自动载入类

$smarty=\common\classes\Register::get('smarty');
if (!$smarty){
    $smarty=new Smarty();
    \common\classes\Register::set('smarty',$smarty);
}
$objConfig=\common\classes\Register::get('objConfig');
if (!$objConfig){
    $objConfig=new \common\classes\Config(CONFIG_PATH);
    \common\classes\Register::set('objConfig',$objConfig);
}

?>