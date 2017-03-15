<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/21 0021
 * Time: 14:28
 * 站内业务模块业务处理
 */
namespace Home\Controller;
use Think\Controller;


class WebsiteBusinessController extends Controller
{

    public function BusinessShowList()
    {
        if (empty(session('business_type'))) {
            session('business_type', 'shuiligongcheng');
            $newsindexmodel = M('websitebusiness_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('websitebusiness_content');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();

            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);

            $this->display('list');
        } else {
//            session('business_type',null);
//            $type = I('get.type');
//            session('business_type',$type);

            if (empty(I('get.type'))) {
                $type = session('business_type');
            } else {
                $type = I('get.type');
            }

            switch ($type) {
                case tuijiehui;
                    session('business_type', 'tuijiehui');
                    break;
                case jiaoliuhui;
                    session('business_type', 'jiaoliuhui');
                    break;
                case shuilituiguang;
                    session('business_type', 'shuilituiguang');
                    break;
                case dianxingxiangm;
                    session('business_type', 'dianxingxiangm');
                    break;


            }
            $newModel = M('websitebusiness_content');
            $condition['type'] = $type;
            $newInfo = $newModel->where($condition)->order('id desc')->select();
            $newsCount = $newModel->where($condition)->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);


            $newsindexmodel = M('websitebusiness_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function BusinessAddSelect()
    {
        if (empty(I('post.type'))) {
            $newsindexmodel = M('websitebusiness_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display(add_select);
        } else {
            $type = I('post.type');
            session('business_type', $type);

            $url = "Public/upload/websitebusiness/" . $_FILES["img"]["name"];
            $pei = LOCALHOST."Public/upload/websitebusiness/" . $_FILES["img"]["name"];

            move_uploaded_file($_FILES["img"]["tmp_name"], "$url");

            $data['title'] = I('post.title');
            $data['source'] = I('post.source');
            $data['location'] = I('post.location');
            $data['author'] = I('post.author');
            $data['img_url'] = I('post.img_url');
            $data['time'] = I('post.time');
            $data['info'] = I('post.info');
            $data['content'] = I('post.content');

            $data['img_url'] = $pei;



            switch ($type) {
                case tuijiehui;
                    session('business_type', 'tuijiehui');
                    $data['type'] = "tuijiehui";
                    $data['type_value'] = "推介会";
                    break;
                case jiaoliuhui;
                    session('business_type', 'jiaoliuhui');
                    $data['type'] = "jiaoliuhui";
                    $data['type_value'] = "交流会";
                    break;
                case shuilituiguang;
                    session('business_type', 'shuilituiguang');
                    $data['type'] = "shuilituiguang";
                    $data['type_value'] = "水利推广";
                    break;
                case dianxingxiangmu;
                    session('business_type', 'dianxingxiangmu');
                    $data['type'] = "dianxingxiangmu";
                    $data['type_value'] = "典型项目";
                    break;

            }

            $databasename = "websitebusiness_content";

            if (add_info($databasename, $data) == true) {
                $this->success('内容发布成功', 'BusinessShowList');
            } else {
                $this->error('内容发布失败，请重试');
            }
        }
    }


    public function BusinessChange()
    {
        $type = session('business_type');
        $id = I('get.id');

        if (empty(I('post.title'))) {

            $newModel = M('websitebusiness_content');
            $databasename = "websitebusiness_content";
            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list', $info);
            $this->display(change);
        } else {
            if (!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/websitebusiness/" . $_FILES["img"]["name"];
                $pei = LOCALHOST."Public/upload/websitebusiness/" . $_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "$url");
                $data['img_url'] = $pei;
            }

            if (!empty(I('post.title'))) {
                $data['title'] = I('post.title');
            }
            if (!empty(I('post.source'))) {
                $data['source'] = I('post.source');
            }
            if (!empty(I('post.source'))) {
                $data['source'] = I('post.source');
            }
            if (!empty(I('post.location'))) {
                $data['location'] = I('post.location');
            }
            if (!empty(I('post.author'))) {
                $data['author'] = I('post.author');
            }
            if (!empty(I('post.img_url'))) {
                $data['img_url'] = I('post.img_url');
            }
            if (!empty(I('post.time'))) {
                $data['time'] = I('post.time');
            }
            if (!empty(I('post.info'))) {
                $data['info'] = I('post.info');
            }
            if (!empty(I('post.content'))) {
                $data['content'] = I('post.content');
            }

            $id = I('post.id');
            $databasename = "websitebusiness_content";
            if (change_info($databasename, $id, $data) == true) {
                $this->success('内容修改成功', 'BusinessShowList');
            } else {
                $this->error('内容修改失败，请重试');
            }
        }
    }

    public function BusinessDel()
    {
        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        $databasename = "websitebusiness_content";
        if (del_info($databasename, $id) == true) {
            $this->assign("jumpUrl", U('WebsiteBusiness/BusinessShowList'))->success('已删除');
        } else {
            $this->error('删除失败，请重试');
        }
    }

}