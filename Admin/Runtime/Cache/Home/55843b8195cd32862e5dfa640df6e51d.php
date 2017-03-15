<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="favicon.ico" >
<LINK rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/html5.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/respond.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/develop/water/Public/backresource/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/skin/default/skin.css" rel="stylesheet" type="text/css" id="skin" />
<link href="/develop/water/Public/backresource/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/develop/water/Public/backresource/css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台管理系统</title>
<meta name="keywords" content="后台管理系统">
<meta name="description" content="后台管理系统">
</head>
<body>
<header class="Hui-header cl"> <a class="Hui-logo l" title="H-ui.admin v2.3" href="/">水利部科技推广中心</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">水利部科技推广中心</a> <span class="Hui-subtitle l">后台管理系统</span>

	<ul class="Hui-userbar">
		<li>管理员</li>
		<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A"><?php echo ($name); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
			<ul class="dropDown-menu radius box-shadow">
				<li><a href="#">个人信息</a></li>
				<li><a href="php/logout.php">切换账户</a></li>
				<li><a href="php/logout.php">退出</a></li>
			</ul>
		</li>

	</ul>
	<a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-banner">
			<dt><i class="Hui-iconfont">&#xe67e;</i> 幻灯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Banner/bannerAdd');?>" href="javascript:void(0)">新增幻灯</a></li>
					<li><a _href="<?php echo U('Banner/bannerList');?>" href="javascript:void(0)">幻灯列表</a></li>
				</ul>
			</dd>
		</dl>
			
		<dl id="menu-news">
			<dt><i class="Hui-iconfont">&#xe67e;</i> 新闻中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('New/newsAddSelect');?>" href="javascript:void(0)">新增新闻</a></li>
					<li><a _href="<?php echo U('New/newsList');?>" href="javascript:void(0)">新闻列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>产品展示<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('ProductShow/ProductShowAddSelect');?>" href="javascript:void(0)">产品信息发布</a></li>
					<li><a _href="<?php echo U('ProductShow/ProductShowList');?>" href="javascript:void(0)">产品信息列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>站内业务<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('WebsiteBusiness/BusinessAddSelect');?>" href="javascript:void(0)">站内业务发布</a></li>
					<li><a _href="<?php echo U('WebsiteBusiness/BusinessShowList');?>" href="javascript:void(0)">站内业务列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>工作站概况<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Overview/overviewAddSelect');?>" href="javascript:void(0)">工作站信息发布</a></li>
					<li><a _href="<?php echo U('Overview/overviewShowList');?>" href="javascript:void(0)">工作站信息列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>政策法规<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Policies/policiesAddSelect');?>" href="javascript:void(0)">政策法规发布</a></li>
					<li><a _href="<?php echo U('Policies/policiesShowList');?>" href="javascript:void(0)">政策法规列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>服务中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Service/ServiceAddSelect');?>" href="javascript:void(0)">服务信息发布</a></li>
					<li><a _href="<?php echo U('Service/ServiceShowList');?>" href="javascript:void(0)">服务信息列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-activity">
			<dt><i class="Hui-iconfont">&#xe67e;</i>合作交流<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Exchange/ExchangeAddSelect');?>" href="javascript:void(0)">合作交流信息发布</a></li>
					<li><a _href="<?php echo U('Exchange/ExchangeShowList');?>" href="javascript:void(0)">合作交流信息列表</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i>管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>

                    <li><a _href="<?php echo U('User/UserAdd');?>" href="javascript:void(0)">新增管理员</a></li>
                    <li><a _href="<?php echo U('User/UserList');?>" href="javascript:void(0)">管理员管理</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('System/staticIndex');?>" href="javascript:void(0)">生成主页</a></li>
					<li><a _href="system-base.html" href="javascript:void(0)">系统设置</a></li>
					<li><a _href="system-log.html" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="首页" data-href="welcome.php">首页</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.js"></script>
<script type="text/javascript" src="/develop/water/Public/backresource/js/H-ui.admin.js"></script>
<script type="text/javascript">
/*资讯-添加*/
function course_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*视频-添加*/
function video_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function category_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-添加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 
<script type="text/javascript">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s)})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>