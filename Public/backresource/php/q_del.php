<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	// echo "$id";
	$deletesql = "delete from test_name where testid=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');window.location.href='../questions-info.php';</script>";
	}else{
		echo "<script>alert('删除失败');window.location.href='../questions-info.php';</script>";
	}
?>