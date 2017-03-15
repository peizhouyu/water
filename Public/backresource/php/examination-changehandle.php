<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$question = $_POST['question'];
	// $type =$_SESSION[type];
	// echo "$_SESSION[type]";
	// echo "$type";
	$id = $_POST['id'];

	$selectA = $_POST['selectA'];
	$selectB = $_POST['selectB'];
	$selectC = $_POST['selectC'];
	$selectD = $_POST['selectD'];

	$time = date("Y-m-d ", time());



	// $author = $_session['UserName'];


	// echo "$title,$content";
	$sqls="update questions set question='$question',selectA='$selectA',selectB='$selectB',selectC='$selectC',selectD='$selectD',questioncreatetime='$time' where questionid ='$id'";
	// $sqls="insert into questions(question,selectA,selectB,selectC,selectD,questioncreatetime) values('$question','$selectA','$selectB','$selectC','$selectD','$time')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('修改成功');window.location.href=list.html;</script>";
	}
	else {
		echo "<script>alert('请重试')</script>";
	}
	