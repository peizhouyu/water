<?php
	session_start();
	require '../connect.php';
	require_once ('func.php');
	error_reporting(E_ALL & ~E_NOTICE);
	// $question = $_POST['question'];
	// $type =$_SESSION[type];
	// echo "$_SESSION[type]";
	// echo "$type";
	$id = $_POST['id'];

	
	$title = $_POST['title'];
	$info = $_POST['info'];
	$content = trimall($_POST['content']);
	$author = $_POST['author'];
	$time = $_POST['time'];

	
	if (!empty($time)) {
		$sqls="update artical set time='$time' where Aid ='$id'";
		mysql_query($sqls);
	}
	if (!empty($_FILES['file']['tmp_name'])) {
		$url = "../upload/img/artical/" . $_FILES["file"]["name"];
		$pei ="IMGURL/artical/".$_FILES["file"]["name"];
	     move_uploaded_file($_FILES["file"]["tmp_name"],"$url");

	    $sqls="update artical set img='$pei' where Aid ='$id'";
		mysql_query($sqls);
	}




	// $author = $_session['UserName'];


	// echo "$title,$content";
	$sqls="update artical set title='$title',info='$info',content='$content',author='$author' where Aid ='$id'";
	// $sqls="insert into questions(question,selectA,selectB,selectC,selectD,questioncreatetime) values('$question','$selectA','$selectB','$selectC','$selectD','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('修改成功');window.location.href='../activity-list.html';</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	