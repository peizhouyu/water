<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	
	$title = $_POST['title'];
	$sort = $_POST['sort'];
	$info = $_POST['info'];
	$jumpurl = $_POST['jumpurl'];
	
	$time = date("Y-m-d ", time());

	$url = "../upload/img/banner/" . $_FILES["file"]["name"];
	$pei ="IMGURL/banner/".$_FILES["file"]["name"];
     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");

	// $author = $_session['UserName'];


	// echo "$title,$content";
	
	$sqls="insert into banner(sort,title,img,info,jumpurl,time) values('$sort','$title','$pei','$info','$jumpurl','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功');window.location.href=list.php;</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	?>