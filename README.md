### 一、目录结构
```php
$str=<<<EOT
app             项目逻辑目录
└ controller    控制器目录
└ model         模型目录
└ view          视图目录
common          公共类目录
 └ classes      框架类目录
 └ vendor       第三方库目录
	     └ Smarty   Smarty库
configs         配置文件目录
public          资源文件目录
 └ uploads      上传文件目录
global.php      用来加载各种文件
index.php       入口文件
EOT;
```

### 二、使用  
#### 1、数据库配置  
路径：/configs/db.php
```php
return array(
    'db_type'      =>   'mysql',
    'db_host'      =>   '127.0.0.1',  //数据库主机
    'db_name'      =>   'super',      //数据库名称
    'db_user'      =>   'root',       //登陆用户名
    'db_pwd'       =>   '',           //对应密码
    //'db_charset' =>   'utf8',
    //'db_port'    =>   27017
);
```
#### 2、Smarty模板引擎配置  
路径：/configs/smarty.php
```php
return array(
    'smarty_template_dir' => APPLICATION_PATH.'/app/view',                     //设置模板目录
    'smarty_compile_dir'  => APPLICATION_PATH.'/Common/vendor/templates_c/',   //设置编译目录
    'smarty_config_dir'   => APPLICATION_PATH.'/Common/vendor/Smarty_Configs/',
    'smarty_cache_dir'    => APPLICATION_PATH.'/Common/vendor/cache/',         //缓存文件夹
    'smarty_caching'      => false,                                            //是否使用缓存，调试期间建议关闭
    'smarty_delimiter'    => explode('|','{{|}}'),                             //设置左右边界符
);

```
#### 3、一个简单的MVC例子
```php
$str=<<<EOT
app           
 └ controller 
    └ Index.php （文件名首字母大写）
 └ model
    └ User.php  （文件名首字母大写）
 └ view          （目录结构可自定义）
    └ Index
        └ index.html
EOT;
```
控制器：
```php
namespace app\controller;
use \common\classes\Template;
use \app\model\User as UserModel;

class Index{

    private $smarty;

    public function __construct(){
        $this->smarty=Template::get();
    }

    function index(){
        $this->smarty->assign('data','Hello, super!');
        $this->smarty->display('Index/index.html');
    }

    function show(){
        $userModel=new UserModel();
        $data=$userModel->get_all();
        var_dump($data);
    }

}
```
模型：
```php
namespace app\model;
use \common\Db;
use PDO;

class user{

    private $db;

    function __construct(){
        $this->db=Db::get();
    }

    function get_all(){
        $query='select * from userinfo';
        $res=$this->db->query($query);
        if ($res->rowCount()){
            $info=$res->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }

}
```
视图：
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
{{$data}}
</body>
</html>
```
#### 4、url访问  
<table border="1">
    <tbody>
        <tr align="left">
            <th>URL</th>
            <th>Controller</th>
            <th>Method</th>
            <th>Parameters</th>
        </tr>
        <tr>
            <td>/app</td>
            <td>index</td>
            <td>index</td>
            <td></td>
        </tr>
        <tr>
            <td>/app/movie</td>
            <td>movie</td>
            <td>index</td>
            <td></td>
         </tr>
        <tr>
            <td>/app/movie/show</td>
            <td>movie</td>
            <td>show</td>
            <td></td>
         </tr>
        <tr>
            <td>/app/movie/show/type/all/page/1</td>
            <td>movie</td>
            <td>show</td>
            <td>{"type":"all","page":1}</td>
         </tr>
        <tr>
            <td>/app/movie/show?type=all&page=1</td>
            <td>movie</td>
            <td>show</td>
            <td>{"type":"all","page":1}</td>
         </tr>
        <tr>
            <td>/app/movie/type/all/page/1</td>
            <td>movie</td>
            <td>index</td>
            <td>{"type":"all","page":1}</td>
         </tr>
        <tr>
            <td>/app/movie?type=all&page=1</td>
            <td>movie</td>
            <td>index</td>
            <td>{"type":"all","page":1}</td>
         </tr>
    </tbody>
</table>  

### 三、注意  
1) 路径严格按照大小写区分
2) 模型、控制器、公共类文件名首字母必须大写

2017-12-15 From zhengxinxin  
2018-01-07 From zhengxinxin  
2018-07-08 From zhengxinxin  
2018-09-12 From zhengxinxin