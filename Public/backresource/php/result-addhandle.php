<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$fatherid = $_POST['title'];
	$type = $_POST['type'];
	$job = urlencode($_POST['job']);
	$nature = urlencode($_POST['nature']);
	$time = date("Y-m-d ", time());
	// echo "$title,$content";
	
	
	$sqls="insert into test_result(fatherid,type,job,nature,time) values('$fatherid','$type','$job','$nature','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加类型成功');window.location.href=list.html;<list.html";
	}
	else {
		echo "<script>alert('请重试');window.location.href='../result-list.php';<list.html";
	}
	