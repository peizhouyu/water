<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/13 0013
 * Time: 10:02
 */

namespace Home\Controller;
use Think\Controller;
class NewController extends Controller{

    public function newsList(){
        if(empty(session('news_type'))) {
            session('news_type','gonggao');
            $newsindexmodel = M('news_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('news_gonggao');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();
            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);
            $this->display('list');
        }else{
//            session('news_type',null);
//            $type = I('get.type');
//            session('news_type',$type);

            if(empty(I('get.type'))){
                $type = session('news_type');
            }else{
                $type = I('get.type');
            }

            switch($type){
                case gonggao;
                    session('news_type','gonggao');
                   $newModel = M('news_gonggao');
                    break;
                case zhannei;
                    session('news_type','zhannei');
                    $newModel = M('news_zhannei');
                    break;
                case kejidongtai;
                    session('news_type','kejidongtai');
                   $newModel = M('news_kejidongtai');
                    break;
                case imgnew;
                    session('news_type','imgnew');
                   $newModel = M('news_pic');
                    break;
                case videonew;
                    session('news_type','videonew');
                   $newModel = M('news_video');
                    break;
                }

            $newInfo = $newModel->order('id desc')->select();
            $newsCount = $newModel->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);

            $newsindexmodel = M('news_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function newsAddSelect(){
        if (empty(I('post.type'))) {
            $newsindexmodel = M('news_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index',$newsindex);
            $this->display(add_select);
        }else{
            $type = I('post.type');
            session('news_type',$type);

            $url = "Public/upload/imgs/".$type."/" . $_FILES["img"]["name"];
            $pei =LOCALHOST."Public/upload/imgs/".$type."/".$_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"],"$url");

            $videourl = "Public/upload/imgs/".$type."/" . $_FILES["video"]["name"];
            $video =LOCALHOST."Public/upload/imgs/".$type."/".$_FILES["video"]["name"];
            move_uploaded_file($_FILES["video"]["tmp_name"],"$url");

            $data['title'] = I('post.title');
            $data['source'] = I('post.source');
            $data['author'] = I('post.author');
            $data['img_url'] = I('post.img_url');

            $data['time'] = I('post.time');
            $data['info'] = I('post.info');
            $data['content'] = I('post.content');

            $data['img_url'] = $pei;
            $data['video_url'] = $video;
            switch($type){
                case gonggao;
                    session('ctat_type','gonggao');
                    $databasename = "news_gonggao";
                    break;
                case zhannei;
                    session('ctat_type','zhannei');
                    $databasename = "news_zhannei";
                    break;
                case kejidongtai;
                    session('ctat_type','kejidongtai');
                    $databasename = "news_kejidongtai";
                    break;
                case imgnew;
                    session('ctat_type','imgnew');
                    $databasename = "news_pic";
                    break;
                case videonew;
                    session('ctat_type','videonew');
                    $databasename = "news_video";
                    break;

            }


            if (add_info($databasename,$data)==true) {
                $this->success('内容发布成功','newsList');
            }else{
                $this->error('内容发布失败，请重试');
            }
        }
    }






    public function newsChange(){
        $type = session('news_type');
        $id = I('get.id');
        //var_dump($id);
        if(empty(I('post.title'))){
            switch($type){
                case gonggao;
                    $newModel = M('news_gonggao');
                    $databasename = "news_gonggao";
                    break;
                case zhannei;
                    $newModel = M('news_zhannei');
                    $databasename = "news_zhannei";
                    break;
                case kejidongtai;
                    $newModel = M('news_kejidongtai');
                    $databasename = "news_kejidongtai";
                    break;
                case imgnew;
                    $newModel = M('news_pic');
                    $databasename = "news_pic";
                    break;
                case videonew;
                    $newModel = M('news_video');
                    $databasename = "news_video";
                    break;
            }

            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list',$info);
            $this->display(change);
        }else{
            if(!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/imgs/".$type."/" . $type . "/" . $_FILES["img"]["name"];
                $pei = LOCALHOST."Public/upload/imgs/".$type."/" . $type . "/" . $_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "$url");
                $data['img_url'] = $pei;
            }
            if(!empty($_FILES["video"]["name"])) {
                $videourl = "Public/upload/imgs/".$type."/" . $_FILES["video"]["name"];
                $video =LOCALHOST."Public/upload/imgs/".$type."/".$_FILES["video"]["name"];
                move_uploaded_file($_FILES["video"]["tmp_name"],"$url");
                $data['video_url'] = $video;
            }

            if(!empty(I('post.title'))){
                $data['title'] = I('post.title');
            }
            if(!empty(I('post.source'))){
                $data['source'] = I('post.source');
            }
            if(!empty(I('post.source'))){
                $data['source'] = I('post.source');
            }
            if(!empty(I('post.author'))){
                $data['author'] = I('post.author');
            }
            if(!empty(I('post.img_url'))){
                $data['img_url'] = I('post.img_url');
            }
            if(!empty(I('post.time'))){
                $data['time'] = I('post.time');
            }
            if(!empty(I('post.info'))){
                $data['info'] = I('post.info');
            }
            if(!empty(I('post.content'))){
                $data['content'] = I('post.content');
            }
            $id = I('post.id');
            switch($type){
                case gonggao;
                    $newModel = M('news_gonggao');
                    $databasename = "news_gonggao";
                    break;
                case zhannei;
                    $newModel = M('news_zhannei');
                    $databasename = "news_zhannei";
                    break;
                case kejidongtai;
                    $newModel = M('news_kejidongtai');
                    $databasename = "news_kejidongtai";
                    break;
                case imgnew;
                    $newModel = M('news_pic');
                    $databasename = "news_pic";
                    break;
                case videonew;
                    $newModel = M('news_video');
                    $databasename = "news_video";
                    break;
            }

//            var_dump($databasename);
//            var_dump($id);
//            var_dump($data);

            if (change_info($databasename,$id,$data)==true) {
                $this->success('内容修改成功','newsList');
            }else{
                $this->error('内容修改失败，请重试');
            }
        }

    }

    public function newsDel(){
        $type = session('news_type');

        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        switch($type){
            case gonggao;
                $databasename = "news_gonggao";
                break;
            case zhannei;
                $databasename = "news_zhannei";
                break;
            case kejidongtai;
                $databasename = "news_kejidongtai";
                break;
            case imgnew;
                $databasename = "news_pic";
                break;
            case videonew;
                $databasename = "news_video";
                break;
             }
        if (del_info($databasename,$id)==true) {
            $this->assign("jumpUrl",U('New/newsList'))->success('已删除');
        }else{
            $this->error('删除失败，请重试');
        }
    }


}
