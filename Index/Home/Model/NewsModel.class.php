<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 16:38
 */
namespace Home\Model;
use Think\Model\ViewModel;
class BlogViewModel extends ViewModel {
    public $viewFields = array(
        'Blog'=>array('id','name','title'),
        'Category'=>array('title'=>'category_name', '_on'=>'Blog.category_id=Category.id'),
        'User'=>array('name'=>'username', '_on'=>'Blog.user_id=User.id'),
        );
}