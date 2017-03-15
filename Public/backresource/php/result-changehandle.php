<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$fatherid = $_POST['title'];
	$id = $_POST['id'];
	$type = $_POST['type'];
	$job = urlencode($_POST['job']);
	$nature = urlencode($_POST['nature']);
	$time = date("Y-m-d ", time());
	// echo "$title,$content";
	// echo "$id";
	$sqls = "update test_result set type='$type',job='$job',nature='$nature',time='$time' where test_resultid='$id'";
	// $sqls="insert into test_result(type,job,nature,time) values('$type','$job','$nature','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('修改类型成功');window.location.href=list.html;<list.html";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	