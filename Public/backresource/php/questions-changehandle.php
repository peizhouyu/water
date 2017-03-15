<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$sort = $_POST['sort'];
	$author = $_POST['$author'];
	$info = $_POST['info'];


	$time = $_POST['time'];
	$url = "../upload/img/exam/" . $_FILES["file"]["name"];
	$pei ="IMGURL/exam/".$_FILES["file"]["name"];
     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");






	$sqls="update test_name set title='$title',sort='$sort',author='$author',info='$info',img='$pei',time='$time' where testid ='$id'";
	// $sqls="insert into questions(question,selectA,selectB,selectC,selectD,questioncreatetime) values('$question','$selectA','$selectB','$selectC','$selectD','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('修改成功');window.location.href='../questions-info.php';</script>";
	}
	else {
		echo "<script>alert('请重试');window.location.href='../questions-info.php';</script>";
	}
	