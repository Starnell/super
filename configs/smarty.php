<?php

return array(
    'smarty_template_dir' => APPLICATION_PATH.'/app/view',                     //设置模板目录
    'smarty_compile_dir'  => APPLICATION_PATH.'/Common/vendor/templates_c/',   //设置编译目录
    'smarty_config_dir'   => APPLICATION_PATH.'/Common/vendor/Smarty_Configs/',
    'smarty_cache_dir'    => APPLICATION_PATH.'/Common/vendor/cache/',         //缓存文件夹
    'smarty_caching'      => false,                                            //是否使用缓存，调试期间建议关闭
    'smarty_delimiter'    => explode('|','{{|}}'),             //设置左右边界符
);