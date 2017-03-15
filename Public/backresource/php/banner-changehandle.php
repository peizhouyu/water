<?php
	session_start();
	require '../connect.php';
	error_reporting(E_ALL & ~E_NOTICE);
	$id = $_POST['id'];
	$title = $_POST['title'];
	$sort = $_POST['sort'];
	$info = $_POST['info'];
	$jumpurl = $_POST['jumpurl'];
	
	$time = date("Y-m-d ", time());


	if (!empty($_FILES['file']['tmp_name'])) {
		
		$url = "../upload/img/banner/" . $_FILES["file"]["name"];
		$pei ="IMGURL/banner/".$_FILES["file"]["name"];
     	move_uploaded_file($_FILES["file"]["tmp_name"],"$url");
	    $sqls="update banner set img='$pei' where bannerid ='$id'";
		mysql_query($sqls);
	}
	// echo "$title,$content";
	
	$sqls = "update banner set title='$title',sort='$sort',info='$info',jumpurl='$jumpurl',time='$time' where bannerid='$id'";
	$result = mysql_query($sqls);
	if($result){
		echo "<script>alert('修改成功');window.location.href=list.php;</script>";
	}
	else {
		echo "<script>alert('请重试');history.go(-1);</script>";
	}
	
?>