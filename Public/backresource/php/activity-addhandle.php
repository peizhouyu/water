<?php
	session_start();
	require '../connect.php';
	require_once ('func.php');
	error_reporting(E_ALL & ~E_NOTICE);
	$tag = $_POST['tag'];
	$title = $_POST['title'];
	$info = $_POST['info'];
	$content = trimall($_POST['content']);
	$author = $_POST['author'];
	$time = $_POST['time'];

	$url = "../upload/img/artical/" . $_FILES["file"]["name"];
	$pei ="IMGURL/artical/".$_FILES["file"]["name"];
     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");

	// $author = $_session['UserName'];


	// echo "$title,$content";
	
	$sqls="insert into artical(tag,title,img,info,content,author,time) values('$tag','$title','$pei','$info','$content','$author','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功');window.location.href=list.html;</slist.html
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	?>