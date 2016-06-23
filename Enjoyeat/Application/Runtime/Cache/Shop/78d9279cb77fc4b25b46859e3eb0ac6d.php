<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">
[uib-typeahead-popup].dropdown-menu{display:block;}
</style>
<style type="text/css">
.uib-time input{width:50px;}
</style>
<style type="text/css">
 .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}
</style>
<style type="text/css">
.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}
</style>
<style type="text/css">
.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}
</style>
<style type="text/css">
.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}
</style>
<style type="text/css">
.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}
</style>
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
</style>
<meta charset="utf-8">
<title>开店申请</title>
<meta name="description" content="开店申请">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="https://static2.ele.me/eleme/desktop/media/img/favicon-32x32.png" type="image/x-icon">
<!-- base href="https://kaidian.ele.me/" -->
<link href="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/app_002.css" rel="stylesheet">
<link href="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/app.css" rel="stylesheet">
</head>
<body class="ng-scope" ng-app="nevermore">
<!-- uiView: --><ui-view class="ng-scope"><!-- ngInclude: 'modules/records/header.html' -->
<div class="ng-scope" ng-include="'modules/records/header.html'">
	<header class="row ng-scope">
	<div>
		<a href="https://kaidian.ele.me/" ui-sref="home" style="text-decoration: none"><img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/73caa017b45adf0004bcb332f168d264.svg" alt="LOGO">
		<span class="ml-10">商户中心</span></a>
		<div class="pull-right ng-binding">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/25bf9c3b73ffd2e9c3b986898f026fa9.svg"> 123412342343 <img class="arrow" src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/020803b31ca45a097708c0cebcf12571.svg">
			<div class="quit-account">
				<a href="#" ui-sref="home"> 退出账号 </a>
			</div>
		</div>
	</div>
	</header>
</div>
<div class="ng-scope ng-isolate-scope" id="guide" ga-point="{title:'过渡页'}">
	<section>
	<h1>准备好如下材料，申请开店更方便</h1>
	<div class="guide-wrap clearfix">
		<div class="guide-box">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/guide_store.png" alt="门头照">
			<hr>
			<dl>
				<dt><span style="vertical-align:middle;display: inline-block;margin-bottom: -1px">1.</span>门头照</dt>
				<dd> a.从店面正前方取景，光线明亮 </dd><dd> b.店面招牌和店面大门全景拍摄 </dd><dd> c.图片不得有水印、LOGO和其他网站信息 </dd>
			</dl>
		</div>
		<div class="guide-box">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/guide_inner.png" alt="店内照">
			<hr>
			<dl>
				<dt><span style="vertical-align:middle;display: inline-block;margin-bottom: -1px">2.</span>店内照</dt>
				<dd> a.体现主要经营环境，包含桌椅、墙面、地板等 </dd><dd> b.地面干净，无明显油污及垃圾；墙面无霉斑 </dd><dd> c.照片如有工作人员，着装干净整洁 </dd><dd> d.图片不得有水印、LOGO和其他网站信息 </dd>
			</dl>
		</div>
		<div class="guide-box margin-right-0">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/guide_identity.png" alt="身份证照">
			<hr>
			<dl>
				<dt><span style="vertical-align:middle;display: inline-block;margin-bottom: -1px">3.</span>身份证正反面照</dt>
				<dd> a.证件照正面一张，反面一张 </dd><dd> b.证件清晰可辨认，不得使用复印件 </dd>
			</dl>
		</div>
		<div class="guide-box">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/guide_business_license.png" alt="营业执照">
			<hr>
			<dl>
				<dt><span style="vertical-align:middle;display: inline-block;margin-bottom: -1px">4.</span>营业执照</dt>
				<dd> a.证照边框及国徽必须包含在内 </dd><dd> b.证照拍摄角度应为“正视”，不得出 现歪斜现象 </dd><dd> c.证件清晰可辨认，不得使用复印件 </dd>
			</dl>
		</div>
		<div class="guide-box">
			<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/guide_service_license.png" alt="服务许可证">
			<hr>
			<dl>
				<dt><span style="vertical-align:middle;display: inline-block;margin-bottom: -1px">5.</span>餐饮服务许可证</dt>
				<dd> a.证照边框必须包含在内 </dd><dd> b.证照拍摄角度应为“正视”，不得出 现歪斜现象 </dd><dd> c.证件清晰可辨认，不得使用复印件 </dd>
			</dl>
		</div>
	</div>
	<p class="text-center">
		<a href="<?php echo U('Register/shopinfo');?>" type="button" ga-point="" class="btn btn-primary btn-lg ng-isolate-scope" ng-click="confirm()">准备好了</a>
	</p>
	</section><footer>
	<div class="footer">
		<div class="box margin-0 clearfix">
			<div class="other-copyright">
				<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/586b06784b835e1264be08c9a278a45b.svg" alt="">
				<span class="copyright-text ng-binding">© ele.me 2016</span>
			</div>
			<div class="about">
				<div class="row">
					<div class="about-info">
						<h5>用户帮助</h5>
						<ul class="list-unstyled">
							<li><a href="http://www.ele.me/support/center" target="_blank">服务中心</a></li>
							<li><a href="http://www.ele.me/support/question/default" target="_blank">常见问题</a></li>
						</ul>
					</div>
					<div class="about-info">
						<h5>商务合作</h5>
						<ul class="list-unstyled">
							<li><a href="http://www.ele.me/support/about/jiameng" target="_blank">加盟指南</a></li>
							<li><a href="http://www.ele.me/support/about/contact" target="_blank">市场合作</a></li>
						</ul>
					</div>
					<div class="about-info">
						<h5>关于我们</h5>
						<ul class="list-unstyled">
							<li><a href="http://www.ele.me/support/about" target="_blank">饿了么介绍</a></li>
							<li><a href="http://jobs.ele.me/" target="_blank">加入我们</a></li>
							<li><a href="http://www.ele.me/support/about/contact" target="_blank">联系我们</a></li>
							<li><a href="http://www.ele.me/support/about/agreement" target="_blank">服务协议</a></li>
						</ul>
					</div>
					<div class="about-info">
						<h5>其他</h5>
						<ul class="list-unstyled">
							<li><a href="https://kaidian.ele.me/process.pdf" target="_blank" class="download"> 餐厅办证流程 <img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/ae3716b6694c3f6effbee4997b6038da.svg" alt="下载"></a></li>
							<li><a href="https://kaidian.ele.me/standard.pdf" target="_blank" class="download"> 餐厅经验卫生标准 <img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/ae3716b6694c3f6effbee4997b6038da.svg" alt="下载"></a></li>
						</ul>
					</div>
					<div class="footer-info">
						<ul class="list-unstyled">
							<li>24小时客服热线 : 10105757</li>
							<li>意见反馈 : feedback@ele.me</li>
							<li><span class="inline-block about-us-title">关于我们 :</span>
							<span class="inline-block">
							<div href="javascript:;" class="icon-wechat">
								<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/c681b66b64bec947d63fb0417b9bc3e5.svg" alt="微信">
								<div class="dropbox dropbox-bottom footer-contect-dropbox">
									<img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/wexinqc1002x.png" alt="微信号: elemeorder">
									<p>
										微信号: elemeorder
									</p>
									<p>
										饿了么网上订餐
									</p>
								</div>
							</div>
							<a href="http://e.weibo.com/elemeorder" target="_blank"><img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/3a2cbc5d1431408e74e9248187469d1d.svg" alt=""></a>
							<a href="http://page.renren.com/elemeorder" target="_blank"><img src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/12a0c873b21534dd22771d047116000f.svg" alt=""></a></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
</ui-view>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/analytics.js" async=""></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/nevermore.js"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/ga.js"></script>
<script type="text/javascript" src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/vendor.js"></script>
<script type="text/javascript" src="/1/gg/XDLProject/Enjoyeat/Public/Shop/ready/app.js"></script>
</body>
</html>