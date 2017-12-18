<?php
namespace Common;
class Functions{

    function isLogin1(){ //管理员登陆
        if (isset($_SESSION['userType'])&&$_SESSION['userType']){
            return 1;
        }else{
            return 0;
        }
    }

    function isLogin2(){ //房间登陆
        if (isset($_SESSION['userType'])&&$_SESSION['userType']==0){
            return 1;
        }else{
            return 0;
        }
    }

    function showError($msg,$url){
        $str=<<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<script language="JavaScript">
    alert('$msg');
    location.replace('$url');
</script>
</html>
EOT;
        //$str='<script language="JavaScript">alert('.$msg.');location.replace('.$url.');</script>';
        return $str;
    }

}