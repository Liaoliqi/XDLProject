<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0027)https://www.ele.me/profile/ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
</style>
<meta charset="utf-8">
<title ng-bind="SEO.title" class="ng-binding">个人中心 | 享吃网上订餐</title>
<link href="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/vendor.cba496.css" rel="stylesheet">
<link href="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/profile.7433e7.css" rel="stylesheet">
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/perf.js" type="text/javascript" crossorigin="anonymous"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/vendor.8d538f.js" type="text/javascript" crossorigin="anonymous"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/profile.5fbed1.js" type="text/javascript" crossorigin="anonymous"></script>
</head>


<!-- header头开始 -->



<body ie8wide="" cute-title="" ng-class="{hidesidebar: layoutState && layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}" lim:visitorcapacity="1" style="position: relative;">
<div ng-switch="state.type" state="layoutState" class="ng-isolate-scope">
    <!-- ngSwitchWhen: checkout --><!-- ngSwitchDefault:  -->
    <div ng-switch-default="" topbar-default="" state="state" class="ng-scope ng-isolate-scope">
        <header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === 'shop'}">
        <div class="container clearfix">
            <h1><a href="" hardjump="" class="topbar-logo icon-logo"><span>饿了么</span></a></h1>
            <a href="" hardjump="" class="topbar-item topbar-homepuserinfo/age" ng-class="{'focus': $root.locationpath[0] === 'place'}">首页</a><!-- ngIf: $root.place.premiumCount > 0 --><a ng-if="$root.place.premiumCount &gt; 0" ng-href="" hardjump="" class="topbar-item ng-scope" ng-class="{'focus': $root.locationpath[0] === 'premium'}" href="">品牌商家<i class="elemeicon elemeicon-hot"></i></a><!-- end ngIf: $root.place.premiumCount > 0 --> <a href="" hardjump="" class="topbar-item" ng-class="{'focus': $root.locationpath[1] === 'order'}">我的订单</a><a href="" target="_blank" class="topbar-item cooperation">加盟合作</a><nav class="topbar-nav"><a href="" hardjump="" class="topbar-nav-link" ng-class="{'focus': $root.locationpath[0] === 'gift'}"><i class="topbar-nav-icon icon-gift"></i>积分商城</a><a href="" hardjump="" class="topbar-nav-link" target="_blank"><i class="topbar-nav-icon icon-service"></i>服务中心</a>
            <div class="topbar-nav-link">
                <i class="topbar-nav-icon icon-mobile"></i>手机应用
                <div class="dropbox topbar-mobile-dropbox">
                    <span>扫一扫, 手机订餐更方便</span><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/appqc.852963.png" class="topbar-nav-qrcode" alt="扫一扫下载饿了么手机 App">
                </div>
            </div>
            <div topbar-profilebox="">
                <div class="topbar-profilebox">
                    <!-- ngIf: $root.user.avatar && $root.topbarType !== 'checkout' --><span class="topbar-profilebox-avatar icon-profile ng-hide" ng-show="!$root.user.username"></span><span ng-show="!$root.user.username" class="ng-hide"><a ng-href="" target="_blank" href="">登录</a>/<a ng-href="" target="_blank" href="">注册</a></span><span class="topbar-profilebox-wrapper" ng-show="$root.user.username"><!-- ngIf: $root.topbarType === 'checkout' --><span class="topbar-profilebox-username ng-binding">昵称</span><!-- ngIf: $root.topbarType === 'checkout' --><!-- ngIf: $root.topbarType !== 'checkout' --><span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== 'checkout'"></span><!-- end ngIf: $root.topbarType !== 'checkout' -->
                    <div class="dropbox topbar-profilebox-dropbox">
                        <a class="icon-profile" href="" hardjump="">个人中心</a><a class="icon-star" href="" hardjump="">我的收藏</a><a class="icon-location" href="" hardjump="">我的地址</a><a class="icon-setting" href="" hardjump="">安全设置</a><a class="icon-logout" href="JavaScript:" ng-click="logout()">退出登录</a>
                    </div>
                    </span>
                </div>
            </div>
            </nav>
        </div>
        </header>
    </div>
</div>




<!-- 右侧栏的购物车 -->


<div class="sidebar" role="complementary" ng-hide="layoutState && layoutState.hideSidebar">
    <div class="sidebar-tabs">
        <div class="toolbar-tabs-middle">
            <a class="toolbar-btn icon-order toolbar-close" href="https://www.ele.me/profile/order" hardjump="" tooltip="我的订单" tooltip-placement="left" ubt-click="toolbar_order"><!-- ngIf: sidebarCount.uncompletedOrder > 0 --></a>
            <div class="toolbar-separator">
            </div>
            <a class="toolbar-cartbtn icon-cart toolbar-open" href="JavaScript:" template="cart" ng-class="{'focus': (activeTemplate === 'cart' && isSidebarOpen), 'toolbar-cartbtn-shownum': foodCount.count}" ubt-click="390">购物车<!-- ngIf: foodCount.count --></a>
            <div class="toolbar-separator">
            </div>
            <a class="toolbar-btn icon-notice toolbar-open modal-hide" href="JavaScript:" template="message" ng-class="{'focus': (activeTemplate === 'message' && isSidebarOpen), 'toolbar-open': user, 'modal-hide': user}" tooltip="我的信息" title="我的信息" tooltip-placement="left" ubt-click="392"><!-- ngIf: messageCount.count --></a><a class="toolbar-btn icon-history toolbar-open" href="JavaScript:" template="history" ng-class="{'focus': (activeTemplate === 'history' && isSidebarOpen)}" tooltip="浏览历史" title="浏览历史" tooltip-placement="left" ubt-click="393"></a>
        </div>
        <div class="toolbar-tabs-bottom">
            <div class="toolbar-btn icon-QR-code">
                <div class="dropbox toolbar-tabs-dropbox">
                    <a href="" target="_blank"><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/appqc.852963.png" alt="下载手机应用">
                    <p>
                        下载手机应用
                    </p>
                    <p class="icon-QR-code-bonus">
                        即可参加分享红包活动
                    </p>
                    </a>
                </div>
            </div>
            <a class="toolbar-btn icon-service" online-service="" tooltip="在线客服" title="在线客服" tooltip-placement="left" id="live800iconlink" target="_blank" href="JavaScript:" style="visibility: visible;"></a><a class="toolbar-btn sidebar-btn-backtop icon-top" tooltip="回到顶部" title="回到顶部" href="JavaScript:" tooltip-placement="left" style="visibility: hidden;"></a>
        </div>
    </div>
    <div class="sidebar-content">
        <!-- ngInclude: activeTemplate ? ('/common/page/_block/sidebar/sidebar-'+ activeTemplate + '/sidebar-'+ activeTemplate + '.html') : '' -->
    </div>
</div>
<div class="importantnotification container" role="banner">
    <!-- ngIf: enable -->
</div>
<!-- ngView:  -->
<div ng-view="" role="main" class="ng-scope">
    <div class="profile profile-container container" profile-container="" page-name="profile" page-title="个人中心" page-title-visible="false">
        <div class="clearfix">
            <div class="location" ng-style="{visibility: geohash ? '' : 'hidden'}" role="navigation" location="">
                <span>当前位置:</span><span class="location-current"><a class="inherit ng-binding" ng-href="/place/wtw652tyz4q" ubt-click="401" ng-bind="place.name || place.address" href="">闸北区上海信息服务外包产业园龙软万荣基地</a></span><span class="location-change" ng-class="{ 'location-hashistory': user.username && userPlaces && userPlaces.length &gt; 0 }"><a ng-href="/home"userinfo/ ubt-click="400" hardjump="" href="">[切换地址]</a>
                <ul class="dropbox location-dropbox" ubt-visit="398">
                    <li class="arrow"></li>
                    <!-- ngRepeat: userPlace in userPlaces | filter:filterPlace | limitTo: 4 -->
                    <li class="changelocation"><a ng-href="/home"userinfo/ hardjump="" href="">修改收货地址<span class="icon-location"></span></a></li>
                </ul>
                </span><span ng-transclude=""><i class="icon-arrow-right ng-scope"></i><span class="ng-binding ng-scope">个人中心</span></span>
            </div>
            <div search-input="">
            </div>
        </div>
        <ul class="profile-sidebar" role="navigation" profile-sidebar="">
            <li class="profile-sidebar-section">
            <h2 class="profile-sidebar-sectiontitle active" ng-class="{ active: pageName === 'profile' }"><i class="icon-line-home"userinfo/></i><a href="">个人中心</a></h2>
            </li>
            <li class="profile-sidebar-section">
            <h2 class="profile-sidebar-sectiontitle"><i class="icon-line-order"></i>我的订单</h2>
            <ul>
                <li ng-class="{ active: pageName === 'order' }"><a href="">近三个月订单</a></li>
                <li ng-class="{ active: pageName === 'order-unrated' }"><a href="">待评价订单<!-- ngIf: unratedNumber --></a></li>
                <li ng-class="{ active: pageName === 'order-refunding' }"><a href="">退单记录</a></li>
            </ul>
            </li>
            <li class="profile-sidebar-section">
            <h2 class="profile-sidebar-sectiontitle"><i class="icon-yen"></i>我的资产</h2>
            <ul>
                <li ng-class="{ active: pageName === 'hongbao' }"><a href="">我的红包</a></li>
                <li ng-class="{ active: pageName === 'balance' }"><a href="">账户余额</a></li>
                <li ng-class="{ active: pageName === 'points' }"><a href="">我的积分</a></li>
            </ul>
            </li>
            <li class="profile-sidebar-section">
            <h2 class="profile-sidebar-sectiontitle"><i class="icon-line-profile"></i>我的资料</h2>
            <ul>
                <li ng-class="{ active: pageName === 'info' }"><a href="">个人资料</a></li>
                <li ng-class="{ active: pageName === 'address' }"><a href="">地址管理</a></li>
                <li ng-class="{ active: pageName === 'security-center' }"><a href="">安全中心</a></li>
                <li ng-class="{ active: pageName === 'changepassword' }"><a href="">修改密码</a></li>
            </ul>
            </li>
            <li class="profile-sidebar-section">
            <h2 class="profile-sidebar-sectiontitle" ng-class="{ active: pageName === 'favor' }"><a href=""><i class="icon-order-favor"></i>我的收藏</a></h2>
            </li>
        </ul>





        <div>
            
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>

            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>
            <h1>这里显示内容</h1>


        </div>








    </div>
</div>
<footer class="footer" role="contentinfo">
<div class="container clearfix">
    <div class="footer-link">
        <h3 class="footer-link-title">用户帮助</h3>
        <a class="footer-link-item" href="">服务中心</a><a class="footer-link-item" href="">常见问题</a><a class="footer-link-item" online-service="" href="javascript:" style="visibility: visible;">在线客服</a>
    </div>
    <div class="footer-link">
        <h3 class="footer-link-title">商务合作</h3>
        <a class="footer-link-item" href="">我要开店</a><a class="footer-link-item" href="">加盟指南</a><a class="footer-link-item" href="">市场合作</a><a class="footer-link-item" href="">开放平台</a>
    </div>
    <div class="footer-link">
        <h3 class="footer-link-title">关于我们</h3>
        <a class="footer-link-item" href="">饿了么介绍</a><a class="footer-link-item" href="">加入我们</a><a class="footer-link-item" href="">联系我们</a><a class="footer-link-item" href="">服务协议</a>
    </div>
    <div class="footer-contect">
        <div class="footer-contect-item">
            24小时客服热线 : <a class="inherit" href="tel:10105757">10105757</a>
        </div>
        <div class="footer-contect-item">
            意见反馈 : <a class="inherit" href="mailto:feedback@ele.me">feedback@ele.me</a>
        </div>
    </div>
    <div class="footer-mobile">
        <a href=""><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/appqc.852963.png" class="footer-mobile-icon" alt="扫一扫下载饿了么手机 App"></a>
        <div class="footer-mobile-content">
            <h3>下载手机版</h3>
            <p>
                扫一扫,手机订餐方便
            </p>
        </div>
    </div>
    <div class="footer-copyright serif">
        增值电信业务许可证 : <a href="" >沪B2-20150033</a> | <a href="">沪ICP备 09007032</a> | <a href="">上海工商行政管理</a> Copyright ©2008-2016 ele.me, All Rights Reserved.
    </div>
    <div class="footer-police container">
        <a href=""><img alt="已通过沪公网备案，备案号 310100103568" src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/picp_bg.e373b3.jpg" height="30"></a>
    </div>
</div>
</footer>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/textStatic.js"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/userinfo/textStatic.js"></script>
</body>
</html>