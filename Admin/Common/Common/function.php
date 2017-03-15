<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/12 0012
 * Time: 18:56
 */

        //验证码检验
        function check_verify($code,$id=""){
            $verify = new \Think\Verify();
            return $verify->check($code,$id);
        }
        //向数据库写入文章内容  删  改 查

        function add_info($db_name,$data){
            $build_news = M("$db_name");
            $build_news->add($data);
            return true;
        }

        //只更新指定字段
        function update(){

        }

        function add_info_pei($id,$value,$db_name,$data){
            $build_news = M("$db_name");

            $condition['$id']=$value;
            $build_news->where($condition)->add($data);

            return true;
        }

        function change_info($db_name,$id,$data){
            $db_info = M("$db_name");
            $condition['id']=$id;
            $db_info->where($condition)->save($data);
            return true;
        }

        function del_info($db_name,$id){
            $db_info = M("$db_name");
            $condition['id']=$id;
            $db_info->where($condition)->delete();
            return true;
        }

        function select_info($db_name,$condition){
            $db_info = M("$db_name");
            $info = $User->where($condition)->select();
            if (!empty($info)) {
                return true;
            }else{
                return false;
            }
        }


        //实现分页功能函数
        function getpage($dt_name,$page_num){
            $count = $dt_name->count();
            $Page = new \Think\Page($count,"$page_num");
            $Page->setConfig('header','共 %TOTAL_ROW% 条记录');
            $Page->setConfig('header','个会员');
            $Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');
            $Page->setConfig('first','首页');
            $Page->setConfig('last','末页');
            return $Page;
}
