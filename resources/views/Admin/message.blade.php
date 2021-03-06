<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content ="<?=$wait?> ;url=<?=$url?>"/>
    <title>消息提示页</title>

    <style type="text/css">
        @-webkit-keyframes rotate-animation {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes rotate-animation {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-webkit-keyframes move-animation {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            25% {
                -webkit-transform: translate(-64px, 0);
                transform: translate(-64px, 0);
            }
            75% {
                -webkit-transform: translate(32px, 0);
                transform: translate(32px, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @-webkit-keyframes move-animation {
            0%{
                -webkit-transform: translate(0,0);
                transform: translate(0,0);
            }
        }
        @keyframes move-animation {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            25% {
                -webkit-transform: translate(-64px, 0);
                transform: translate(-64px, 0);
            }
            75% {
                -webkit-transform: translate(32px, 0);
                transform: translate(32px, 0);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        body {
            background-color: #F5F5F5;
        }

        .circle-loader {
            display: block;
            width: 64px;
            height: 64px;
            margin-left: -32px;
            margin-top: -32px;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform-origin: 16px 16px;
            transform-origin: 16px 16px;
            -webkit-animation: rotate-animation 5s infinite;
            animation: rotate-animation 5s infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }
        .circle-loader .circle {
            -webkit-animation: move-animation 2.5s infinite;
            animation: move-animation 2.5s infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            position: absolute;
            left: 50%;
            top: 50%;
        }
        .circle-loader .circle-line {
            width: 64px;
            height: 24px;
            position: absolute;
            top: 4px;
            left: 0;
            -webkit-transform-origin: 4px 4px;
            transform-origin: 4px 4px;
        }
        .circle-loader .circle-line:nth-child(0) {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .circle-loader .circle-line:nth-child(1) {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .circle-loader .circle-line:nth-child(2) {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .circle-loader .circle-line:nth-child(3) {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }
        .circle-loader .circle-line .circle:nth-child(1) {
            width: 8px;
            height: 8px;
            top: 50%;
            left: 50%;
            margin-top: -4px;
            margin-left: -4px;
            border-radius: 4px;
            -webkit-animation-delay: -0.3s;
            animation-delay: -0.3s;
        }
        .circle-loader .circle-line .circle:nth-child(2) {
            width: 16px;
            height: 16px;
            top: 50%;
            left: 50%;
            margin-top: -8px;
            margin-left: -8px;
            border-radius: 8px;
            -webkit-animation-delay: -0.6s;
            animation-delay: -0.6s;
        }
        .circle-loader .circle-line .circle:nth-child(3) {
            width: 24px;
            height: 24px;
            top: 50%;
            left: 50%;
            margin-top: -12px;
            margin-left: -12px;
            border-radius: 12px;
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }
        .circle-loader .circle-blue {
            background-color: #1f4e5a;
        }
        .circle-loader .circle-red {
            background-color: #ff5955;
        }
        .circle-loader .circle-yellow {
            background-color: #ffb265;
        }
        .circle-loader .circle-green {
            background-color: #00a691;
        }

    </style>
</head>
<body>
<div class="page">
    <div class="circle-loader">
        <div class="circle-line">
            <div class="circle circle-blue"></div>
            <div class="circle circle-blue"></div>
            <div class="circle circle-blue"></div>
        </div>
        <div class="circle-line">
            <div class="circle circle-yellow"></div>
            <div class="circle circle-yellow"></div>
            <div class="circle circle-yellow"></div>
        </div>
        <div class="circle-line">
            <div class="circle circle-red"></div>
            <div class="circle circle-red"></div>
            <div class="circle circle-red"></div>
        </div>
        <div class="circle-line">
            <div class="circle circle-green"></div>
            <div class="circle circle-green"></div>
            <div class="circle circle-green"></div>
        </div>
    </div>
</div>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
    <h2><?=$title?>:<?=$msg?></h2>
    <p><span id='second'><?=$wait?></span>秒之后跳转</p>

</div>
</body>
<script>
    var second = document.getElementById('second').innerHTML;
    setInterval(function(){
        second -= 1;
        document.getElementById('second').innerHTML = second;
    },1000)
</script>
</html>
