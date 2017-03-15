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
		<!-- 针对IE8的设定，永远以其所支持最高标准浏览器进行渲染 or 安装chrome frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- No Baidu Siteapp 禁止百度转码-->
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<base target="_blank">

		<link rel="shortcut icon" href="favicon.ico">

		<!-- Add to homescreen for Chrome on Android -->
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="192x192" href="/develop/water/Public/assets/i/app-icon72x72@2x.png">

		<!-- Add to homescreen for Safari on iOS -->
		<!-- 添加至主屏, 从主屏进入会隐藏地址栏和状态栏, 全屏(content="yes") -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- 系统顶栏的颜色(content = black、white 和 black-translucent)选其一就可以 -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<!-- 指定标题 -->
		<meta name="apple-mobile-web-app-title" content="太原理工大学" />
		<link rel="apple-touch-icon-precomposed" href="/develop/water/Public/assets/i/app-icon72x72@2x.png">
		<link rel="apple-touch-startup-image" href="/develop/water/Public/assets/i/startup-320x640.png" />

		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="/develop/water/Public/assets/i/app-icon72x72@2x.png">
		<meta name="msapplication-TileColor" content="#293e86">

		<!--[if (gte IE 9)|!(IE)]><!-->
		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.min.js"></script>
		<!-- 幻灯片slide -->
		<script src='/develop/water/Public/assets/js/stopExecutionOnTimeout.js?t=1'></script>
		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.min.js"></script>
		<script src='/develop/water/Public/assets/js/main.js'></script>
		<!-- 返回顶部、微信二维码 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/backTop.js"></script>
		<!-- BackToTop 当scroll>300消失  -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/float.js"></script>
		<!-- amazeui -->
		<script src="/develop/water/Public/assets/js/amazeui.min.js"></script>
		<!-- revolution 回调插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/rev-setting.js"></script>
		<!-- revolution 集成插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.themepunch.revolution.js"></script>

		<script type="text/javascript" src="/develop/water/Public/assets/js/respond.src.js"></script>
		<!-- <script type="text/javascript" src="/develop/water/Public/assets/js/PIE.js"></script> -->
		<!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
  <![endif]-->
		<script type="text/javascript" src="/develop/water/Public/assets/js/selectivizr.js"></script>
		<script type="text/javascript" src="/develop/water/Public/assets/js/modernizr.js"></script>

		<link rel="stylesheet" href="/develop/water/Public/assets/css/slideshows.css" />

		<script src="/develop/water/Public/assets/js/jquery.js"></script>
		<script src="/develop/water/Public/assets/js/jquery.cycle.all.js"></script>
		<script src="/develop/water/Public/assets/js/jquery.easing.1.3.js"></script>
		<script>
			$(function() {
				// ---------------------------------------------------
				// newsSlideshow
				$('#slideshow_1').cycle({
					fx: 'scrollHorz',
					easing: 'easeInOutCirc',
					speed: 700,
					timeout: 5000,
					pager: '.newsSlide .slideshow_paging',
					prev: '.newsSlide .slideshow_prev',
					next: '.newsSlide .slideshow_next',
					before: function(currSlideElement, nextSlideElement) {
						var data = $('.data', $(nextSlideElement)).html();
						$('.newsSlide .slideshow_box .data').fadeOut(300, function() {
							$('.newsSlide .slideshow_box .data').remove();
							$('<div class="data">' + data + '</div>').hide().appendTo('.newsSlide .slideshow_box').fadeIn(600);
						});
					}
				});
				// not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper
				$('.newsSlide').mouseenter(function() {
					$('#slideshow_1').cycle('pause');
				}).mouseleave(function() {
					$('#slideshow_1').cycle('resume');
				});
				$('a[href="#"]').click(function(event) {
					event.preventDefault(); // for this demo disable all links that point to "#"
				});
			});
		</script>
		<!-- accordion 手风琴效果 集成插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/accordion.js"></script>
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/slide.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/reset.css">
		<!-- CSS reset -->
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/transition.css">
		<link rel="stylesheet" href="/develop/water/Public/assets/css/amazeui.min.css">
		<link rel="stylesheet" href="/develop/water/Public/assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/nav.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/rev-settings.css" id="main-css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/settings.css" id="main-css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/img-hover.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/appdrag.css">
		<link rel="stylesheet" type="text/css" href="/develop/water/Public/assets/css/news.css">
		<style type="text/css">
			.am-header-title.am-show-sm-only{
				width: 80%;
				margin: 0 auto;
			}
			@media (max-width: 480px) {
				.am-header-title.am-show-sm-only{
					width: 70%;
				}
			}
		</style>
	</head>

	<body>
		<!--[if IE 8]>
<div class="suggest">
  想获得最佳浏览体验？建议使用
  	<a href="http://dlsw.baidu.com/sw-search-sp/soft/9d/14744/ChromeStandaloneSetup41.0.2272.89.1426235198.exe">chrome</a>
  等<span>同类webkit内核浏览器</span>或将浏览器调整为<span>极速模式</span>
</div>
<![endif]-->

		<header data-am-widget="header" class="am-header am-header-default">
			<div class="am-header-left am-header-nav" data-am-offcanvas="{target: '#doc-oc'}">
				<a href="#left-link" class="am-show-md-down ">
					<i class="iconfont">&#xe61d;</i>
				</a>
			</div>
			<h1 class="am-header-title am-show-sm-only">水利部科技推广中心山西推广工作站</h1>
			<h1 class="am-header-title doc-ir am-show-sm-up" data-am-scrollspy="{animation:'scale-down', delay: 0, repeat: false}">
    			<a href="#title-link" class="am-text-ir"></a>
			</h1>
			<div class="am-header-right am-header-nav">
				<!--<a href="#right-link" class="am-show-md-down ">
      <i class="am-header-icon am-icon-search"></i>
    </a>-->
			</div>
		</header>

		<div class="clearfix"></div>

		<div class="mainNav am-show-lg-only">
			<div class="mainNavSlide" data-am-sticky="{animation: 'slide-top'}">
				<div class="am-g am-g-fixed">
					<ul class="am-avg-lg-7">
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" href="#" title="工作站概况">
            工作站概况
          </a>
							<ul class="am-dropdown-content">
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=0');?>" class="">工作站概况</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=1');?>" class="">组织机构</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=2');?>" class="">资质介绍</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=3');?>" class="">技术装备</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=4');?>" class="">获奖成果</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=5');?>" class="">联系我们</a>
								</li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" href="#" title="站内业务">
            站内业务
          </a>
							<ul class="am-dropdown-content">
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=yewu&id=0');?>" class="">推介会</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=yewu&id=1');?>" class="">交流会</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=yewu&id=2');?>" class="">水利推广</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=yewu&id=3');?>" class="">典型项目</a>
								</li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" href="#" title="产品展示">
            产品展示
          </a>
							<ul class="am-dropdown-content">
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=0');?>">防灾减灾</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=1');?>">农田水利</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=2');?>">水利工程</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=3');?>">农村安全饮水</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=4');?>">水资源开发与节约保护</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=5');?>">水生态与水环境</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=6');?>">水利信息化</a></li>
								<li><a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=7');?>">水利管理及其他</a></li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" href="#" title="新闻中心">
            新闻中心
          </a>
							<ul class="am-dropdown-content">
								<li>
									<a href="<?php echo U('Index/NavSelect?aim=xinwen&id=0');?>" class="">公示公告</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=xinwen&id=1');?>" class="">站内动态</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=xinwen&id=2');?>" class="">水利科技动态</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=xinwen&id=3');?>" class="">图片新闻</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=xinwen&id=4');?>" class="">视频新闻</a>
								</li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" href="#" title="政策法规">
            政策法规
          </a>
							<ul class="am-dropdown-content">
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=fagui&id=0');?>" class="">省内政策</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=fagui&id=1');?>" class="">国家政策</a>
								</li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" title="服务中心">
            服务中心
          </a>
							<ul class="am-dropdown-content">
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=fuwu&id=0');?>" class="">人才培训</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=fuwu&id=1');?>" class="">相关下载</a>
								</li>
							</ul>
						</li>
						<li class="am-dropdown" data-am-dropdown>
							<a class="am-dropdown-toggle" data-am-dropdown-toggle target="_blank" title="合作交流">
            合作交流
          </a>
							<ul class="am-dropdown-content">
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=jiaoliu&id=0');?>" class="">合作伙伴</a>
								</li>
								<li class="">
									<a href="<?php echo U('Index/NavSelect?aim=jiaoliu&id=1');?>" class="">友情链接</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
			<div class="am-offcanvas" id="doc-oc">
				<div class="am-offcanvas-bar">
					<!--<div class="eng-link">
        <a href="#" class="am-btn am-btn-primary">
          <i class="am-icon-location-arrow"></i> English Version
        </a>
      </div>-->

					<ul class="am-menu-nav am-avg-sm-1">
						<li class="">
							<img src="/develop/water/Public/assets/img/logo-inner.png" />
						</li>
						<li class="">
							<a href="#" class="">工作站概况</a>
						</li>
						<li class="">
							<a href="" class="">站内业务</a>
						</li>
						<li class="">
							<a href="#" class="">产品展示</a>
						</li>
						<li class="">
							<a href="" class="">新闻中心</a>
						</li>
						<li class="">
							<a href="#" class="">政策法规</a>
						</li>
						<li class="">
							<a href="" class="">服务中心</a>
						</li>
						<li class="">
							<a href="#" class="">合作交流</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="clearfix"></div>

		<!--  Revolution Slide -->
		<div class="slider-container">
			<div class="slider-control left inactive"></div>
			<div class="slider-control right"></div>
			<ul class="slider-pagi"></ul>
			<div class="slider-box">
				<div class="slider">
					<?php if(is_array($bannerlist)): $i = 0; $__LIST__ = $bannerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="slide slide-<?php echo ($vo["id"]); ?> active">
						<div class="slide__bg" style="background-image: url(<?php echo ($vo["img_url"]); ?>);"></div>
						<div class="slide__content">
							<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
								<path class="slide__overlay-path" d="M0,0 1080,0 1080,1080 0,1080" />
							</svg>
							<div class="slide__text">
								<a href="<?php echo ($vo["dump_url"]); ?>">
									<h2 class="slide__text-heading"><?php echo ($vo["title"]); ?></h2>
									<p class="slide__text-desc"><?php echo ($vo["secondtitle"]); ?></p>
								</a>
								<img class="slide__dec" src="/develop/water/Public/assets/img/dec.png" />
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>


				</div>
			</div>
		</div>

		<div class="mask"></div>

		<div class="clearfix"></div>

		<div class="video-info">
			<ul class="am-g am-g-fixed am-avg-sm-1">
				<div class="video-title" data-am-scrollspy="{animation:'slide-top', delay: 100, repeat: false}">
					<a href="#"><h2>新闻中心</h2></a>
					<span>NEWS CENTER</span>
					<a class="more" href="<?php echo U('Content/newsCenter?aim=news');?>">更多》</a>
				</div>
			</ul>
			<ul class="am-g am-g-fixed am-avg-sm-1 am-avg-md-1 am-avg-lg-2">
				<li class="list-padding-horizontal-md am-avg-lg-1 newsSlideBox">
					<div class="newsSlide">

						<a href="#" class="slideshow_prev"><i class="iconfont">&#xe613;</i></a>
						<a href="#" class="slideshow_next"><i class="iconfont">&#xe611;</i></a>

						<div class="slideshow_box">
							<div class="data"></div>
						</div>
						<div class="slideshowBox">
							<div id="slideshow_1" class="slideshow">
								<?php if(is_array($news_pic)): $i = 0; $__LIST__ = $news_pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="slideshow_item">
									<div class="image">
										<a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><img src="<?php echo ($vo["img_url"]); ?>" alt="photo 2" /></a>
									</div>
									<div class="data">
										<h4><a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a></h4>
										<p class="am-hide-sm"><?php echo ($vo["info"]); ?></p>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>


							</div>
						</div>
					</div>
					<!-- .newsSlide -->

				</li>
				<li class="infoCenter">
					<ul class="am-list">

						<?php if(is_array($news_pic)): $i = 0; $__LIST__ = $news_pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="am-g am-g-collapse" data-am-scrollspy="{animation:'slide-bottom', delay:100, repeat: false}">
							<div class="date am-u-sm-2">
								<h3>23</h3>
								<span>11月</span>
							</div>
							<div class="box am-u-sm-10">
								<a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?> </a>
								<p><?php echo ($vo["info"]); ?></p>
							</div>
							<div class="infoBack"></div>
						</li>
						<div class="clear-info"></div><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</li>
			</ul>
		</div>

		<div class="clearfix"></div>

		<div class="workstation">
			<div class="am-g am-g-fixed">
				<div class="workEng"></div>
				<a href="#" class="workTitle">
					<h2>工作站概况</h2>
				</a>
			</div>
			<div class="am-g am-g-fixed">
				<ul data-am-widget="gallery" class="am-avg-md-6 am-avg-lg-6 am-gallery-default workIcon">
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=0');?>" class="svgBack">
							<i class="iconfont">&#xe608;</i>
							<h4>工作站简介</h4>
						</a>
					</li>
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=1');?>" class="svgBack">
							<i class="iconfont">&#xe607;</i>
							<h4>组织机构</h4>
						</a>
					</li>
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=2');?>" class="svgBack">
							<i class="iconfont">&#xe606;</i>
							<h4>资质介绍</h4>
						</a>
					</li>
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=3');?>" class="svgBack">
							<i class="iconfont">&#xe601;</i>
							<h4>技术装备</h4>
						</a>
					</li>
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=4');?>" class="svgBack">
							<i class="iconfont">&#xe602;</i>
							<h4>获奖成果</h4>
						</a>
					</li>
					<li class="am-u-sm-4">
						<a href="<?php echo U('Index/NavSelect?aim=gaikuang&id=5');?>" class="svgBack">
							<i class="iconfont">&#xe60a;</i>
							<h4>联系我们</h4>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="seg1 am-show-lg-only"></div>
		<div class="video-info">
			<ul class="am-g am-g-fixed am-avg-sm-1">
				<div class="video-title" data-am-scrollspy="{animation:'slide-top', delay: 100, repeat: false}">
					<a href="#"><h2>站内业务</h2></a>
					<span>STATION SERVICE</span>
					<a class="more" href="<?php echo U('Content/newsCenter?aim=yewu');?>">更多》</a>
				</div>
			</ul>

			<div class="listNews projectCard">
				<ul class="am-g am-g-fixed am-avg-lg-3 am-avg-md-2 am-avg-sm-1">
					<?php if(is_array($news_zhannei1)): $i = 0; $__LIST__ = $news_zhannei1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-padding-horizontal-xs">
						<div class="list-card" id="listCard">
							<a class="list-img" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>">
								<img src="<?php echo ($vo["img_url"]); ?>">
								<span class="list-label"><?php echo ($vo["type_value"]); ?></span>
							</a>
							<div class="list-tit">
								<a class="mainTitle am-text-left" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>

								<p class="am-fl"><i class="iconfont">&#xe60b;</i><?php echo ($vo["time"]); ?></p>
								<p class="am-fl"><i class="iconfont">&#xe60d;</i><?php echo ($vo["location"]); ?></p>

								<div class="clearfix"></div>

								<p class="subTitle"><?php echo ($vo["info"]); ?></p>
								<a href="#" class="knowButton">了解项目成效></a>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>

			<div class="listNews meetCard">
				<ul class="am-g am-g-fixed am-avg-lg-4 am-avg-md-2 am-avg-sm-2 am-avg-xs-2">
					<?php if(is_array($news_zhannei2)): $i = 0; $__LIST__ = $news_zhannei2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-padding-horizontal-xs">
						<div class="list-card" id="listCard">
							<a class="list-img" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>">
								<img src="<?php echo ($vo["img_url"]); ?>">
							</a>
							<a href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>" class="list-label">交流会</a>
							<div class="list-tit">
								<a class="mainTitle am-text-left mui-ellipsis-2" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
								<div class="clearfix"></div>
								<p class="subTitle"><?php echo ($vo["info"]); ?></p>
								<p class="am-fl"><i class="iconfont">&#xe60b;</i><?php echo ($vo["time"]); ?></p>
								<p class="am-fr"><i class="iconfont">&#xe60d;</i><?php echo ($vo["location"]); ?></p>

								<div class="clearfix"></div>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="am-show-md-up proShow">
			<div class="am-g am-g-fixed proShow-tit">
				<a href="#">
					<h2>产品展示</h2>
					<span>PRODUCT DISPLAY</span>
				</a>
				<span class="am-hide-sm">——我们注重每一个细节，精益求精，力求完美</span>
				<img class="slide__dec" src="/develop/water/Public/assets/img/dec.png" />
			</div>
			<div class="am-g am-g-fixed proShow-con">
				<ul data-am-widget="gallery" class="am-gallery am-gallery-default am-avg-md-3 am-avg-lg-4" data-am-gallery="{ pureview: true }">
					<li class="am-u-sm-6">
						<div class="data-subNav proShow-subNav">
							<div class="data-accordion-package">
								<ul id="data-accordion" class="data-accordion">
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=0');?>">防震减灾</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=1');?>">农田水利</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=2');?>">水利工程</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=3');?>">农村安全饮水</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=4');?>">水资源开发与节约保护</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=5');?>">水生态与水环境</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=6');?>">水利信息化</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
									<li>
										<div class="data-link">
											<a href="<?php echo U('Index/NavSelect?aim=zhanshi&id=7');?>">水利管理与其他</a>
											<i class="iconfont">&#xe610;</i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<?php if(is_array($productlist)): $i = 0; $__LIST__ = $productlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="am-u-sm-6">
						<div class="proShowCard">
							<a class="proShowCard-img" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>">
								<img src="<?php echo ($vo["img_url"]); ?>">
								<span class="proShowCard-label"><?php echo ($vo["type_value"]); ?></span>
							</a>
							<div class="proShowCard-tit">
								<a class="mainTitle am-text-left" href="<?php echo U('Content/showPage',array('aim'=>$vo['aim'],'id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
								<div class="clearfix"></div>
								<p class="subTitle"><?php echo ($vo["info"]); ?></p>
								<div class="proShowCard-info"><i class="iconfont">&#xe60e;</i><?php echo ($vo["company"]); ?></div>
								<div class="proShowCard-info"><i class="iconfont">&#xe60c;</i><?php echo ($vo["company_tel"]); ?></div>

								<div class="clearfix"></div>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>


				</ul>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="footerWater"></div>
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
			<a href="javascript:;" class="footerTop am-hide-sm"></a>
		</div>

		<div class="footerDark">
			<div class="am-g am-g-fixed">
				<p class="am-fl">
					© 2016 All Rights Reserved 山西省水利科技推广与发展中心 版权所有
				</p>
				<div class="am-fr footerDarkIcon">
					<a href="http://bszs.conac.cn/sitename?method=show&id=0ADEEABE791210FCE053012819ACEABA" class="am-show-lg-only" title="事业单位"><img src="/develop/water/Public/assets/img/mark.png"></a>
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



		<!-- floatArrow返回顶部 出现与隐藏设定 -->
		<script type="text/javascript">
			float_nav('#floatArrow');
		</script>
		<!-- floatArrow返回顶部 出现与隐藏设定 end -->

		<!-- app-tyut 集成插件 -->
		<script type="text/javascript" src="/develop/water/Public/assets/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="/develop/water/Public/assets/js/scripts.js"></script>

		<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/develop/water/Public/assets/js/polyfill/rem.min.js"></script>
<script src="/develop/water/Public/assets/js/polyfill/respond.min.js"></script>
<script src="/develop/water/Public/assets/js/amazeui.legacy.js"></script>
<![endif]-->

	</body>

</html>