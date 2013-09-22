<!doctype html>
<html>
<head>
    <title>Wartungsarbeiten</title>
    <meta charset="utf-8">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Dancing+Script);
        @import url(http://fonts.googleapis.com/css?family=Open+Sans);

        * {
            margin:0;
            padding:0;
            font-size:100%;
            line-height:1;
        }

        body {
            text-align:center;
            color:#333;
            padding-top:80px;
            background-color:#e0e0e0;
            height: 100%;
        }

        #stickynote {
            width:500px;
            padding:50px;
            margin:auto;
            position:relative;
            background-color:#fe6;
            background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#fe6), to(#f6ef97), color-stop(.6,#f5da41));
            background:-moz-linear-gradient(top, #fe6, #f5da41, #f6ef97);
            text-shadow:0 1px 0 #F6EF97;
            box-shadow:0 0 5px rgba(0,0,0,.2);
            -webkit-box-shadow:0 0 5px rgba(0,0,0,.2);
            -moz-box-shadow:0 0 5px rgba(0,0,0,.2);
            margin-top: 100px;
        }

        #stickynote:before {
            content:'';
            display:block;
            width:90%;
            height:20%;
            position:absolute;
            left:10px;
            bottom:3px;
            background-color:rgba(0,0,0,.5);
            -o-transform:rotate(-3deg);
            -webkit-transform:rotate(-3deg);
            -moz-transform:rotate(-3deg);
            box-shadow:0 0 10px #000;
            -webkit-box-shadow:0 0 10px #000;
            -moz-box-shadow:0 0 10px #000;
            opacity:1;
            z-index:-1;
        }

        #stickynote:after {
            content:'';
            display:block;
            width:90%;
            height:20%;
            position:absolute;
            right:10px;
            bottom:3px;
            background-color:rgba(0,0,0,.5);
            -o-transform:rotate(3deg);
            -webkit-transform:rotate(3deg);
            -moz-transform:rotate(3deg);
            box-shadow:0 0 10px #000;
            -webkit-box-shadow:0 0 10px #000;
            -moz-box-shadow:0 0 10px #000;
            opacity:1;
            z-index:-1;
        }

        #stickynote h1:before {
            content:'';
            display:block;
            width:200px;
            height:60px;
            position:absolute;
            top:-30px;
            left:200px;
            background-color:rgba(255,255,255,.25);
            -o-transform:rotate(-5deg);
            -webkit-transform:rotate(-5deg);
            -moz-transform:rotate(-5deg);
            box-shadow:0 0 2px rgba(0,0,0,.15);
            -webkit-box-shadow:0 0 2px rgba(0,0,0,.15);
            -moz-box-shadow:0 0 2px rgba(0,0,0,.15);
            opacity:1;
        }

        #stickynote h1 {
            font-family:'Dancing Script', cursive;
            font-size:48px;
            line-height:48px;
            letter-spacing:-1px;
        }

        #stickynote p {
            font-family:'Open Sans', sans-serif;
            font-size:22px;
            line-height:28px;
            margin-top:40px;
        }

        #stickynote a {color:#333;}
    </style>
</head>
<body>
<div id="stickynote">
    <h1>Wartungsarbeiten</h1>
    <p>Die Website <strong><?php echo $_SERVER['HTTP_HOST']; ?></strong> ist auf Grund von Wartungsarbeiten momentan nicht erreichbar.<br />Wir sind in Kürze wieder da.</p>
    <p>Kontakt: <a href="mailto:mail@domain.com">mail@domain.com</a></p>
</div>
</body>
</html>
