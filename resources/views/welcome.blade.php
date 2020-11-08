<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="{{config('app.name')}}">
    <meta name="description" content="一款基于Laravel的Api快速开发模版">
    <link rel="icon" href="/favicon.ico">
    <link href='https://fonts.loli.net/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>
    <style>
        body,html{overflow:hidden;margin:0}body{font-family:'Roboto Mono',monospace,'Microsoft Yahei';color:#333}#wrapper {position:absolute;width:320px;text-align:center;top:50%;left:50%;margin-left:-160px;margin-top:-160px;-webkit-user-select:none;-moz-user-select:none;user-select:none}h1{font-weight:700;font-size:30px;letter-spacing:9px;margin:12px 0;left:4px}h2{color:#000;font-weight:400;font-size:15px;letter-spacing:.12em;margin-bottom:30px;left:3px}h1,h2{position:relative}p{font-size:14px;line-height:2em;margin:0;letter-spacing:2px}canvas{position:absolute;top:0;left:0;z-index:0;width:100%;height:100%;pointer-events:none}a{color:#54565d;text-decoration:none;transition:color .2s ease}a:hover{color:#f33}
    </style>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)}
        gtag('js', new Date());
        gtag('config', 'UA-106757659-1');
    </script>

</head>
<body>
<div id="wrapper">
    <h1> {{config('app.name')}}</h1>
    <h2>&amp; 开箱即用，加速 Api 开发</h2>
    <p><a href="{{env('DOC_PREFIX')}}" title="点击体验">Go→</a></p>

</div>
</body>
</html>
<script color="25,125,225" opacity='0.5' zIndex="-2" count="99"  src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
