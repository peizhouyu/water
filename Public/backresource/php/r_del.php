<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	// echo "$id";
	$deletesql = "delete from test_result where test_resultid=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除类型成功');window.location.href='../result-list.html';</script>";
	}else{
		echo "<script>alert('删除失败');window.location.href=list.html;<list.html";
	}
?>