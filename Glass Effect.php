<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Card With Glass Effect</title>
    </head>
    <style media="screen">
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .box{
            width: 300px;
            height: 600px;
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .cardinner{
            width: 250px;
            height: 400px;
            background-color: rgba(255, 255, 255, .05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 8px;
            z-index: 1;
        }
        .circle{
            width: 100px;
            height: 100px;
            background: radial-gradient(#b0e633, #53ef7d);
            border-radius: 50%;
            animation: move-up 2s ease-in infinite alternate-reverse;
        }
        .circle:nth-child(1){
            
        }
        .circle:nth-child(2){
            animation-name: move-down;
        }
        @keyframes move-up{
            to{
                transform: translateY(-30px);
            }
        }
        @keyframes move-down{
            to{
                transform: translateY(30px);
            }
        }
    </style>
    <body>
        <div class="box">
            <div class="circle"></div>
            <div class="cardinner"></div>
            <div class="circle"></div>
        </div>
    </body>
</html>
