一、目录结构
```php
$str=<<<EOT

App              项目逻辑目录
 └ Model         模型目录
     └ User.php  模型文件|自定义
 └ Index.php     控制器文件|自定义
Common           公共模块目录
 └ Smarty        Smarty文件目录
 └ templates_c   模板编译目录|可配置
 下面是部分公共类或者公共文件
 └ captcha.php   生成验证码|文件
 └ Config.php    数组式访问接口|类
 └ Factory.php   工厂模式|类
 └ Register.php  注册模式|类
 └ Function.php  公共方法|类
 └ Loader.php    类的自动载入|类
 └ PDOdb.php     PDO连接数据库(使用单例模式)|类
 └ Upload.php    上传文件|类
Configs          配置文件目录
 └ config.php    配置数据库等|数组
 └ smarty.php    配置模板引擎|数组
 └ router.php    设置路由|文件
Html             视图文件目录
 └ index.php     视图文件|自定义          
Style            资源文件目录|自定义
 └ css           css文件目录
 └ fonts         fonts文件目录
 └ img           图片文件目录
 └ js            JavaScript文件目录
 └ Ueditor       Ueditor编辑器目录
 └ Uploads       上传文件目录
.htaccess        支持伪静态           
global.php       加载各种文件
index.php        入口文件

EOT;
```

二、配置
1、数据库配置 /Configs/config.php
```php
return array(
    'db_type'    =>   'mysql',
    'db_host'    =>   '127.0.0.1',  //数据库主机
    'db_name'    =>   'super',      //数据库名称
    'db_user'    =>   'root',       //登陆用户名
    'db_pwd'     =>   '',           //对应密码
    //'db_charset' =>   'utf8',
    //'db_port'    =>   27017
    'if_use_smarty'=>true,//开启模板引擎
);
```
2、Smarty模板引擎配置 /Configs/smarty.php
```php
return array(
    'smarty_template_dir'    =>   BASEPATH.'/Html/',                   //设置模板目录
    'smarty_compile_dir'     =>   BASEPATH.'/Common/templates_c/',     //设置编译目录
    'smarty_config_dir'      =>   BASEPATH.'/Common/Smarty_Configs/',
    'smarty_cache_dir'       =>   BASEPATH.'/Common/Cache/',           //缓存文件夹
    'smarty_caching'         =>   false,                               //是否使用缓存
    'smarty_delimiter'       =>   explode('|','{{|}}'), //设置左右边界符
    //如果是{}，那在html里写js代码会出错！
);
```
3、路由设置 /Configs/router.php

假设项目文件名为super
```php
$url='/super';
$arr=array(
    'Controller'=>'index',
    'Method'=>'index'
);
/*=====================*/
$url='/super/movie';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'index'
);
/*=====================*/
$url='/super/movie/show';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'show'
);
/*=====================*/
$url='/super/movie/show/type/all/page/1';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'show'
);
$_GET['type']='all';
$_GET['page']='1';
/*=====================*/
$url='/super/movie/show?type=all&page=1';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'show'
);
$_GET['type']='all';
$_GET['page']='1';
/*=====================*/
$url='/super/movie/type/all/page/1';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'index'
);
$_GET['type']='all';
$_GET['page']='1';
/*=====================*/
$url='/super/movie?type=all&page=1';
$arr=array(
    'Controller'=>'movie',
    'Method'=>'index'
);
$_GET['type']='all';
$_GET['page']='1'; 
```
4、Ueditor编辑图片上传目录设置  /Style/Ueditor/php/config.json

三、注意
1) 路径严格按照大小写区分
2) 模型、控制器、公共类文件名必须首字母大写
3) 管理员账号密码：admin 123  用户账号密码：room101 123

2017-12-15 From zhengxinxin