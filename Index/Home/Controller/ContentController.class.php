<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/26 0026
 * Time: 23:42
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;

class ContentController extends Controller {
    /**
     *
     */
    public function showPage(){
        $aim = I('get.aim');
        $id = I('get.id');
//        var_dump($aim);
//        var_dump($id);
        switch($aim){
            //新闻中心
            case gonggao;
                $dataModel = M('news_gonggao');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                $data['name1'] = "新闻中心";
                $data['name2'] = "公示公告";
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(news_gonggao,$id);
                $this->display('pages');
                break;
            case zhannei;
                $dataModel = M('news_zhannei');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                $data['name1'] = "新闻中心";
                $data['name2'] = "站内动态";
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(news_zhannei,$id);
                $this->display('pages');
                break;
            case kejidongtai;
                $dataModel = M('news_kejidongtai');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                $data['name1'] = "新闻中心";
                $data['name2'] = "水利科技动态";
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(news_kejidongtai,$id);
                $this->display('pages');
                break;
            case pic;
                $dataModel = M('news_pic');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                $data['name1'] = "新闻中心";
                $data['name2'] = "图片新闻";
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(news_pic,$id);
                $this->display('pages');
                break;
            case video;
                $dataModel = M('news_video');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                $data['name1'] = "新闻中心";
                $data['name2'] = "视频新闻";
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(news_video,$id);
                $this->display('video');
                break;
            //合作交流
            case exchange;
                $dataModel = M('exchange_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "合作交流";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(exchange_content,$id);
                $this->display('pages');
                break;
            //服务中心
            case service;
                $dataModel = M('service_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);

                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "服务中心";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(service_content,$id);
                $this->display('pages');
                break;
            //政策法规
            case policies;
                $dataModel = M('policies_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);

                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "政策法规";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(policies_content,$id);
                $this->display('pages');
                break;
            //产品展示
            case productshow;
                $dataModel = M('productshow_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "产品展示";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(productshow_content,$id);
                $this->display('pages');
                break;
            //站内业务
            case websitebusiness;
                $dataModel = M('websitebusiness_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "站内业务";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(websitebusiness_content,$id);
                $this->display('pages');
                break;
            //工作站概况
            case overview;
                $dataModel = M('overview_content');
                $condition['id'] = $id;
                $dataInfo = $dataModel->where($condition)->find();
                $this->assign('list',$dataInfo);
                //生成二级路径
                $selectInfo = $dataModel->where($condition)->find();
//                var_dump($selectInfo['type_value']);
                $data['name1'] = "工作站概况";
                $data['name2'] = $selectInfo['type_value'];
                $this->assign('data', $data);
                //生成最热新闻
                $hotInfo = $dataModel->order('readnum desc')->select();
                $this->assign('hot',$hotInfo);
                //实现相关阅读
                $relatedInfo = $dataModel->select();
                $this->assign('related',$relatedInfo);
                //实现浏览量统计
                readCount(overview_content,$id);
                $this->display('pages');
                break;

        }

    }

    function newsCenter(){
        $aim = I('get.aim');
        switch($aim){
            case news;
                $data['name1'] = "新闻中心";
                $this->assign('data', $data);
                $relateModel = M('news_kejidongtai');
                $relateInfo = $relateModel->order('id desc')->select();
                $this->assign('list',$relateInfo);
                break;
            case yewu;
                $data['name1'] = "站内业务";
                $this->assign('data', $data);
                $relateModel = M('websitebusiness_content');
                $relateInfo = $relateModel->order('id desc')->select();
                $this->assign('list',$relateInfo);
                break;
        }
        $this->display('news_center');
    }


}