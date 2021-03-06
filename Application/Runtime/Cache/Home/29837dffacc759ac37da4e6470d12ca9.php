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

    <link rel="stylesheet" href="/dist/css/amazeui.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
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
        <a href="#" class="go-back"><img src="/dist/img/svg/icon-back.svg" class="icon-back" alt="上一步">上一步</a>
    </div>

    <h1 class="wx-header-logo">
        <img src="/dist/img/nav_title.png" alt="微笑时刻">
    </h1>

    <div class="wx-header-nav wx-header-right">
        <a href="#">
            <img src="/dist/img/svg/icon-phone.svg" alt="电话预约">
        </a>
    </div>
</header>
<!--page content-->
<section class="city-wrap">
    <!--城市列表-->
    <div class="am-g city-list">
        <div class="am-u-sm-10 shop-info">
            <h2 class="shop-name">五道口店</h2>
            <p>海淀区五道口华清商务会馆601室</p>
        </div>
        <div class="am-u-sm-2 select-box"><i class="icon-select"></i></div>
    </div>
    <div class="am-g city-list">
        <div class="am-u-sm-10 shop-info">
            <h2 class="shop-name">魏公村店</h2>
            <p>海淀区五道口华清商务会馆601室</p>
        </div>
        <div class="am-u-sm-2 select-box"><i class="icon-select"></i></div>
    </div>
    <div class="am-g city-list">
        <div class="am-u-sm-10 shop-info">
            <h2 class="shop-name">外经贸店</h2>
            <p>海淀区五道口华清商务会馆601室</p>
        </div>
        <div class="am-u-sm-2 select-box"><i class="icon-select"></i></div>
    </div>

    <!--logo图片-->
    <img src="/dist/img/smile.png" class="smile-tip">
    <p class="city-tip">更多店铺正在开通中~</p>

    <button class="am-btn wx-btn wx-btn-green" id="submit-shop">确认</button>
</section>
<!--page content end-->



<!--common js-->
<script src="/dist/js/jquery.min.js"></script>
<script src="/dist/js/amazeui.min.js"></script>

<!--private js-->
<script src="/js/common.js"></script>
</body>
</html>