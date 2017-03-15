<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$question = $_POST['question'];
	// $type =$_SESSION[type];
	$type = $_POST['title'];
	// echo "$_SESSION[type]";
	// echo "$type";

	$selectA = $_POST['selectA'];
	$selectB = $_POST['selectB'];
	$selectC = $_POST['selectC'];
	$selectD = $_POST['selectD'];

	$time = date("Y-m-d ", time());



	// $author = $_session['UserName'];


	// echo "$title,$content";
	
	$sqls="insert into questions(type,question,selectA,selectB,selectC,selectD,questioncreatetime) values('$type','$question','$selectA','$selectB','$selectC','$selectD','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功请继续添加');window.location.href='../examination-add.php';</script>";
	}
	else {
		echo "<script>alert('请重试')</script>";
	}
	