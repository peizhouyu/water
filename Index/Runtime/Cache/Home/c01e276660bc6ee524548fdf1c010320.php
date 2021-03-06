<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>水利部科技推广中心山西推广工作站</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="水利部科技推广中心山西推广工作站">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<!-- Set render engine for 360 browser -->
		<meta name="renderer" content="webkit">
		<!-- No Baidu Siteapp-->
		<meta http-equiv="Cache-Control" content="no-siteapp" />

		<link rel="shortcut icon" href="favicon.ico">

		<!-- Add to homescreen for Safari on iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="太原理工大学" />
		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="/develop/water/Public/assets/i/app-icon72x72@2x.png">
		<meta name="msapplication-TileColor" content="#0e90d2">
		<link rel="apple-touch-icon-precomposed" href="/develop/water/Public/assets/i/app-icon72x72@2x.png">

		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery-1.8.2.min.js"></script>
		<!--[if (gte IE 9)|!(IE)]><!-->
		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.min.js"></script>
		<!-- 返回顶部、微信二维码 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/backTop.js"></script>
		<!-- BackToTop 当scroll>300消失  -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/float.js"></script>
		<!-- amazeui -->
		<script src="/develop/water/Public/assets/js/amazeui.min.js"></script>

		<script type="text/javascript" src="/develop/water/Public/assets/js/modernizr.js"></script>
		<!-- headroom 集成插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/headroom.js"></script>
		<script type="text/javascript" src="/develop/water/Public/assets/js/jQuery.headroom.js"></script>
		<!-- tooltip 集成插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/tooltip.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/reset.css">
		<!-- CSS reset -->
		<link rel="stylesheet" href="/develop/water/Public/assets/css/amazeui.min.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/img-hover.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/transition.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/news.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/pagination.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/vedioList.css" />
		<!-- pagination style -->

		<!--<![endif]-->
		<!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
  <![endif]-->

	</head>

	<body>

		<div class="am-topbar am-topbar-inverse am-show-lg-only" id="header">
			<div class="am-topbar-package">
				<h1 class="am-topbar-brand">
	    <a href="#" class="am-text-ir"></a>
      </h1>

				<div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
					<ul class="am-nav am-nav-pills am-topbar-nav">
						<li class="am-dropdown"><a href="#" title="工作站概况">工作站概况</a></li>
						<li class="am-dropdown"><a href="#" title="站内业务">站内业务</a></li>
						<li class="am-dropdown"><a href="#" title="产品中心">产品中心</a></li>
						<li class="am-dropdown"><a href="#" title="新闻中心">新闻中心</a></li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
              更多 <i class="iconfont">&#xe610;</i>
            </a>
							<ul class="am-dropdown-content">
								<li><a href="#" title="政策法规">政策法规</a></li>
								<li><a href="#" title="服务中心">服务中心</a></li>
								<li><a href="#" title="合作交流">合作交流</a></li>
							</ul>
						</li>
					</ul>

					<div class="search-box am-topbar-right">
						<form method="get" role="search">
							<input type="text" name="search" class="am-icon-search search" />
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<header data-am-widget="header" class="listStatus am-header am-header-default">
			<div class="am-show-lg-only imgBlur">
				<img class="" src="/develop/water/Public/assets/img/head-img1.jpg">
			</div>
			<div class="am-header-left am-header-nav">
				<a href="#left-link" class="am-show-md-down ">
					<i class="am-header-icon am-icon-angle-left am-icon-md"></i>
				</a>
			</div>
			<h1 class="am-header-title"><?php echo ($data["name2"]); ?></h1>
			<div class="am-header-right am-header-nav">
				<a href="#right-link" class="am-show-md-down ">
					<i class="am-header-icon am-icon-search"></i>
				</a>
			</div>
		</header>

		<div class="clearfix"></div>

		<div class="list">
			<!--  status 状态栏 -->
			<div class="statusBar listBar am-show-md-up">
				<div class="am-g am-g-fixed">
					<div class="am-u-md-6">
						<ol class="am-breadcrumb">
							<li><i class="iconfont">&#xe614;</i>首页</li>
							<li><a href="#"><?php echo ($data["name1"]); ?></a></li>
							<li class="am-active"><?php echo ($data["name2"]); ?></li>
						</ol>
					</div>
					<div class="am-u-md-6">
						<ul class="listSort">
							<li><span>排 序：</span></li>
							<li>
								<a href="">
									<span class="iconfont">&#xe60b;</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="iconfont">&#xe61a;</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="am-icon-thumbs-o-up"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--status 状态栏 END-->
			<!--listNews 列表新闻 Start-->
			<div class="listNews">
				<div class="listNews meetCard">
				<ul class="am-g am-g-fixed am-avg-lg-4 am-avg-md-3 am-avg-sm-1 am-avg-xs-2">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-padding-horizontal-xs">
						<div class="vedioListBox">
							<div class="vedioListImg">
								<a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><img src="<?php echo ($vo["img_url"]); ?>" class="vedioImg"/></a>
								<p><?php echo ($vo["title"]); ?></p>
								<img src="/develop/water/Public/assets/img/shadow2.png" class="shadow"/>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>


				</ul>
			</div>

				<!--pagination 分页 Start-->
				<div class="pagination">
					<section>
						<nav role="navigation">
							<ul class="cd-pagination animated-buttons custom-icons">
								<li class="pageButton"><a href="#"><i>Prev</i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a class="current" href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><span>...</span></li>
								<li><a href="#">20</a></li>
								<li class="pageButton"><a href="#"><i>Next</i></a></li>
							</ul>
						</nav>
						<!-- cd-pagination-wrapper -->
					</section>
				</div>
				<!--pagination 分页 End-->
				<div class="clearfix"></div>
			</div>
			<!--listNews 列表新闻 End-->
		</div>
		<!--list 列表 End-->

		<div class="footerWaterList">
			<div class="footerWater "></div>
		</div>
		<div class="footer">
			<div class="am-g am-g-fixed">
				<div class="am-u-lg-2 am-u-md-12">
					<a href="#" class="logo-bottom">水利部科技推广中心山西推广工作站</a>
					<a href="#" class="logo-bottom-con am-show-lg-only">
						<h4>水利部科技推广中心</h4> 山西推广工作站
					</a>
				</div>
				<div class="am-u-lg-3 am-u-md-6 am-u-sm-12 footer-link">
					<ul>
						<li><a> 业务体系</a></li>
						<li><a href="">联系我们</a></li>
						<li><a href="">新闻中心</a></li>
						<li><a href="">业务专题</a></li>
						<li><a href="">网站声明</a></li>
					</ul>
				</div>
				<div class="am-u-lg-3 am-u-md-6 am-hide-sm-only footer-copyright">
					<ul>
						<li>友情链接</li>
						<li><a href="http://www.mwr.gov.cn">中华人民共和国水利部</a></li>
						<li><a href="http://www.chinawater.net.cn">中国水利国际合作与科技网</a></li>
						<li><a href="http://www.cwsts.com">中国水利科技推广网</a></li>
						<li><a href="http://www.jsgg.com.cn">中国节水灌溉网</a></li>
					</ul>
				</div>
				<div class="am-u-lg-4 am-u-md-12 footer-copyinfo">
					<span>服务热线</span>
					<h2>0351-13123123</h2>
					<span>E-mail:levy@water.gov.cn</span>
					<span>技术支持：互联网+X融合创新实验室</span>
					<div class="clearfix"></div>
				</div>
			</div>
			<a href="" class="footerTop am-hide-sm" title="返回顶部"></a>
		</div>

		<div class="footerDark">
			<div class="am-g am-g-fixed">
				<p class="am-fl">
					© 2016 All Rights Reserved 山西省水利科技推广与发展中心 版权所有
				</p>
				<div class="am-fr footerDarkIcon">
					<a href="http://bszs.conac.cn/sitename?method=show&id=0ADEEABE791210FCE053012819ACEABA" class="am-show-lg-only" title="事业单位"><img src="/develop/water/Public/assets/img/mark.png"></a>
					<a href="http://oa.tyut.edu.cn/hdMessage.hr?operate=disAddMessage" title="qq"><i class="iconfont">&#xe617;</i></a>
					<a data-am-modal="{target: '#doc-modal-3', closeViaDimmer: true, height: 225}" title="微信平台"><i class="iconfont">&#xe615;</i></a>
				</div>
			</div>
		</div>

		<div id="floatPanel">
			<div class="ctrolPanel">
				<a class="arrow" id="floatArrow" title="返回顶部" href="#">
					<i class="iconfont icon-floatBtn">&#xe61f;</i>
				</a>
			</div>
			<div class="qrcodePanel">
				<img src="/develop/water/Public/assets/img/qrcode.png" />
			</div>
		</div>

		<!-- tooltip 提示窗回调函数 -->
		<script type="text/javascript">
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<!-- tooltip 提示窗回调函数 End -->

		<!-- topBar&floatPanel headroom回调函数 -->
		<script type="text/javascript">
			var header = document.getElementById('header');
			var headroomConf = {
				"tolerance": 0,
				"offset": 300,
				"classes": {
					"initial": "animated",
					"pinned": "slideDown",
					"unpinned": "slideUp"
				}
			}
			var headroom = new Headroom(header, headroomConf)
			headroom.init()
			var floatPanel = document.getElementById('floatPanel');
			var floatConf = {
				"tolerance": 0,
				"offset": 300,
				"classes": {
					"initial": "floatAni",
					"pinned": "floatShow",
					"unpinned": "floatHide"
				}
			}
			var floatPanel = new Headroom(floatPanel, floatConf)
			floatPanel.init()
		</script>
		<!-- topBar&floatPanel headroom回调函数  end -->

		<!-- floatArrow返回顶部 & listCard与lisLabel等高 出现与隐藏设定 -->
		<script type="text/javascript">
			float_nav('#floatArrow');
			equalHeight("listLabel", "listCard", "labelSpan");

			function equalHeight(listLabel, listCard, labelSpan) {
				var a = document.getElementById(listLabel);
				var b = document.getElementById(listCard);
				var c = document.getElementById(labelSpan);
				a.style.height = b.scrollHeight + "px";
			}
		</script>
		<!-- floatArrow返回顶部 & listCard与lisLabel等高 出现与隐藏设定 end -->

	</body>

</html>