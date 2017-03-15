<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	// echo "$id";
	$deletesql = "delete from userinfo where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');window.location.href='../member-list.html';</script>";
	}else{
		echo "<script>alert('删除失败');history.go(-1);</script>";
	}
?>