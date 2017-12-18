<?php

namespace App\Model;
use PDO;

class user{

    function login($db,$info){  //登陆
        $result=[];
        $username=$info['username'];
        $password=$info['password'];
        if ($info['type']=='guest'){
            $type=0;
        }else{
            $type=1;
            $password=md5($password);
        }
        $query="select * from userinfo where username='$username' and usertype=$type";
        $res=$db->query($query);
        if ($res->rowCount()){
            $info=$res->fetch(PDO::FETCH_ASSOC);
            if ($password==$info['password']){
                $_SESSION['uid']=$info['uid'];
                $_SESSION['username']=$info['username'];
                $_SESSION['userType']=$info['userType'];
                $result['status']=1;
                if ($type){
                    $result['msg']='/super/admin_user';
                }else{
                    $result['msg']='back';
                }
                return $result;
            }else{
                $result['status']=0;
                $result['msg']='密码错误！';
                return $result;
            }
        }else{
            $result['status']=0;
            $result['msg']='用户不存在！';
            return $result;
        }
    }

    //========================================================

    function get_room($db){ //获取房间列表
        $query='select * from userinfo where userType=0';
        $res=$db->query($query);
        $data=$res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function add_room($db,$username,$password){  //新增房间
        $query='select * from userinfo where username=\''.$username.'\'';
        $res=$db->query($query);
        $row=$res->fetchAll(PDO::FETCH_ASSOC);
        if ($row){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"房间已存在！\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }else{
            $query='insert into userinfo (username,password,userType) VALUES (:username,:password,:userType)';
            $stmt=$db->prepare($query);
            $data=[
                ':username'=>$username,
                ':password'=>$password,
                ':userType'=>0
            ];
            $stmt->execute($data);
            $rows=$stmt->rowCount();
            if ($rows){
                $result['status']=1;
                $result['msg']='/super/admin_user';
                return $result;
            }else{
                $result['status']=0;
                $result['msg']='提交失败，请稍后重试！';
                return $result;
            }
        }
    }

    function edit_room($db,$uid,$password){ //编辑房间
        $query='update userinfo set password=:password where uid=:uid';
        $stmt=$db->prepare($query);
        $stmt->execute(array(':uid'=>$uid,':password'=>$password));
        $rows=$stmt->rowCount();
        if ($rows===false){
            $result['status']=0;
            $result['msg']='提交失败，请稍后重试！';
            return $result;
        }else{
            $result['status']=1;
            $result['msg']='/super/admin_user';
            return $result;
        }
    }

    function delete_room($db,$id){
        $query='delete from userinfo where uid=:uid';
        $stmt=$db->prepare($query);
        $stmt->execute(array(':uid'=>$id));
        $rows=$stmt->rowCount();
        if ($rows===false){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交失败，请稍后重试！\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }else{
            echo "<script language=\"JavaScript\">\r\n";
            echo "window.location.replace(\"/super/admin_user\");\r\n";
            echo "console.log('a');\r\n";
            echo "</script>";
        }
    }

    function edit_admin($db,$password){
        $query='update userinfo set password=:password where username=\'admin\'';
        $stmt=$db->prepare($query);
        $stmt->execute(array(':password'=>md5($password)));
        $rows=$stmt->rowCount();
        if ($rows===false){
            $result['status']=0;
            $result['msg']='提交失败，请稍后重试！';
            return $result;
//            echo "<script language=\"JavaScript\">\r\n";
//            echo "alert(\"提交失败，请稍后重试！\");\r\n";
//            echo "history.go(-1);\r\n";
//            echo "</script>";
        }else{
            $result['status']=1;
            $result['msg']='/super/admin_user';
            return $result;
//            echo "<script language=\"JavaScript\">\r\n";
//            echo "window.location.replace(\"/super/admin_user\");\r\n";
//            echo "console.log('a');\r\n";
//            echo "</script>";
        }
    }

}
