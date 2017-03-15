<?php
	require '../connect.php';
	
	$name=$_POST['name'];
	$to=$_POST['to'];
	$info=$_POST['info'];
	$time = time();
	
	echo "$name,$to,$info,$time";

	$sqls="insert into tag(name,to,info,time) values('$name', '$to', '$info', '$time')";
	/*$sqls="INSERT INTO `tag`(`name`, `info`, `to`, `time`) VALUES ( `$name`,`$info`,`$to`,`$time`)";*/
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('添加成功');history.go(-1);</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
	
	
	
	
	
	
	?>