<?php

return array(
    'smarty_template_dir'    =>   BASEPATH.'/Html/',                   //设置模板目录
    'smarty_compile_dir'     =>   BASEPATH.'/Common/templates_c/',     //设置编译目录
    'smarty_config_dir'      =>   BASEPATH.'/Common/Smarty_Configs/',
    'smarty_cache_dir'       =>   BASEPATH.'/Common/Cache/',           //缓存文件夹
    'smarty_caching'         =>   false,                               //是否使用缓存
    'smarty_delimiter'       =>   explode('|','{{|}}'), //设置左右边界符
    //如果是{}，那在html里写js代码会出错！
);
