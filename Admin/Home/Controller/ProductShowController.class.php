<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/20 0020
 * Time: 22:06
 */

namespace Home\Controller;
use Think\Controller;
class ProductShowController extends Controller{

    public function ProductShowList(){
        if(empty(session('product_type'))) {
            session('product_type','shuiligongcheng');
            $newsindexmodel = M('productshow_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('productshow_content');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();
            $page = getpage($newNoticeModel,5);
//            var_dump($page);
            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);
            $this->assign('page',$page);
            $this->display('list');
        }else{
//            session('product_type',null);
//            $type = I('get.type');
//            session('product_type',$type);

            if(empty(I('get.type'))){
                $type = session('product_type');
            }else{
                $type = I('get.type');
            }

            switch($type){
                case fangzaijianzai;
                    session('product_type','fangzaijianzai');
                    break;
                case nongtianshuili;
                    session('product_type','nongtianshuili');
                    break;
                case shuiligongcheng;
                    session('product_type','shuiligongcheng');
                    break;
                case anquanyinshui;
                    session('product_type','anquanyinshui');
                    break;
                case shuiziyuankaifa;
                    session('product_type','shuiziyuankaifa');
                    break;
                case shuishengtai;
                    session('product_type','shuishengtai');
                    break;
                case shuilixinxihua;
                    session('product_type','shuilixinxihua');
                    break;
                case shuiliguanli;
                    session('product_type','shuiliguanli');
                    break;

            }
            $newModel = M('productshow_content');
            $condition['type'] = $type;
            $newInfo = $newModel->where($condition)->order('id desc')->select();
            $newsCount = $newModel->where($condition)->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);


            $newsindexmodel = M('productshow_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function ProductShowAddSelect(){
        if (empty(I('post.type'))) {
            $newsindexmodel = M('productshow_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index',$newsindex);
            $this->display(add_select);
        }else{
            $type = I('post.type');
            session('product_type',$type);

            $url = "Public/upload/productshow/" . $_FILES["img"]["name"];
            $pei =LOCALHOST."Public/upload/productshow/".$_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"],"$url");

            $data['title'] = I('post.title');
            $data['source'] = I('post.source');
            $data['author'] = I('post.author');
            $data['company'] = I('post.company');
            $data['company_tel'] = I('post.company_tel');
            $data['location'] = I('post.company');
            $data['img_url'] = I('post.img_url');
            $data['time'] = I('post.time');
            $data['info'] = I('post.info');
            $data['content'] = I('post.content');

            $data['img_url'] = $pei;
            $data['himg_url'] = $index_pei;


            switch($type){
                case fangzaijianzai;
                    session('product_type','fangzaijianzai');
                    $data['type'] = "fangzaijianzai";
                    $data['type_value'] = "防灾减灾";
                    break;
                case nongtianshuili;
                    session('product_type','nongtianshuili');
                    $data['type'] = "nongtianshuili";
                    $data['type_value'] = "农田水利";
                    break;
                case shuiligongcheng;
                    session('product_type','shuiligongcheng');
                    $data['type'] = "shuiligongcheng";
                    $data['type_value'] = "水利工程";
                    break;
                case anquanyinshui;
                    session('product_type','anquanyinshui');
                    $data['type'] = "anquanyinshui";
                    $data['type_value'] = "农村安全饮水";
                    break;
                case shuiziyuankaifa;
                    session('product_type','shuiziyuankaifa');
                    $data['type'] = "shuiziyuankaifa";
                    $data['type_value'] = "水资源开发与节约保护";
                    break;
                case shuishengtai;
                    session('product_type','shuishengtai');
                    $data['type'] = "shuishengtai";
                    $data['type_value'] = "水生态与水环境";
                    break;
                case shuilixinxihua;
                    session('product_type','shuilixinxihua');
                    $data['type'] = "shuilixinxihua";
                    $data['type_value'] = "水利信息化";
                    break;
                case shuiliguanli;
                    session('product_type','shuiliguanli');
                    $data['type'] = "shuiliguanli";
                    $data['type_value'] = "水利管理及其他";
                    break;

            }

            $databasename = "productshow_content";

            if (add_info($databasename,$data)==true) {
                $this->success('内容发布成功','ProductShowList');
            }else{
                $this->error('内容发布失败，请重试');
            }
        }
    }






    public function ProductShowChange(){
        $type = session('product_type');
        $id = I('get.id');

        if(empty(I('post.title'))){

            $newModel = M('productshow_content');
            $databasename = "productshow_content";
            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list',$info);
            $this->display(change);
        }else{
            if(!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/productshow/" . $_FILES["img"]["name"];
                $pei =LOCALHOST."Public/upload/productshow/".$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"],"$url");
                $data['img_url'] = $pei;

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
            if(!empty(I('post.company'))){
                $data['company'] = I('post.company');
            }
            if(!empty(I('post.company_tel'))){
                $data['company_tel'] = I('post.company_tel');
            }
            if(!empty(I('post.company'))){
                $data['location'] = I('post.company');
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
            $databasename = "productshow_content";
            if (change_info($databasename,$id,$data)==true) {
                $this->success('内容修改成功','ProductShowList');
            }else{
                $this->error('内容修改失败，请重试');
            }
        }
    }

    public function ProductShowDel(){
        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        $databasename = "productshow_content";
        if (del_info($databasename,$id)==true) {
            $this->assign("jumpUrl",U('ProductShow/ProductShowList'))->success('已删除');
        }else{
            $this->error('删除失败，请重试');
        }
    }
}