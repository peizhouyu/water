<?php
	require '../connect.php';
	$name=$_POST['name'];
	$time = date("Y-m-d ", time());

	$tag=$_POST['tag'];
	$info=$_POST['info'];
	$Uid=$_POST['Uid'];
	
	$sqls="insert into video(name,tag,info,time,Uid) values('$name', '$tag', '$info', '$time','$Uid')";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功');history.go(-1);</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	
	
	?>