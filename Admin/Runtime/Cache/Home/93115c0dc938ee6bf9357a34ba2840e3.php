<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
<link href="/develop/water/Public/backresource/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>新增</title>
</head>
<body>
<div class="pd-20">
	<form action="<?php echo U('New/newsAddSelect');?>" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>目标栏目：</label>
			<div class="formControls col-9">
				<select name="type" class="select">
					<?php if(is_array($index)): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>标题：</label>
			<div class="formControls col-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>来源：</label>
			<div class="formControls col-4">
				<input type="text" class="input-text" value="" placeholder="" id="" name="source">
			</div>
			<label class="form-label col-1"><span class="c-red">*</span>作者：</label>
			<div class="formControls col-4">
				<input type="text" class="input-text" value="" placeholder="" id="" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>关键词：</label>
			<div class="formControls col-4">
				<input type="text" class="input-text" value="" placeholder="" id="" name="cate">
			</div>
			<label class="form-label col-1"><span class="c-red">*</span>更新时间：</label>
			<div class="formControls col-4">
				<input type="date" class="input-text" value="" placeholder="" id="" name="time">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">摘要：</label>
			<div class="formControls col-9">
				<textarea name="info" cols="" rows="" class="textarea"  placeholder="说点什么..." datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">缩略图：</label>
			<div class="formControls col-2">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<input type="file" name="img" id="file" />
				</div>
			</div>
			<label class="form-label col-3" style="text-align:left;color:red;margin-left: -100px;white-space: nowrap;">（缩略图尺寸：1920px*480px）</label>

			<label class="form-label col-1">视频文件：</label>
			<div class="formControls col-2">
				<div class="uploader-thum-container">
					<div id="videoList" class="uploader-list"></div>
					<input type="file" name="video" id="video" />
				</div>
			</div>
			<label class="form-label col-1" style="text-align:left;color:red;margin-left: -100px;white-space: nowrap;">（如需上传视频请从这里添加）</label>
		</div>
		<div class="row cl">
			<label class="form-label col-2">内容<span style="color:red">(请输入纯文本)</span>：</label>
			<!-- <div class="formControls col-9" > 
				<script id="editor"  type="text/plain" style="width:100%;height:400px;"></script> 
			</div> -->
			<textarea name="content" cols="135" rows="15" id="content"></textarea>
		</div>
		<div class="row cl">
			<div class="col-10 col-offset-2">
				<!-- <textarea name="content" id="" cols="140" rows="20" value="iiii">ijkjkljkl</textarea> -->
				
				<!-- <br> -->
				<button onClick="" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<button onClick="pei()" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
		</div>
		
	</form>
</div>
</div>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.admin.js"></script>
<script charset="utf-8" src="/develop/water/Public/backresource/editor/kindeditor.js"></script>
                                <script charset="utf-8" src="editor/lang/zh_CN.js"></script>
                                <script>
                                        KindEditor.ready(function(K) {
                                                window.editor = K.create('#content');
                                        });
                                           </script>   
<script type="text/javascript">
function pei(){
 window.location.href="news-list.php";
}
</script>
</body>
</html>