<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //模板颜色样式表 路径重定向
    public function skin(){
        header( "Location: http://localhost/develop/skin/default/skin.css" );
    }


    public function index(){

        if (empty(session('name'))==true) {
          $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
        }else{

        $this->assign('name',session('name'));
        $this->display(index);
    }

    }

    /**
     *
     */
    public function login(){
        header("Content-Type:text/html;charset=utf-8");

        if (empty($_POST['name'])==true) {
            $this->display();
        }else{

        if (!check_verify($_POST['verify'])) {
            $this->error('验证码不正确！');
        }
        $user=M('user');
        $name=$_POST['name'];
        $password=$_POST['password'];

        $condition['name']=$_POST['name'];
        $condition['password']=$_POST['password'];
        if($user->where($condition)->find()){
            session('name',$name);
            $this->success('登陆成功','index');
        }else{
            $this->error('用户名或密码错误，请重新登录！');
         }
        }
      

     }

     //管理员级别
    // public function welcome(){
    //     // var_dump(session('name'));
    //         $user = M('user');
    //         $condition['name']=session('name');
    //         $type = $user->where($condition)->find();
    //         // var_dump($type);
    //        switch ($type['type']) {
    //            case '0':
    //             $type="高校工委";
    //             $this->assign('type',$type);
    //             $this->assign('name',session('name'));
    //             $this->display(index_gongwei);
    //                break;
    //            case '1':
    //             $type="双带头人";
    //             $this->assign('type',$type);
    //             $this->assign('name',session('name'));
    //             $this->display(index_daitouren);
    //                break;
    //            default:
    //             $type="非法用户";
    //                break;
    //        }
    
    //  }


    //生成验证码
     public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize=18;
        $Verify->length=4;
        $Verify->imageW=120;
        $Verify->imageH=34;
        $Verify->entry();
    }
}