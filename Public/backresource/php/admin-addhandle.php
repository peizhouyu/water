<?php
	require '../connect.php';
	$name=$_POST['name'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$sex=$_POST['sex'];
	$phone=$_POST['phone'];
	$area=$_POST['area'];
	$job=$_POST['job'];
	$userGroup=$_POST['userGroup'];
	$info=$_POST['info'];
	$time = date("Y-m-d ", time());
/*
	echo "$name,$password,$repassword,$sex,$phone,$job,$userGroup,$info";*/
	
	$sqls="insert into user(name,pwd,sex,phone,area,job,info,userGroup,time,isDel) values('$name', '$password', '$sex', '$phone','$area','$job','$info','admin','$time','0')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加管理员成功');window.location.href=list.html;</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	
	
	
	
	
	
	?>