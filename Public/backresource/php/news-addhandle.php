<?php
	session_start();
	require '../connect.php';
	require_once ('func.php');
	error_reporting(E_ALL & ~E_NOTICE);
	
	$title = $_POST['title'];
	$info = $_POST['info'];
	$content = trimall($_POST['content']);
	$author = $_POST['author'];
	$time = $_POST['time'];
	//echo $title;

	$url = "../upload/img/news/" . $_FILES["file"]["name"];
	$pei ="news/".$_FILES["file"]["name"];
     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");

   //  echo "$url";
	//echo "$pei";





	// echo "$filesize";
	// echo "$upfile_type";
	
	$sqls="insert into news(title,img,info,content,author,time) values('$title','$pei','$info','$content','$author','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功');window.location.href=list.htmllist.htmlt>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	
	?>