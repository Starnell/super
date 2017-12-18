<?php
namespace App\Model;
use PDO;
class Movie{

    function get_movie($db){ //获取电影列表
        $type=$_POST['type']?$_POST['type']:'all';
        $page=$_POST['page']?$_POST['page']:1;
        $start=($page-1)*8;   //每页8条
        if ($type=='all'){
            $query="select mid,movieName,synopsis,imgSrc from movieinfo order by releaseDate limit $start,8";
            $count_res=$db->query('select count(*) as count from movieinfo');
            $count=$count_res->fetch(PDO::FETCH_ASSOC);
            $count=$count['count'];
        }else{
            $query="select mid,movieName,synopsis,imgSrc from movieinfo where movieType like '%$type%' order by releaseDate limit $start,8";
            $count_res=$db->query('select count(*) as count from movieinfo where movieType like \'%'.$type.'%\'');
            $count=$count_res->fetch(PDO::FETCH_ASSOC);
            $count=$count['count'];
        }
        $res=$db->query($query);
        $movies=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($movies as &$k){
            $k['url']='/super/movie/detail/id/'.$k['mid'];
        }
        unset($k);
        $data['results']=$movies;
//        $data['page']['last']=ceil($count/8);
//        $data['page']['current']=$page;
        $data['totalSize']=$count;
        return $data;
    }

    function get_detail($db){  //获取电影具体信息
        $mid=$_GET['id'];
        $query="select * from movieinfo where mid=$mid";
        $res=$db->query($query);
        $data=$res->fetch(PDO::FETCH_ASSOC);
        $data['id']=$data['mid'];
        unset($data['mid']);
        return $data;
    }

    function search($db,$wd,$page){  //搜索信息
//        $start=($page-1)*8;
//        $query="select mid,movieName,synopsis,imgSrc from movieinfo where movieName like '%$wd%' limit $start,8";
        $query="select mid,movieName,synopsis,imgSrc from movieinfo where movieName like '%$wd%'";
        $res=$db->query($query);
        $movies=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($movies as &$k){
            $k['url']='/super/movie/detail/id/'.$k['mid'];
        }
        unset($k);
        $data['results']=$movies;
        $count_res=$db->query('select count(*) as count from movieinfo where movieName like \'%'.$wd.'%\'');
        $count=$count_res->fetch(PDO::FETCH_ASSOC);
        $count=$count['count'];
//        $data['page']['last']=ceil(intval($count)/8);
//        $data['page']['current']=$page;
        $data['totalSize']=$count;
        return $data;
    }

    function grade($db,$data){  //打分
        $query='insert into moviegrade (mid,grade) values (:mid,:grade)';
        $stmt=$db->prepare($query);
        $info=[
            ':mid'=>$data['mid'],
            ':grade'=>$data['grade']
        ];
        $stmt->execute($info);
        $rows=$stmt->rowCount();
        if ($rows){
            //更新movieinfo
            $mid=$data['mid'];
            $query1='select grade from moviegrade where mid='.$mid;
            $res=$db->query($query1);
            $res1=$res->fetchAll(PDO::FETCH_ASSOC);
            $sum=0;
            foreach ($res1 as $k){
                $sum+=$k['grade'];
            }
            $avg=number_format($sum/count($res1),1);
            $query="update movieinfo set average=:average where mid=:mid";
            $stmt=$db->prepare($query);
            $stmt->execute(array(':average'=>$avg,':mid'=>$mid));
            $rows=$stmt->rowCount();
            if ($rows===false){
                return 0;
            }else{
                return 1;
            }
        }else{
            return 0;
        }
    }

    //==============================================================================

    function get_admin_movies($db,$page){ //后台获取电影列表
        $start=($page-1)*8;
        $query='select mid,movieName,releaseDate,runtime,average from movieinfo
order by releaseDate limit '.$start.',8';
        $res=$db->query($query);
        $results=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as &$k){
            $k['url']='/super/movie/detail/id/'.$k['mid'];
        }
        unset($k);
        $data['results']=$results;
        $query='select count(*) as count from movieinfo';
        $res=$db->query($query);
        $count=$res->fetch(PDO::FETCH_ASSOC);
        $count=$count['count'];
//        $data['page']['current']=$page;
//        $data['page']['last']=ceil($count/10);
        $data['totalSize']=$count;
        return $data;
    }

    function add_movie($db,$data){  //后台添加电影
        $query='insert into movieinfo (movieName,synopsis,releaseDate,runtime,area,director,screenwriter,performer,imgSrc) 
values (:movieName,:synopsis,:releaseDate,:runtime,:area,:director,:screenwriter,:performer,:imgSrc)';
        $stmt=$db->prepare($query);
        $data1=[
            ':movieName'=>$data['movieName'],
            ':synopsis'=>$data['synopsis'],
            ':releaseDate'=>$data['releaseDate'],
            ':runtime'=>$data['runtime'],
            ':area'=>$data['area'],
            ':director'=>$data['director'],
            ':screenwriter'=>$data['screenwriter'],
            ':performer'=>$data['performer'],
            ':imgSrc'=>$data['imgSrc']
        ];
        $stmt->execute($data1);
        $rows=$stmt->rowCount();
        if ($rows){
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交成功！\");\r\n";
            echo "window.location.replace(\"/super/admin_movie\");\r\n";
            echo "console.log('a');\r\n";
            echo "</script>";
        }else{
            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"提交失败，请稍后重试！\");\r\n";
            echo "history.go(-1);\r\n";
            echo "</script>";
        }
    }

    function del_movie($db,$mid){  //后台删除电影
        $query='delete from movieinfo where mid=:mid';
        $stmt=$db->prepare($query);
        $stmt->execute(array(':mid'=>$mid));
        $rows=$stmt->rowCount();
        if ($rows){
            echo "<script language=\"JavaScript\">\r\n";
            echo "window.location.replace(\"/super/admin_movie\");\r\n";
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