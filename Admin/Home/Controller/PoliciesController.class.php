<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 9:04
 */

namespace Home\Controller;
use Think\Controller;


class policiesController extends Controller
{

    public function policiesShowList()
    {
        if (empty(session('policies_type'))) {
            session('policies_type', 'shengnei');
            $newsindexmodel = M('policies_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('policies_content');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();

            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);

            $this->display('list');
        } else {
//            session('policies_type',null);
//            $type = I('get.type');
//            session('policies_type',$type);

            if (empty(I('get.type'))) {
                $type = session('policies_type');
            } else {
                $type = I('get.type');
            }

            switch ($type) {
                case shengnei;
                    session('policies_type', 'shengnei');
                    break;
                case guojia;
                    session('policies_type', 'guojia');
                    break;


            }
            $newModel = M('policies_content');
            $condition['type'] = $type;
            $newInfo = $newModel->where($condition)->order('id desc')->select();
            $newsCount = $newModel->where($condition)->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);


            $newsindexmodel = M('policies_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function policiesAddSelect()
    {
        if (empty(I('post.type'))) {
            $newsindexmodel = M('policies_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display(add_select);
        } else {
            $type = I('post.type');
            session('policies_type', $type);

            $url = "Public/upload/policies/" . $_FILES["img"]["name"];
            $pei = LOCALHOST."Public/upload/policies/" . $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"], "$url");

            $data['title'] = I('post.title');
            $data['source'] = I('post.source');
            $data['author'] = I('post.author');
            $data['img_url'] = I('post.img_url');
            $data['time'] = I('post.time');
            $data['info'] = I('post.info');
            $data['content'] = I('post.content');

            $data['img_url'] = $pei;

            switch ($type) {
                case shengnei;
                    session('policies_type', 'shengnei');
                    $data['type'] = "shengnei";
                    $data['type_value'] = "省内政策";
                    break;
                case guojia;
                    session('policies_type', 'guojia');
                    $data['type'] = "guojia";
                    $data['type_value'] = "国家政策";
                    break;


            }

            $databasename = "policies_content";

            if (add_info($databasename, $data) == true) {
                $this->success('内容发布成功', 'policiesShowList');
            } else {
                $this->error('内容发布失败，请重试');
            }
        }
    }


    public function policiesChange()
    {
        $type = session('policies_type');
        $id = I('get.id');

        if (empty(I('post.title'))) {

            $newModel = M('policies_content');
            $databasename = "policies_content";
            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list', $info);
            $this->display(change);
        } else {
            if (!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/policies/" . $_FILES["img"]["name"];
                $pei = "../../../Public/upload/policies/" . $_FILES["img"]["name"];
                $index_pei = "Public/upload/policies/" . $_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "$url");
                $data['img_url'] = $pei;
                $data['himg_url'] = $index_pei;
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
            $databasename = "policies_content";
            if (change_info($databasename, $id, $data) == true) {
                $this->success('内容修改成功', 'policiesShowList');
            } else {
                $this->error('内容修改失败，请重试');
            }
        }
    }

    public function policiesDel()
    {
        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        $databasename = "policies_content";
        if (del_info($databasename, $id) == true) {
            $this->assign("jumpUrl", U('Policies/policiesShowList'))->success('已删除');
        } else {
            $this->error('删除失败，请重试');
        }
    }


}

