<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 10:15
 */
namespace Home\Controller;
use Think\Controller;


class ExchangeController extends Controller
{

    public function ExchangeShowList()
    {
        if (empty(session('exchange_type'))) {
            session('exchange_type', 'rencaipeixun');
            $newsindexmodel = M('exchange_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);

            $newNoticeModel = M('exchange_content');
            $newsNotice = $newNoticeModel->order('id desc')->select();
            $newsNoticeCount = $newNoticeModel->count();

            $this->assign('count', $newsNoticeCount);
            $this->assign('list', $newsNotice);

            $this->display('list');
        } else {
//            session('exchange_type',null);
//            $type = I('get.type');
//            session('exchange_type',$type);

            if (empty(I('get.type'))) {
                $type = session('exchange_type');
            } else {
                $type = I('get.type');
            }

            switch ($type) {
                case huoban;
                    session('exchange_type', 'huoban');
                    break;



            }
            $newModel = M('exchange_content');
            $condition['type'] = $type;
            $newInfo = $newModel->where($condition)->order('id desc')->select();
            $newsCount = $newModel->where($condition)->count();
            $this->assign('count', $newsCount);
            $this->assign('list', $newInfo);


            $newsindexmodel = M('exchange_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display('list');

        }
    }

    public function ExchangeAddSelect()
    {
        if (empty(I('post.type'))) {
            $newsindexmodel = M('exchange_index');
            $newsindex = $newsindexmodel->select();
            $this->assign('index', $newsindex);
            $this->display(add_select);
        } else {
            $type = I('post.type');
            session('exchange_type', $type);

            $url = "Public/upload/Exchange/" . $_FILES["img"]["name"];
            $pei = LOCALHOST."Public/upload/exchange/" . $_FILES["img"]["name"];
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
                case huoban;
                    session('exchange_type', 'huoban');
                    $data['type'] = "huoban";
                    $data['type_value'] = "合作伙伴";
                    break;



            }

            $databasename = "exchange_content";

            if (add_info($databasename, $data) == true) {
                $this->success('内容发布成功', 'ExchangeShowList');
            } else {
                $this->error('内容发布失败，请重试');
            }
        }
    }


    public function ExchangeChange()
    {
        $type = session('exchange_type');
        $id = I('get.id');

        if (empty(I('post.title'))) {

            $newModel = M('exchange_content');
            $databasename = "exchange_content";
            $condition['id'] = $id;
            $info = $newModel->where($condition)->find();

            $this->assign('list', $info);
            $this->display(change);
        } else {
            if (!empty($_FILES["img"]["name"])) {
                $url = "Public/upload/Exchange/" . $_FILES["img"]["name"];
                $pei = LOCALHOST."Public/upload/exchange/" . $_FILES["img"]["name"];
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
            $databasename = "exchange_content";
            if (change_info($databasename, $id, $data) == true) {
                $this->success('内容修改成功', 'ExchangeShowList');
            } else {
                $this->error('内容修改失败，请重试');
            }
        }
    }

    public function ExchangeDel()
    {
        $id = I('get.id');
//        var_dump($type);
//        var_dump($id);
        $databasename = "exchange_content";
        if (del_info($databasename, $id) == true) {
            $this->assign("jumpUrl", U('Exchange/ExchangeShowList'))->success('已删除');
        } else {
            $this->error('删除失败，请重试');
        }
    }


}

