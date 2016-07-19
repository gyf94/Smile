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

    <link href="/SmileTP/Public/favicon.ico" rel="Shortcut  Icon" type="images/x-icon">

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
    <div class="wx-header-nav wx-header-left">
        <a href="#" class="go-back"><img src="/SmileTP/Public/dist/img/svg/icon-back.svg" class="icon-back" alt="上一步">上一步</a>
    </div>

    <h1 class="wx-header-logo">
        <img src="/SmileTP/Public/dist/img/nav_title.png" alt="微笑时刻">
    </h1>

    <div class="wx-header-nav wx-header-right">
        <a href="#">
            <img src="/SmileTP/Public/dist/img/svg/icon-phone.svg" alt="电话预约">
        </a>
    </div>
</header>
<!--page content-->
<section class="order-wrap">
    <!--part-1-->
    <div class="part-1">
        <div class="order-cover" style="background-image: url('/dist/img/test-img-2.jpg')"></div>
        <div class="order-title unpaid">
            <span class="price">￥<span class="price-num">123</span></span>
            <span class="status">待支付</span>
        </div>
    </div>
    <!--order-info-->
    <div class="order-info">
        <dl>
            <dt>服务:<span>黑白照</span></dt>
            <dt>门店:<span>微笑时刻(五道口店)</span></dt>
            <dt>地址:<span>海淀区五道口 清商务会馆601室</span></dt>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
            <dt>预约时间:<span>2016-07-12 19：30</span></dt>
            <dt>预约电话:<span>152-1086-5770</span></dt>
        </dl>
    </div>

    <!--btn-->
    <div class="btn-box">
        <p>剩余支付时间<span class="time-min">00</span>:<span class="time-sec">00</span></p>
        <button class="am-btn wx-btn wx-btn-red">立即支付</button>
        <button class="am-btn wx-btn wx-btn-gray">取消订单</button>
    </div>

</section>
<!--page content end-->



<!--common js-->
<script src="/SmileTP/Public/dist/js/jquery.min.js"></script>
<script src="/SmileTP/Public/dist/js/amazeui.min.js"></script>
<!--private js-->
<script src="/SmileTP/Public/js/countdown.js"></script>

</body>
</html>