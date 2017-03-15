<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/13 0013
 * Time: 8:31
 */

namespace Home\Controller;
use Think\Controller;
class BannerController extends Controller{

   public function bannerList(){
        $bannermodel = new \Home\Model\BannerModel();
        $banner = $bannermodel->order('number desc')->select();
        $bannerCount = $bannermodel->count();
        $this->assign('count',$bannerCount);
        $this->assign('list',$banner);
        $this->display('list');
    }

    public function bannerAdd(){
        if(empty(I('post.title'))){
            $this->display('add');
        }else{
            $url = "Public/upload/banner/" . $_FILES["img"]["name"];
            $admin_pei =LOCALHOST."Public/upload/banner/".$_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"],"$url");

            $data['title'] = I('post.title');
            $data['secondtitle'] = I('post.secondtitle');
            $data['img_url'] = $admin_pei;;

            $data['dump_url'] = I('post.jumpurl');
            $data['number'] = I('post.number');
//            $data['time'] =  date(‘y-m-d h:i:s’,time());

            $databasename = "banner";
            if (add_info($databasename,$data)==true) {
                $this->success('幻灯发布成功','bannerList');
            }else{
                $this->error('幻灯发布失败，请重试');
            }
        }
    }

    public function bannerChange(){
        $id = I('get.id');
        if (empty(I('post.title'))) {
            $condition['id'] = $id;
            $bannermodel = M('banner');
            $banner = $bannermodel->where($condition)->find();
            $this->assign('list',$banner);
            $this->display(change);
    }else{
            if(!empty($_FILES['img']['tmp_name'])) {
                $url = "Public/upload/banner/" . $_FILES["img"]["name"];
//                $admin_pei ="LOCALHOSTPublic/upload/banner/".$_FILES["img"]["name"];
                $index_pei = "LOCALHOSTPublic/upload/banner/".$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "$url");
                $data['img_url'] = $index_pei;
//                $data['backimg_url'] = $admin_pei;
            }

            $data['title'] = I('post.title');
            $data['socondtitle'] = I('post.secondtitle');

            $data['dump_url'] = I('post.dumpurl');
            $data['number'] = I('post.number');
            $data['time'] = I('post.time');

            $databasename = "banner";
            if (change_info($databasename,$id,$data)==true) {
                $this->assign("jumpUrl",U('Banner/bannerList'))->success('修改成功');
            }else{
                $this->error('修改失败，请重试');
            }
        }
    }

    public function bannerDel(){

        $id = I('get.id');
        $databasename = "banner";
        if (del_info($databasename,$id)==true) {
            $this->assign("jumpUrl",U('Banner/bannerList'))->success('已删除');
        }else{
            $this->error('删除失败，请重试');
        }
    }

    public function bannerCheck(){
        $id = I('get.id');
        $bannerModel = M('banner');
        $condition['id'] = $id;
        $bannerInfo = $bannerModel->where($condition)->find();
        $isdel = $bannerInfo["isdel"];
        if($isdel==0){
            $data['isdel'] = "1";
            $data['valid'] = "无效";
        }else{
            $data['isdel'] = "0";
            $data['valid'] = "有效";
        }
        $databasename = "banner";
        if (change_info($databasename,$id,$data)==true) {
            $this->assign("jumpUrl",U('Banner/bannerList'))->success('已设置');
        }else{
            $this->error('设置失败，请重试');
        }

    }
}

