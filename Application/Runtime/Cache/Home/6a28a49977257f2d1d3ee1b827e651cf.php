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


<!--page content-->
<section class="order-status-wrap">
    <img src="/SmileTP/Public/dist/img/smile-3.png" class="tip-logo status-tip" >
    <p class="tip-txt failed-txt">预约失败</p>
    <p class="countdown-txt"><span class="time-min">00</span> : <span class="time-sec">00</span></p>
    <p class="tip-txt countdown-tip">请在15分钟内完成支付,逾期将自动取消</p>
    <button class="am-btn wx-btn wx-btn-red goon-btn">继续支付</button>
    <button class="am-btn wx-btn wx-btn-gray canceled-btn">取消订单</button>
</section>
<!--page content end-->



<!--common js-->
<script src="/SmileTP/Public/dist/js/jquery.min.js"></script>
<script src="/SmileTP/Public/dist/js/amazeui.min.js"></script>
<!--private js-->

</body>
</html>