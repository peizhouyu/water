<?php
	require_once('../connect.php');
	error_reporting(E_ALL & ~E_NOTICE);
	$id = $_GET['id'];
	// echo "$id";
	$deletesql = "delete from user where Uid=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');window.location.href=list.html;list.html>";
	}else{
		echo "<script>alert('删除失败');window.location.href='../admin-list.php';list.html>";
	}
?>