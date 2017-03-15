<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 17:09
 */
namespace Home\Controller;
use Think\Controller;
class SystemController extends Controller {

    //实现站点静态化
    public function staticIndex(){
       $this->buildHtml('index',HTML_PATH . '/index/','Index/index');
    }
}