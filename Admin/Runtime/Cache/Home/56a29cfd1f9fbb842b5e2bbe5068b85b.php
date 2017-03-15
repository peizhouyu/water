<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/html5.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/respond.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/develop/water/Public/backresource/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/css/style.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>新闻列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻管理 <span class="c-gray en">&gt;</span> 新闻列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="text-c">
		<form action="<?php echo U('New/newsList');?>" method="get" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
		<span class="select-box inline">
				<select name="type" class="select">
					<?php if(is_array($index)): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
		</span>
		<!--<input type="text" name="" id="" placeholder=" 新闻名称" style="width:250px" class="input-text">-->
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 确定</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<a class="btn btn-primary radius"  href="<?php echo U('New/newsAddSelect');?>"><i class="Hui-iconfont">&#xe600;</i> 添加新闻</a></span>
			<span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="80">序号</th>
					
					<th width="100">缩略图</th>
					<th width="200">新闻名称</th>
					<th width="200">新闻简介</th>

					<th width="100">作者</th>
					<th width="150">更新时间</th>
					<th width="60">所属栏目</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><?php echo ($vo["id"]); ?></td>
					
					<td><a href="javascript:;" ><img width="180" class="video-thumb" src="<?php echo ($vo["img_url"]); ?>"></a></td>
					<td class="text-l"><b><?php echo ($vo["title"]); ?></b></td>
					<td><?php echo ($vo["info"]); ?></td>
					<td><?php echo ($vo["author"]); ?></td>
					<td><?php echo ($vo["time"]); ?></td>
					<td class="td-status"><span class="label label-success radius"><?php echo ($vo["tab"]); ?></span></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5" onClick="video_start(this,'10001')" href="javascript:;" title="详情"><i class="Hui-iconfont">&#xe603;</i></a>
						<a style="text-decoration:none" class="ml-5"  href="<?php echo U('New/newsChange',array('type'=>$vo['type'],'id'=>$vo['id']));?>" title="修改"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5"  href="<?php echo U('New/newsDel',array('type'=>$vo['type'],'id'=>$vo['id']));?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
						<a style="text-decoration:none" class="ml-5" href="javascript:;" title="置顶新闻"><i class="Hui-iconfont">&#xe684;</i></a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>

			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.admin.js"></script>
<script type="text/javascript">

/*图片-添加*/function video_add(title, url) {
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}/*图片-查看*/
function video_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-审核*/
function video_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="video_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="video_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*图片-下架*/
function video_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="video_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*图片-发布*/
function video_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="video_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*图片-申请上线*/
function video_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
/*图片-编辑*/
function video_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-删除*/
function video_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		var Aid = id;
		window.location.href="php/n_del.php?id=Aid";
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>
</body>
</html>