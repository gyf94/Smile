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
    <link rel="stylesheet" href="/SmileTP/Public/dist/css/style.css">
</head>
<body>
<!--以上为公共引入-->

    <link rel="stylesheet" href="/SmileTP/Public/dist/css/amazeui.min.css">

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
<section class="city-wrap">
    <!--城市列表-->
    <a href="/view/shop.html">
        <div class="am-g city-list">
            <div class="am-u-sm-3 city-name"><?php echo ($city[0]["city_name"]); ?></div>
            <div class="am-u-sm-9 city-shop">五道口店、魏公村店、四道口店、外经贸店、国贸店</div>
        </div>
    </a>
    <a href="/view/shop.html">
        <div class="am-g city-list">
            <div class="am-u-sm-3 city-name"><?php echo ($city[1]["city_name"]); ?></div>
            <div class="am-u-sm-9 city-shop">五道口店、魏公村店、四道口店、外经贸店、国贸店</div>
        </div>
    </a>
    <a href="/view/shop.html">
        <div class="am-g city-list">
            <div class="am-u-sm-3 city-name"><?php echo ($city[0]["city_name"]); ?></div>
            <div class="am-u-sm-9 city-shop">五道口店、魏公村店、四道口店、外经贸店、国贸店</div>
        </div>
    </a>
    <a href="/view/shop.html">
        <div class="am-g city-list">
            <div class="am-u-sm-3 city-name">四个字</div>
            <div class="am-u-sm-9 city-shop">五道口店、魏公村店、四道口店、外经贸店、国贸店</div>
        </div>
    </a>

    <!--logo图片-->
    <img src="/SmileTP/Public/dist/img/smile.png" class="smile-tip">
    <p class="city-tip">更多城市正在开通中~</p>
</section>
<!--page content end-->


<!--footer end-->

<!--common js-->
<script src="/SmileTP/Public/dist/js/jquery.min.js"></script>
<script src="/SmileTP/Public/dist/js/amazeui.min.js"></script>

<!--private js-->

</body>
</html>