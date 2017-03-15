<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/21 0021
 * Time: 15:19
 */
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    public function UserList(){
        $UserModel = M('user');
        $UserInfo = $UserModel->select();
        $count = $UserModel->count();
        $this->assign('count',$count);
        $this->assign('list',$UserInfo);
        $this->display(admin_list);
    }

    public function UserAdd(){
        if(empty(I('post.name'))){
            $this->display(admin_add);
        }else{
            $data['name'] = I('post.name');
            $data['password'] = I('post.password');
            $data['sex'] = I('post.sex');
            $data['tel'] = I('post.tel');
            $data['email'] = I('post.email');
            $data['info'] = I('post.info');
            $type = I('post.type');
            switch($type){
                case 0;
                    $data['type'] = $type;
                    $data['role'] = "系统管理员";
                    break;
                case 1;
                    $data['type'] = $type;
                    $data['role'] = "内容管理员";
                    break;
                case 2;
                    $data['type'] = $type;
                    $data['role'] = "幻灯管理员";
                    break;

            }

            $databasename = "user";
            if (add_info($databasename,$data)==true) {
                $this->success('新增管理员成功','UserList');
            }else{
                $this->error('新增管理员失败，请重试');
            }
        }
    }

    public function UserChange(){
        $id = I('get.id');
        if(empty(I('post.name'))){
            $UserModel = M('user');
            $condition['id'] = $id;
            $UserInfo = $UserModel->where($condition)->find();
//            var_dump($UserInfo);
            $this->assign('list',$UserInfo);
            $this->display(admin_change);
        }else{
            $data['name'] = I('post.name');
            $data['password'] = I('post.password');

            $data['tel'] = I('post.tel');
            $data['email'] = I('post.email');
            $data['info'] = I('post.info');
            $type = I('post.type');

            if(!empty(I('post.sex'))){
                $data['sex'] = I('post.sex');
            }
            if(!empty(I('post.type'))){
                $type = I('post.type');
                switch($type){
                    case 0;
                        $data['type'] = $type;
                        $data['role'] = "系统管理员";
                        break;
                    case 1;
                        $data['type'] = $type;
                        $data['role'] = "内容管理员";
                        break;
                    case 2;
                        $data['type'] = $type;
                        $data['role'] = "幻灯管理员";
                        break;

                }
            }

            $databasename = "user";
            if (change_info($databasename,$id,$data)==true) {
                $this->success('内容修改成功','newsList');
            }else{
                $this->error('内容修改失败，请重试');
            }
        }

    }

    public function UserDel(){
        $id = I('get.id');
        $databasename = "user";
        if (del_info($databasename,$id)==true) {
            $this->assign("jumpUrl",U('New/newsList'))->success('已删除');
        }else{
            $this->error('删除失败，请重试');
        }
    }



}
