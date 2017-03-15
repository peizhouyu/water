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
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/nav.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/rev-settings.css" id="main-css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/settings.css" id="main-css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/img-hover.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/appdrag.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/news.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/transition.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/vessay.css">

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

		<header data-am-widget="header" class="listStatus essayStatus am-header am-header-default am-show-md-down">
			<div class="am-header-left am-header-nav">
				<a href="#left-link" class="am-show-md-down ">
					<i class="am-header-icon am-icon-angle-left am-icon-md"></i>
					<h1><?php echo ($data["name2"]); ?></h1>
				</a>
			</div>
			<div class="am-header-right am-header-nav">
				<!-- 手机端 分享Button  -->
				<div data-am-widget="navbar" class="am-cf am-show-md-down">
					<ul class="am-cf">
						<li data-am-navbar-share>
							<a href="#" class="phone-share am-center">
								<span class="am-icon-share-alt"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- 手机端 分享Button END -->
			</div>
		</header>

		<div class="clearfix vessay-seg"></div>

		<div class="essay">
			<div class="am-g am-g-fixed">
				<div class="am-u-lg-8 am-u-md-12">
					<ol class="am-breadcrumb">
						<li>
							<a href="#">
								<i class="iconfont">&#xe614;</i>首页
							</a>
						</li>
						<li><a href="#"><?php echo ($data["name1"]); ?></a></li>
						<li class="am-active"><?php echo ($data["name2"]); ?></li>
					</ol>
					<div class="essay-title-package">
						<div class="essay-title">
							<!-- 文章标题 -->
							<h1 class="am-article-title"><?php echo ($list["title"]); ?></h1>
							<!-- 文章标题 END -->
							<!-- 文章属性 meta -->
							<div class="am-article-meta">
								来源：<a href=""><?php echo ($list["source"]); ?></a> 作者：
								<a href=""><?php echo ($list["author"]); ?></a>
								<p><i class="iconfont">&#xe60b;</i><?php echo ($list["time"]); ?></p>
								<p><i class="iconfont">&#xe60d;</i><?php echo ($list["location"]); ?></p>
							</div>
						</div>
						<!-- essay-title End -->
					</div>
					<!-- essay-title-package End -->

					<div class="essay-content-package" id="essayContent">
						<div class="essay-content">
							<div class="am-g am-g-fixed">
								<div class="am-u-lg-8 am-u-lg-12">
									<div class="am-g">
										<div class="am-u-sm-12 am-u-sm-centered">
											<div class="am-cf am-article">
												<blockquote><img src="/develop/water/Public/assets/img/quote.png" alt="" /><?php echo ($list["info"]); ?></blockquote>
												<?php echo ($list["content"]); ?>
												<div class="clearfix"></div>
											</div>
											<!-- am-article End -->

											<div class="clearfix"></div>

											<div class="usr-action am-g am-g-fixed">
												<div class="am-u-md-3">
													<a href="#" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}" class="am-show-lg-only phone-qrcode">
														<i class="iconfont">&#xe61e;</i>
														<label>手机阅读</label>
													</a>
												</div>
												<div class="essay-sideShare am-u-md-6">
													<h3 class="essay-sideShare-title">分享到:</h3>
													<!-- JiaThis Button BEGIN -->
													<div class="jiathis_style_24x24">
														<a href="">
															<i class="jiathis_button_tsina iconfont icon-weibo">&#xe618;</i>
														</a>
														<a href="">
															<i class="jiathis_button_tsina iconfont icon-weixin">&#xe615;</i>
														</a>
														<a href="">
															<i class="jiathis_button_tsina iconfont icon-qq">&#xe617;</i>
														</a>
														<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
														<a class="jiathis_counter_style"></a>
													</div>
													<!-- JiaThis Button END -->
												</div>
												<div class="am-u-md-3">
													<a class="good-button" href="<?php echo U('Common/likeNum',array('aim'=>$list['aim'],'id'=>$list['id']));?>">
														<i class="iconfont">&#xe61c;</i>
														<label>点赞</label>
													</a>
												</div>
												<!-- 手机端 分享Button  -->
												<div data-am-widget="navbar" class="am-cf usr-share am-show-md-down">
													<ul class="am-cf">
														<li>
															<a href="" class="phone-share am-center">
																<span class="am-icon-thumbs-up"></span>
																<span class="am-navbar-label">点赞</span>
															</a>
														</li>
														<li data-am-navbar-share>
															<a href="#" class="phone-share am-center">
																<span class="am-icon-share-alt"></span>
																<span class="am-navbar-label">分享</span>
															</a>
														</li>
													</ul>
												</div>
												<!-- 手机端 分享Button END -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- essay-content End -->
					</div>
					<!-- essay-content-package End -->

				</div>

				<div class="am-u-lg-4 am-u-md-0">
					<div class="proShowCard proShowCardPages">
						<a class="proShowCard-img" href="#">
							<img src="<?php echo ($hot[0][img_url]); ?>" data-am-pureviewed="1">
							<span class="proShowCard-label"><?php echo ($hot[0][type_value]); ?></span>
							<span class="proShowCard-shadow"></span>
							<h4 class="mainTitle am-text-left" href="#"><?php echo ($hot[0][title]); ?></h4>
						</a>
					</div>

					<div class="hotNews list-card">
						<div class="gather-title">
							<i class="iconfont">&#xe616;</i> 最热新闻
						</div>
						<ul class="gather-list">
							<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>

					<div class="list-card label" id="listLabel">
						<div class="label-title">
							<i class="iconfont">&#xe619;</i> 标 签
						</div>
						<div class="label-span" id="labelSpan">
							<a href="#">水利信息化</a>
							<a href="#">无人机倾斜测量</a>
							<a href="#">污水处理</a>
							<a href="#">沁河干流</a>
							<a href="#">水生态保护</a>
							<a href="#">远距离救生抛投器</a>
							<a href="#">水利系统</a>
							<a href="#">脱水</a>
							<a href="#">多功能金刚石切割片</a>
							<a href="#">3D打印机</a>
							<a href="#">水利科技</a>
							<a href="#">推广会</a>
							<a href="#">交流会</a>
							<a href="#">汾河水库</a>
							<a href="#">灌溉文化</a>
							<a href="#">农田水利</a>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

			<div class="relNews">
				<div class="am-g am-g-fixed">
					<h2>相关阅读</h2>
					<ul class="am-avg-lg-4 am-avg-md-3 am-avg-sm-2">
						<?php if(is_array($related)): $i = 0; $__LIST__ = $related;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="rel-padding-horizontal-xs">
							<div class="rel-box">
								<a class="rel-img" href="#"><img src="<?php echo ($vo["img_url"]); ?>"></a>
								<div class="rel-tit">
									<a class="relTitle am-text-left" href="#"><?php echo ($vo["title"]); ?></a>
									<p class="am-fl"><?php echo ($vo["time"]); ?></p>
									<p class="am-fr"><i class="iconfont">&#xe61a;</i><?php echo ($vo["readnum"]); ?></p>
									<div class="clearfix"></div>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>
			</div>

			<!-- 二维码绘制区域 -->
			<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
				<div class="am-modal-dialog">
					<div class="am-modal-hd">手机扫一扫，直接在手机上观看
						<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
					</div>
					<div class="am-modal-bd">
						<div id="qrcodeCanvas"></div>
					</div>
				</div>
			</div>

			<div class="footerWaterPages">
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

			<!-- jiathis 分享 -->
			<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
			<!-- jiathis 分享 End -->

			<!-- 微信二维码 -->
			<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.qrcode.min.js"></script>
			<script style='text/javascript'>
				$('#qrcodeCanvas').qrcode({
					text: window.location.href, //二维码代表的字符串（本页面的URL）
					width: 160, //二维码宽度
					height: 160 //二维码高度
				});
			</script>
			<!-- 微信二维码 End -->

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

			<!-- floatArrow返回顶部 出现与隐藏设定 -->

			<script type="text/javascript">
				float_nav('#floatArrow');
				equalHeight("essaySideBar", "essayContent");

				function equalHeight(essaySideBar, essayContent) {
					var a = document.getElementById(essaySideBar);
					var b = document.getElementById(essayContent);
					a.style.height = b.scrollHeight + "px";
				}
			</script>

			<!-- floatArrow返回顶部 出现与隐藏设定 end -->

	</body>

</html>