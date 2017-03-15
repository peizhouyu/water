<?php
	session_start();
	require_once('func.php');
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$title = $_POST['title'];
	$info = urlencode($_POST['info']);
	$author = urlencode($_POST['author']);
	$sort = $_POST['sort'];
	$property = $_POST['property'];
	// $time = time();
	$time = $_POST['$time'];
	
	$url = "../upload/img/exam/" . $_FILES["file"]["name"];
	$pei ="IMGURL/exam/".$_FILES["file"]["name"];
     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");


	// $author = $_session['UserName'];


	// echo "$title,$content";
	
	$sqls="insert into test_name(title,sort,author,info,property,img,time) values('$title','$sort','$author','$info','$property','$pei','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加试题成功');window.location.href='../questions-info.php';</script>";
	}
	else {
		echo "<script>alert('请重试');window.location.href='../questions-info.php';</script>";
	}
	
	
	
	?>