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
		<link rel="stylesheet" href="/develop/water/Public/assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/img-hover.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/news.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/transition.css" />
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/pagination.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/vessay.css" />
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/fonts/iconfont.css" />
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/vedio.css" />
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

		<div class="videoPlay">
			<div class="videoPlay-panel">
				<div class="am-g am-g-fixed">

					<div class="am-u-sm-12">
						<ol class="am-breadcrumb am-show-lg-only">
							<li><a href="#" class="am-icon-home">首页</a></li>
							<li><a href="#"><?php echo ($data["name1"]); ?></a></li>
							<li class="am-active"><?php echo ($data["name2"]); ?></li>
						</ol>
						<div class="clearfix"></div>
						<!-- 文章标题 -->
						<h1 class="videoPlay-title am-show-lg-only"><?php echo ($list["title"]); ?></h1>
						<!-- 文章标题 END -->
						<div class="video-package">
							<video controls="controls" controls preload="none" data-setup="{}" poster="">
								<source src="<?php echo ($list["video_url"]); ?>" type='video/mp4' />
								<!--<source src="/develop/water/Public/assets/super.webm" type='video/webm' />-->
								<!--<source src="/develop/water/Public/assets/super.ogv" type='video/ogg' />-->
								<track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track>
								<!-- Tracks need an ending tag thanks to IE9 -->
								<track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track>
								<!-- Tracks need an ending tag thanks to IE9 -->
								<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
							</video>
						</div>

					</div>

					<div class="am-u-lg-8 am-u-md-8 am-u-sm-8">
						<h1 class="videoPlay-title am-show-md-down">太原理工大学形象宣传片</h1>

						<div class="videoPlay-good am-hide-sm-only">
							<a href=""><span class="videoPlay-good-icon"></span> 1732</a> |
						</div>
						<div class="videoPlay-share am-hide-sm-only">
							<h3 class="videoPlay-share-title">分享到：</h3>
							<!-- JiaThis Button BEGIN -->
							<div class="jiathis_style_24x24">
								<a class="jiathis_button_tsina am-icon-weibo"></a>
								<a class="jiathis_button_weixin am-icon-weixin"></a>
								<a class="jiathis_button_cqq am-icon-qq"></a>
								<a class="jiathis_button_tqq am-icon-tencent-weibo"></a>
								<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
								<a class="jiathis_counter_style"></a>
							</div>
							<!-- JiaThis Button END -->
						</div>
					</div>
					<div class="am-u-lg-4 am-u-md-4 am-u-sm-4">
						<div class="videoPlay-times">
							<h3><?php echo ($list["readnum"]); ?></h3><span>次播放</span>
						</div>
					</div>
					<div class="videoPlay-good-phone">
						<a href=""><span class="videoPlay-good-icon"></span> 1732</a>
					</div>
				</div>
			</div>
			<!--  videoPlay-panel End  -->

			<div class="videoPlay-meta">
				<div class="am-g am-g-fixed">
					<div class="am-u-lg-8">
						<div class="videoPlay-meta-info">
							<div class="videoPlay-meta-title"><span class="am-icon-newspaper-o"></span>视频详情</div>
							<ul class="videoPlay-meta-list">
								<li><span>出品人：</span>李海星</li>
								<li><span>制片人：</span>李俊生；高航</li>
								<li><span>导 演：</span>周涛；吴智江；</li>
								<li><span>艺术指导：</span>潘引来</li>
								<li><span>总监制：</span>赵慧；杨新生</li>
								<li><span>主演：</span>黄纬</li>
								<li><span>演员：</span>刘玉花；赵旭岚；爱心家园成员</li>
								<li><span>摄制单位：</span>清泽微视</li>
							</ul>
							<div class="videoPlay-meta-intro">
								<h4>简介：</h4>
								<p>不幸的女主自出生便成了孤儿，更为不幸的是，其养母在其十二岁时就病故。独立生活长大的女主由于长期身处贫困并缺乏关爱变得孤僻、自卑。然而，也正是这种贫困和缺爱的环境使得她衷心学习最终考上重点名校太原理工大学。虽然她依靠贷款缴清了学费，就在她以为自己会在这种冷冰的深渊中苦难一生时，一个伸手便照亮她世界的人出现了……</p>
							</div>
						</div>
					</div>
					<!--  am-u-lg-8 End -->
					<div class="am-u-lg-4">
						<div class="label">
							<div class="label-title"><span class="am-icon-tags"></span>标签</div>
							<div class="label-span"><a href="#">梦想在路上</a><a href="#">机器人</a><a href="#">音乐</a><a href="#">方程式车</a><a href="#">3D打印机</a><a href="#">书记校长贺词</a><a href="#">梦想在路上</a><a href="#">机器人</a><a href="#">音乐</a><a href="#">书记校长贺词</a><a href="#">机器人</a><a href="#">音乐</a><a href="#">清泽心雨</a></div>
						</div>
					</div>
				</div>
				<!--  am-u-lg-4 End -->
			</div>
			<!--  videoPlay-meta End -->

		</div>
		<!--  videoPlay End -->

		<div class="clearfix"></div>

		<div class="vedioInfo">

		</div>

		<div class="clearfix"></div>

		<div class="footerWaterList footerWaterListBlack">
			<div class="footerWater"></div>
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

		<!-- jiathis 分享 -->
		<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
		<!-- jiathis 分享 End -->

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