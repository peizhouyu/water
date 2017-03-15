<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	// $cid = $_GET['cid'];
	// echo "$id";
	$deletesql = "delete from questions where questionid=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');window.location.href=list.html;</sclist.html	}else{
		echo "<script>alert('删除失败');window.location.href='../questions-list.php';</sclist.html	}

	
	
?>