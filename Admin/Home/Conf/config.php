<?php

return array(
	'DB_TYPE'           =>  'mysql',
    'DB_HOST'           =>  'localhost',
    'DB_NAME'           =>  'water',//需要新建一个数据库！名字叫
    'DB_USER'           =>  'root',     //数据库用户名    
    'DB_PWD'            =>  'root',//数据库登录密码
    'DB_PORT'           =>  '3306',

    'TMPL_PARSE_STRING' => array(
        //设置后台管理页面标题
        '__TITLE__' => '水利部科技推广中心',

        '__STATIC__' => __ROOT__ . '/Public/backresource',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
    ),

);       
   