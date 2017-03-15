<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
    <title>新增幻灯</title>
</head>
<body>
<div class="pd-20">
    <form action="/develop/water/admin.php/Home/Banner/bannerChange" method="post" enctype="multipart/form-data"  class="form form-horizontal" id="form-article-add">
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>幻灯标题：</label>
            <div class="formControls col-9">
                <input type="text" class="input-text" value="<?php echo ($list["title"]); ?>" placeholder="" id="" name="title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>副标题：</label>
            <div class="formControls col-9">
                <input type="text" class="input-text" value="<?php echo ($list["secondtitle"]); ?>" placeholder="" id="" name="secondtitle">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>排序值：</label>
            <div class="formControls col-9">
                <input type="text" class="input-text" value="<?php echo ($list["number"]); ?>" placeholder="" id="" name="number">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>转跳地址：</label>
            <div class="formControls col-9">
                <input type="text" class="input-text" value="<?php echo ($list["dump_url"]); ?>" placeholder="" id="" name="jumpurl">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-2">缩略图：</label>
            <div class="formControls col-2">
                <div class="uploader-thum-container">
                    <div id="fileList" class="uploader-list"></div>
                    <input type="file" name="img" id="img" />
                </div>
            </div>
            <label class="form-label col-8" style="text-align:left;color:red;">（缩略图尺寸：1920px*480px）</label>
        </div>

        <div class="row cl">
            <div class="col-10 col-offset-2">

                <button onClick="" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
                <button onClick="pei()" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
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
<script type="text/javascript">
    function pei(){
        history.go(-1);
    }
</script>
</body>
</html>