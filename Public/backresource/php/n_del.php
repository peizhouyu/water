<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	// echo "$id";
	$deletesql = "delete from news where Aid=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');window.location.href=list.html;</script>";
	}else{
		echo "<script>alert('删除失败');window.location.href='../news-list.php';</script>";
	}
?>