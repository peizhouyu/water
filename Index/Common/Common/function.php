<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/27 0027
 * Time: 12:14
 */
    //阅读量计数函数
     function readCount($databasename,$id){
         $dataModel = M($databasename);
         $dataInfo = $dataModel->where($id)->find();
         $readnum = $dataInfo['readnum'];
         $readnum = $readnum + 1;
         $data['readnum'] = $readnum;
         $condition['id'] = $id;
         $dataModel->where($condition)->save($data);
//         var_dump($id);

     }