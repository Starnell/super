<?php

namespace App\Model;
use PDO;
class News{

    function get_news($db,$page){ //获取资讯列表
        $start=($page-1)*6;
        $query='select nid,title,abstract,imgSrc from movienews order by pub_time limit '.$start.',6';
        $res=$db->query($query);
        $results=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as &$k){
            $k['url']='/super/news/detail/id/'.$k['nid'];
        }
        unset($k);
        $data['results']=$results;
        $count_res=$db->query('select count(*) as count from movienews');
        $count=$count_res->fetch(PDO::FETCH_ASSOC);
        $count=$count['count'];
//        $data['page']['current']=$page;
//        $data['page']['last']=ceil($count/6);
        $data['totalSize']=$count;
        return $data;
    }

    function get_detail($db,$nid){ //获取具体资讯信息
        $query='select * from movienews where nid='.$nid;
        $res=$db->query($query);
        $data=$res->fetch(PDO::FETCH_ASSOC);
        $data['pub_time']=date('Y-m-d',$data['pub_time']);
        return $data;
    }

    //===========================================================

    function get_admin_news($db,$page){//后台获取资讯列表
        $start=($page-1)*8;
        $query='select nid,title,pub_time,author,source,abstract from movienews
order by pub_time limit '.$start.',8';
        $res=$db->query($query);
        $results=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as &$k){
            $k['abstract']=mb_substr($k['abstract'],0,35);
            $k['pub_time']=date('Y-m-d',$k['pub_time']);
            $k['url']='/super/news/detail/id/'.$k['nid'];
        }
        unset($k);
        $data['results']=$results;
        $query='select count(*) as count from movienews';
        $res=$db->query($query);
        $count=$res->fetch(PDO::FETCH_ASSOC);
        $count=$count['count'];
//        $data['page']['current']=$page;
//        $data['page']['last']=ceil($count/10);
        $data['totalSize']=$count;
        return $data;
    }

    function add_news($db,$data){ //新增资讯
        $query='insert into movienews (title,pub_time,abstract,content,author,source,imgSrc) values (:title,:pub_time,:abstract,:content,:author,:source,:imgSrc)';
        $stmt=$db->prepare($query);
        $data1=[
            ':title'=>$data['title'],
            ':pub_time'=>$data['pub_time'],
            ':abstract'=>$data['abstract'],
            ':content'=>$data['content'],
            ':author'=>$data['author'],
            ':source'=>$data['source'],
            ':imgSrc'=>$data['imgSrc']
        ];
        $stmt->execute($data1);
        $rows=$stmt->rowCount();
        if ($rows){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交成功！\");\r\n";
            echo "window.location.replace(\"/super/admin_news\");\r\n";
            echo "console.log('a');\r\n";
            echo "</script>";
        }else{
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交失败，请稍后重试！\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }
    }

    function del_news($db,$nid){ //删除资讯
        $query='delete from movienews where nid=:nid';
        $stmt=$db->prepare($query);
        $stmt->execute(array(':nid'=>$nid));
        $rows=$stmt->rowCount();
        if ($rows){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交成功！\");\r\n";
            echo "window.location.replace(\"/super/admin_news\");\r\n";
            echo "console.log('a');\r\n";
            echo "</script>";
        }else{
            //注意不存在时也删除失败
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交失败，请稍后重试！\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }
    }

}