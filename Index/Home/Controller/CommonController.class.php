<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 12:29
 */
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
        //赞美量计数函数
    public function likeNum(){
        $aim = I('get.aim');
        $id = I('get.id');
        switch($aim){
            case gonggao;
                $dataModel = M('news_gonggao');
                break;
            case zhannei;
                $dataModel = M('news_zhannei');
                break;
            case kejidongtai;
                $dataModel = M('news_kejidongtai');
                break;
            case pic;
                $dataModel = M('news_pic');
                break;
            case video;
                $dataModel = M('news_video');
                break;
            //合作交流
            case exchange;
                $dataModel = M('exchange_content');
                break;
            //服务中心
            case service;
                $dataModel = M('service_content');
                break;
            //政策法规
            case policies;
                $dataModel = M('policies_content');
                break;
            //产品展示
            case productshow;
                $dataModel = M('productshow_content');
                break;
            //站内业务
            case websitebusiness;
                $dataModel = M('websitebusiness_content');
                break;
            //工作站概况
            case overview;
                $dataModel = M('overview_content');
                break;

        }
        $dataInfo = $dataModel->where($id)->find();
        $likenum = $dataInfo['likenum'];
        $likenum = $likenum + 1;
        $data['likenum'] = $likenum;
        $condition['id'] = $id;
        $dataModel->where($condition)->save($data);
        echo "<script>history.go(-1);</script>";
    }



}