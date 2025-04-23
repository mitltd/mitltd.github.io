
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#111111">
    <title><?php if ($_GET["name"] === "") echo "All Sports"; if($_GET["name"] === null) echo "All Sports"; echo $_GET['name']; ?></title>
    <meta name="description" property="Live Stream your favourite sports and events In Full HD Quality">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Live Streaming HD">
    <link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="jasny-css" href="css/jasny-bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" id="simple-css" href="ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="google-font" href="css/css.css?family=Os0wald|Open+Sans" type="text/css" media="all">
    <link rel="stylesheet" id="style-font" href="css/style.min.css" type="text/css" media="all">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"> 
    <script>
        var afurl = '<?php if ($_GET["url"] === "") echo "register.html"; if($_GET["url"] === null) echo "register.html"; echo $_GET['url']; ?>';
        function sVideo(){
document.getElementById("videoPlayer").setAttribute("src", "img/video.mp4");
return false;
};
    </script> 
</head>

<body class=" page page-champions-1">
    <header>
    </header>
    <div id="main">
        <div id="player" style="background: url(img/background.jpg) 0 0 no-repeat;background-size:cover;"> <span class="player-cover"><h2 class="backuptitle custom-title word-wrap" style="color:red"; style="margin-top: 2px;"><b>Watch <?php if ($_GET["name"] === "") echo "All Sports"; if($_GET["name"] === null) echo "All Sports"; echo $_GET['name']; ?> Live Streaming FREE</b></h2></span>
            <div class="container">
                <div id="video">
                    <center><script type="text/javascript">
	atOptions = {
		'key' : '363774ea10cdb812847f0b4c2d8834c3',
		'format' : 'iframe',
		'height' : 60,
		'width' : 468,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//restorepushed.com/363774ea10cdb812847f0b4c2d8834c3/invoke.js"></script></center><br>
                    <div id="video-player" class="embed-responsive embed-responsive-16by9 video pointer nocontext">
                        <video id="videoPlayer" class="embed-responsive-item" preload="none" poster="<?php if ($_GET["img"] === "") echo "img/main.jpg"; if($_GET["img"] === null) echo "img/main.jpg";  echo $_GET['img']; ?>" webkit-playsinline="true" playsinline="playsinline" tabindex="-1" autoplay controls="">
                            <p>Your browser doesn't support HTML5 video</p>
                        </video> 
                        <span class="play-wrapper ease">
                            <span class="vam">
                                <span id="play" onclick="sVideo()" class="play-btn-border ease"><i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i></span>
                            </span>
                        <div class="media-controls ease">
                            <div id="leftControls" class="pull-left">
                                <button type="button" name="Play" class="btn icon-control-play" id="play_btn"></button>
                                <button id="volumeInc_btn" name="Volume" class="btn icon-volume-2"></button>
                            </div>
                            <div id="progressContainer"> <span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></span> </div>
                            <div id="rightControls" class="pull-right">
                                <div id="sliderContainer">
                                    <div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div> <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span> </div>
                                </div><i class="fa fa-circle text-danger Blink"></i> LIVE
                                <div id="setting_btn" class="btn-group dropup">
                                    <button name="Setting" class="btn icon-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="hq active">HD 1080p</li>
                                        <li class="hq">HD 720p</li>
                                    </ul>
                                </div>
                                <button id="fullscreen_btn" name="Fullscreen" class="btn icon-size-fullscreen pull-right"></button>
                            </div>
                        </div>
                    </span>
                </div>
                </div>
            </div>
        </div><br>
        <div class="text-center" id="button-server">
                        <a href="javascript:void(0)" onclick="goto()">
                            <button class="btn btn-offer btn-lg btn-watch"><span class="btn-bg"><span class="icon icon-control-play"></span></span> WATCH LIVE</button>
                            <button class="btn btn-offer btn-lg btn-download"><span class="btn-bg"><span class="icon icon-control-play"></span></span> SIGNUP NOW</button>
                        </a></div>
        <div class="container" itemprop="premiere league">
<br><br>
<div class="capcay">
<div id="player-modal" class="modal fade nocontext" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center"><?php if ($_GET["name"] === "") echo "All Sports"; if($_GET["name"] === null) echo "All Sports"; echo $_GET['name']; ?> Live Streaming FREE</div>
                    <div class="modal-body"><img class="img-responsive" src="img/small.jpg" width="780" height="439" alt="<?php if ($_GET["name"] === "") echo "All Sports"; if($_GET["name"] === null) echo "All Sports"; echo $_GET['name']; ?>"><span class="img-cover"></span><span class="offerlay ease"></span><span class="modal-text ease"><strong>Attention!</strong> You must create a account to <strong>watch</strong> Free <strong><?php if ($_GET["name"] === "") echo "Sports"; if($_GET["name"] === null) echo "Sports"; echo $_GET['name']; ?></strong></span>
                        <div class="modal-ft ease">
                            <ul>
                                <li><span class="icon icon-film"></span><?php if ($_GET["name"] === "") echo "Sports"; if($_GET["name"] === null) echo "Sports"; echo $_GET['name']; ?> is only available for registered users. FREE Create an account to get unlimited access.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <a href="javascript:void(0)" onclick="goto()"><button class="btn btn-offer btn-watch"><span class="btn-bg"><span class="icon icon-arrow-right-circle"></span></span> Create An Account</button>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <center><script type="text/javascript">
	atOptions = {
		'key' : '9d6e0cf1a31632adfc3a49c0d37837d9',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//restorepushed.com/9d6e0cf1a31632adfc3a49c0d37837d9/invoke.js"></script><br><script type="text/javascript">
	atOptions = {
		'key' : 'ce2e4c234468aab47c8aa873a4016b75',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//restorepushed.com/ce2e4c234468aab47c8aa873a4016b75/invoke.js"></script> <script type="text/javascript">
	atOptions = {
		'key' : 'ce2e4c234468aab47c8aa873a4016b75',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//restorepushed.com/ce2e4c234468aab47c8aa873a4016b75/invoke.js"></script> <script type="text/javascript">
	atOptions = {
		'key' : 'ce2e4c234468aab47c8aa873a4016b75',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//restorepushed.com/ce2e4c234468aab47c8aa873a4016b75/invoke.js"></script></center>
    <footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="site-credit col-md-12 text-center"> &copy;2024 - All rights reserved. </div>
                <div id="counter" data-min="1000" data-max="1200"><span class="globe"><span class="fa fa-globe"></span></span> <span class="counter-value">1100</span> People Watching Now </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js" defer=""></script>
    <script>
        function goto(){
            PreventExitPop = false;
            location.href = afurl;}
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js" defer=""></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js" defer=""></script>
    <script type="text/javascript" src="js/scripts.min.js" defer=""></script>
</body>
</html>
   <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4546855,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4546855&101" alt="free site statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->