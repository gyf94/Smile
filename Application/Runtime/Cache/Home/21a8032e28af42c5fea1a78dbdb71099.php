<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>微笑时刻</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link href="/favicon.ico" rel="Shortcut  Icon" type="images/x-icon">

    <link rel="stylesheet" href="/SmileTP/Public/dist/css/amazeui.min.css">
    <link rel="stylesheet" href="/SmileTP/Public/dist/css/style.css">
</head>
<body>
<!--以上为公共引入-->

<!--header具体定制-->
<div class="am-g rainbow-box">
    <div class="am-u-sm-2 rainbow-block-1"></div>
    <div class="am-u-sm-2 rainbow-block-2"></div>
    <div class="am-u-sm-2 rainbow-block-3"></div>
    <div class="am-u-sm-2 rainbow-block-4"></div>
    <div class="am-u-sm-2 rainbow-block-5"></div>
    <div class="am-u-sm-2 rainbow-block-6"></div>
</div>
<header data-am-widget="header" class="wx-header">

    <h1 class="wx-header-logo">
        <img src="/SmileTP/Public/dist/img/nav_title.png" alt="微笑时刻">
    </h1>

</header>
<!--page content-->
<section class="order-wrap">
    <!--判断有无订单-->
    <!--如果没有订单显示这里-->
    <!--<img src="/dist/img/smile.png" class="tip-logo" alt="微笑时刻" >-->
    <!--<p class="tip-txt">还没有订单哦~</p>-->
    <!--<button class="am-btn wx-btn wx-btn-green no-order">立即预约下单</button>-->
    <!---->
    <!--有订单显示这里-->
    <ul class="order-list">
        <li>
            <div class="top-box">
                <span class="time">2016-07-12 12:24</span>
                <span class="status done">已完成</span>
            </div>
            <div class="mid-box">
                <img src="/SmileTP/Public/dist/img/test-pro-img.jpg" alt="项目封面">
                <dl>
                <dt>服务:<span>黑白照</span></dt>
                <dt>门店:<span>微笑时刻(五道口店)</span></dt>
                <dt>地址:<span>海淀区五道口 清商务会馆601室</span></dt>
                <dt>预约时间:<span>2016-07-12 19：30</span></dt>
                </dl>
            </div>
            <div class="bot-box">
                <div class="price">￥<span>88</span></div>
                <a href="#" class="wx-ghost-btn ghost-btn-green">再拍一张</a>
            </div>
        </li>
        <li>
            <div class="top-box">
                <span class="time">2016-07-12 12:24</span>
                <span class="status doing">进行中</span>
            </div>
            <div class="mid-box">
                <img src="/SmileTP/Public/dist/img/test-pro-img.jpg" alt="项目封面">
                <dl>
                    <dt>服务:<span>黑白照</span></dt>
                    <dt>门店:<span>微笑时刻(五道口店)</span></dt>
                    <dt>地址:<span>海淀区五道口 清商务会馆601</span></dt>
                    <dt>预约时间:<span>2016-07-12 19：30</span></dt>
                </dl>
            </div>
            <div class="bot-box">
                <div class="price">￥<span>88</span></div>
                <a href="#" class="wx-ghost-btn ghost-btn-gray">再拍一张</a>
            </div>
        </li>
        <li>
            <div class="top-box">
                <span class="time">2016-07-12 12:24</span>
                <span class="status unpaid">待支付</span>
            </div>
            <div class="mid-box">
                <img src="/SmileTP/Public/dist/img/test-pro-img.jpg" alt="项目封面">
                <dl>
                    <dt>服务:<span>黑白照</span></dt>
                    <dt>门店:<span>微笑时刻(五道口店)</span></dt>
                    <dt>地址:<span>海淀区五道口 清商务会馆601室</span></dt>
                    <dt>预约时间:<span>2016-07-12 19：30</span></dt>
                </dl>
            </div>
            <div class="bot-box">
                <div class="price">￥<span>88</span></div>
                <a href="#" class="wx-ghost-btn ghost-btn-red">立即支付</a>
                <a href="#" class="wx-ghost-btn ghost-btn-gray">取消订单</a>
            </div>
        </li>
        <li>
            <div class="top-box">
                <span class="time">2016-07-12 12:24</span>
                <span class="status canceled">已取消</span>
            </div>
            <div class="mid-box">
                <img src="/SmileTP/Public/dist/img/test-pro-img.jpg" alt="项目封面">
                <dl>
                    <dt>服务:<span>黑白照</span></dt>
                    <dt>门店:<span>微笑时刻(五道口店)</span></dt>
                    <dt>地址:<span>海淀区五道口 清商务会馆601室</span></dt>
                    <dt>预约时间:<span>2016-07-12 19：30</span></dt>
                </dl>
            </div>
            <div class="bot-box">
                <div class="price">￥<span>88</span></div>
                <a href="#" class="wx-ghost-btn ghost-btn-green">再拍一张</a>
            </div>
        </li>
    </ul>
</section>
<!--page content end-->

<!--nav-->
<div class="wx-nav am-g">
    <div class="am-u-sm-6 wx-nav-block">
        <span class="wx-nav-icon icon-book"></span>
        预约
    </div>
    <div class="am-u-sm-6 wx-nav-block">
        <span class="wx-nav-icon icon-man"></span>
        我的订单
    </div>
</div>
<!--nav end-->

<!--common js-->
<script src="/SmileTP/Public/dist/js/jquery.min.js"></script>
<script src="/SmileTP/Public/dist/js/amazeui.min.js"></script>

<!--private js-->

</body>
</html>