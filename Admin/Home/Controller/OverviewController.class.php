<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 9:44
 */
namespace Home\Controller;
use Think\Controller;


class OverviewController extends Controller
{

    public function OverviewShowList()
    {
        if (empty(session('overview_type'))) {
            session('overview_type', 'gaikuang');
            $newsindexmodel = M('overview_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('overview_content');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();

            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);

            $this->display('list');
        } else {
//            session('overview_type',null);
//            $type = I('get.type');
//            session('overview_type',$type);

            if (empty(I('get.type'))) {
                $type = session('overview_type');
            } else {
                $type = I('get.type');
            }

            switch ($type) {
                case gaikuang;
                    session('overview_type', 'gaikuang');
                    break;
                case zuzhijigou;
                    session('overview_type', 'zuzhijigou');
                    break;
                case zizhijieshao;
                    session('overview_type', 'zizhijieshao');
                    break;
                case jishuzhuangbei;
                    session('overview_type', 'jishuzhuangbei');
                    break;
                case huojiangchengguo;
                    session('overview_type', 'huojiangchengguo');
                    break;
                case lianxiwomen;
                    session('overview_type', 'lianxiwomen');
                    break;


            }
            $newModel = M('overview_content');
            $condition['type'] = $type;
            $newInfo = $newModel->where($condition)->order('id desc')->select();
            $newsCount = $newModel->where($condition)->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);


            $newsindexmodel = M('overview_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function OverviewAddSelect()
    {
        if (empty(I('post.type'))) {
            $newsindexmodel = M('overview_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display(add_select);
        } else {
            $type = I('post.type');
            session('overview_type', $type);

            $url = "Public/upload/Overview/" . $_FILES["img"]["name"];
            $pei = LOCALHOST."Public/upload/overview/" . $_FILES["img"]["name"];
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
                case gaikuang;
                    session('overview_type', 'gaikuang');
                    $data['type'] = "gaikuang";
                    $data['type_value'] = "工作站概况";
                    break;
                case zuzhijigou;
                    session('overview_type', 'zuzhijigou');
                    $data['type'] = "zuzhijigou";
                    $data['type_value'] = "组织机构";
                    break;
                case zizhijieshao;
                    session('overview_type', 'zizhijieshao');
                    $data['type'] = "zizhijieshao";
                    $data['type_value'] = "资质介绍";
                    break;
                case jishuzhuangbei;
                    session('overview_type', 'jishuzhuangbei');
                    $data['type'] = "jishuzhuangbei";
                    $data['type_value'] = "技术装备";
                    break;
                case huojiangchengguo;
                    session('overview_type', 'huojiangchengguo');
                    $data['type'] = "huojiangchengguo";
                    $data['type_value'] = "获奖成果";
                    break;
                case lianxiwomen;
                    session('overview_type', 'lianxiwomen');
                    $data['type'] = "lianxiwomen";
                    $data['type_value'] = "联系我们";
                    break;


            }

            $databasename = "overview_content";

            if (add_info($databasename, $data) == true) {
                $this->success('内容发布成功', 'OverviewShowList');
            } else {
                $this->error('内容发布失败，请重试');
            }
        }
    }


    public function OverviewChange()
    {
        $type = session('overview_type');
        $id = I('get.id');

        if (empty(I('post.title'))) {

            $newModel = M('overview_content');
            $databasename = "overview_content";
            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list', $info);
            $this->display(change);
        } else {
            if (!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/Overview/" . $_FILES["img"]["name"];
                $pei =LOCALHOST."Public/upload/overview/" . $_FILES["img"]["name"];
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
            $databasename = "overview_content";
            if (change_info($databasename, $id, $data) == true) {
                $this->success('内容修改成功', 'OverviewShowList');
            } else {
                $this->error('内容修改失败，请重试');
            }
        }
    }

    public function OverviewDel()
    {
        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        $databasename = "overview_content";
        if (del_info($databasename, $id) == true) {
            $this->assign("jumpUrl", U('Overview/OverviewShowList'))->success('已删除');
        } else {
            $this->error('删除失败，请重试');
        }
    }


}

