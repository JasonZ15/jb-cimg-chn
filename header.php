<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	
	<meta property="og:title" content="<?php elegant_titles(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:image" content="<?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post_id ), 'single-post-thumbnail' );
echo $image[0]; ?>" />
	<meta property="og:site_name" content="全球移动互联网大会 | 重新定义移动互联 | GMIC 北京 2013" />
	<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
	<meta property="fb:admins" content="670979947" />
	<meta property="fb:app_id" content="377806332292440" />
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<link rel="Shortcut Icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<?php wp_head(); ?>
        <style>
body{margin: 0 0 0 0;text-align:center; background:#fcfcfc url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/bg.jpg) center top no-repeat; padding:0;color:#301504; font-family:"Microsoft YaHei";}img{border:0}
table{ border-collapse:collapse; border-spacing:0;}fieldset,img{ border:0;}
.clearfix:after {content:".";display:block;height:0;clear:both;visibility:hidden;}.clearfix {display:inline-block; }.clearfix {display:block;}.cls {clear: both;}a:focus { outline: none; }
#top-bar {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/bar-on-top.png") no-repeat scroll center 0 #212121;}
#top-bar .holder { height: 29px; margin: 0 auto; position: relative; width: 960px;}
#top-bar .holder a { display: block; height: 29px; position: absolute; top: 0;}
a#thegmic { left: 0; width: 34px;}
a#gmic-beijing { left: 46px;  width: 200px;}
a#gmic-sv { left: 250px; width: 224px;}
a.english {right: 0;width: 48px;}
a.japanese { right: 56px; width: 58px;}
#container {margin: 0 auto; position: relative; text-align: left; width: 960px;}
.head{ background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/home-theme.jpg) no-repeat; width:960px; height:190px;}
.head .left{ float:left; width:305px;}
.head .right{ float:right; width:320px;}
.head .logo{ width:305px; height:124px; float:left; padding-bottom:10px;}
.head .btn{ float:right; height:34px; color:#fff; font-family:"微软雅黑"; font-size:16px;}
.head .btn a{ color:#fff; text-decoration:none;}
.head .btn1{
	width: 77px;
	padding-left: 16px;
	height: 34px;
	line-height: 34px;
	float: left;
	background-color: #9237a6;
	background-image: url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/reg-bg.jpg);
	background-repeat: no-repeat;
	background-position: left;
}
.head .btn2{
	width: 77px;
	padding-left: 16px;
	height: 34px;
	line-height: 34px;
	float: left;
	margin-left: 5px;
	display: inline;
	background-color: #646dd2;
	background-image: url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/sponsor-bg.jpg);
	background-repeat: no-repeat;
	background-position: left;
}
.head .btn3{ width:107px;padding-left:16px; background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/speaker-bg.jpg) #0097f3 left no-repeat;height:34px; line-height:34px; float:left; margin-left:5px; display:inline;}
.social-buttons a { float: left; height: 25px;  margin: 0 2px;  width: 25px;}
.social-buttons a#fb {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over.png") no-repeat scroll 100px 0 transparent;}
.social-buttons a#tt {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-02.png") no-repeat scroll 100px 0 transparent;}
.social-buttons a#in {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-03.png") no-repeat scroll 100px 0 transparent;}
.social-buttons a#em {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-05.png") no-repeat scroll 100px 0 transparent;}
.social-buttons a#em {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-06.png") no-repeat scroll 100px 0 transparent;}
.social-buttons a#fb:hover {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over.png") no-repeat scroll 0 0 transparent;}
.social-buttons a#tt:hover {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-02.png") no-repeat scroll 0 0 transparent;}
.social-buttons a#in:hover {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-03.png") no-repeat scroll 0 0 transparent;}
.social-buttons a#em:hover {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-05.png") no-repeat scroll 0 0 transparent;}
.social-buttons a#chinese-overview:hover {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-over-06.png") no-repeat scroll 0 0 transparent;}
.social-buttons a:hover img {visibility: hidden;}
.social-buttons a { float: left;  height: 25px;  margin: 0 2px;  width: 25px;}
.head .time{ width:220px; float:right; height:35px; padding-top:105px;}
.djs{
	height: 35px;
	width: 200px;
	float: right;
}
.djs .time{
	width: 200px;
	float: left;
	padding-top: 8px;
	padding-left: 15px;
	padding-bottom: 0px;
}
.djs .time .nub1{ font-size:16px; color:#fff; background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images//day-bg.jpg) no-repeat; width:25px; height:23px; font-family:"微软雅黑"; float:left; text-align:center;}
.djs .time .nub2{ font-size:16px; color:#fff;  background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/hour-bg.jpg) no-repeat; width:26px; height:23px; font-family:"微软雅黑"; float:left; text-align:center;}
.djs .time .nub3{ font-size:16px; color:#fff;  background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/min-bg.jpg) no-repeat; width:26px; height:23px; font-family:"微软雅黑"; float:left; text-align:center;}
.djs .time .nub4{ font-size:16px; color:#fff;  background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/second-bg.jpg) no-repeat; width:26px; height:23px; font-family:"微软雅黑"; float:left; text-align:center;}
.djs .time .text{ float:left; font-size:12px; color:#6c66a6; font-family:"微软雅黑"; padding-top:14px; text-align:center; padding-left:3px; padding-right:1px;}
.menu{ width:960px; float:left; font-family:"微软雅黑"; font-size:16px; color:#fff; line-height:40px; height:40px;}
.speaker{ width:960px; float:left}
.speaker .title{ background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/title-line.jpg) no-repeat center; margin-bottom:30px;}
.speaker .title h2{ margin:auto; padding-left:10px; padding-right:10px; font-family:"微软雅黑"; font-size:28px; line-height:36px; height:36px; color:#666666; text-align:center;}
.news{ width:960px; float:left; padding-bottom:20px;}
.news .title{ background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/title-line.jpg) no-repeat center; margin-bottom:30px;}
.news .title h2{ margin:auto; padding-left:10px; padding-right:10px; font-family:"微软雅黑"; font-size:28px; line-height:36px; height:36px; color:#666666; text-align:center;}
.footer{ background:url(http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-bg.jpg) center top no-repeat #e5e5e5; height:300px; padding-top:30px;}
.foot{ width:960px; margin:auto;}
.foot .left{ width:645px; float:left}
.foot .left a{ color:#666; text-decoration:none;}
.foot .left h2{ font-family:"微软雅黑"; font-size:16px; color:#666666; text-align:left; padding-left:2px; height:25px; line-height:25px;}
.foot .left ul{  float:left;width:150px;}
.foot .left ul li{ float:left; font-size:12px; font-family:"宋体"; color:#666666;display:block;width:120px; height:26px; line-height:26px; text-align:left; }
.foot .left ul li a#about {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-1.jpg") no-repeat scroll 0 -2px transparent;padding-left:20px;}
.foot .left ul li a#time {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-2.jpg") no-repeat scroll 0 -2px transparent;padding-left:20px;}
.foot .left ul li a#car {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-3.jpg") no-repeat scroll transparent;padding-left:20px;}
.foot .left ul li a#hot {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-4.jpg") no-repeat scroll transparent;padding-left:20px;}
.foot .left ul li a#quan {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-5.jpg") no-repeat scroll 0 -2px transparent;padding-left:20px;}
.foot .left ul li a#down {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-ico-6.jpg") no-repeat scroll 0 -2px transparent;padding-left:20px;}
.foot .right{ width:300px; float:right;}
.foot .right a{ color:#666; text-decoration:none;}
.foot .right h2{ font-family:"微软雅黑"; font-size:16px; color:#666666; text-align:left; padding-left:2px; height:25px; line-height:25px;}
.foot .right ul{  float:left;width:280px;}
.foot .right ul li{ float:left; font-size:12px; font-family:"宋体"; color:#666666;width:280px;text-align:left; }
.foot .right ul li.m1 {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/lianxi-1.jpg") no-repeat scroll 0 5px transparent;padding-left:20px; height:26px; line-height:26px; }
.foot .right ul li.m2 {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/lianxi-2.jpg") no-repeat scroll 0 4px transparent;padding-left:20px; height:26px; line-height:26px; }
.foot .right ul li.m3 {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/lianxi-3.jpg") no-repeat scroll 0 4px transparent;padding-left:20px; height:26px; line-height:26px; }
.foot .right ul li.m4 {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/lianxi-4.jpg") no-repeat scroll 0 5px transparent;padding-left:20px; height:26px; line-height:26px; }
.foot .right .map {background: url("http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/footer-map.jpg") no-repeat scroll 0 0 transparent;padding-left:30px; line-height:24px; height:24px;font-size:12px; font-family:"宋体"; color:#666666; border:0; padding-top:3px;}
.foot .right .bq{ font-size:11px; font-family:"微软雅黑"; padding-top:30px; height:20px; float:left; text-align:left; color:#084379; width:100%}
#breadcrumbs { border-bottom: 1px solid #F0F0E5; font-size: 16px; padding: 10px 0 21px 20px; font-family:"微软雅黑";  text-transform: uppercase;}
#main-area {margin-bottom: 0; font-family:"Microsoft YaHei";}
#breadcrumbs #top-menu a {
    color: #fff;
}

#breadcrumbs #top-menu a:hover {
    color: #c7d5e9;
}

    </style>
<script language="JavaScript">
var DifferHour = -1
var DifferMinute = -1
var DifferSecond = -1
var Tday1 = new Date("May 7, 2013 00:00:00")   //**倒计时时间-注意格式
var daysms = 24 * 60 * 60 * 1000
var hoursms = 60 * 60 * 1000
var Secondms = 60 * 1000
var microsecond = 1000
function clock()
{   var time = new Date()
    var hour = time.getHours()
    var minute = time.getMinutes()
    var second = time.getSeconds()
    var timevalue = ""+((hour > 12) ? hour-12:hour)
    timevalue +=((minute < 10) ? ":0":":")+minute
    timevalue +=((second < 10) ? ":0":":")+second
    timevalue +=((hour >12 ) ? " PM":" AM")
    var convertHour = DifferHour
    var convertMinute = DifferMinute
    var convertSecond = DifferSecond
    var Diffms = Tday1.getTime() - time.getTime()
    DifferHour = Math.floor(Diffms / daysms)
    Diffms -= DifferHour * daysms
    DifferMinute = Math.floor(Diffms / hoursms)
    Diffms -= DifferMinute * hoursms
    DifferSecond = Math.floor(Diffms / Secondms)
    Diffms -= DifferSecond * Secondms
    var dSecs = Math.floor(Diffms / microsecond)
    if(convertHour != DifferHour) document.formnow.dd.value=DifferHour
    if(convertMinute != DifferMinute) document.formnow.hh.value=DifferMinute
    if(convertSecond != DifferSecond) document.formnow.mm.value=DifferSecond
        document.formnow.ss.value=dSecs
        document.formnow.ss.value=dSecs
setTimeout("clock()",1000)}
</script>
</head>
<body <?php body_class(); ?>onload="clock();return true"  text="red">
	<div id="fb-root"></div>
<div id="top-bar"><div class="holder">
		<a id="thegmic" href="http://www.thegmic.com"></a>
		<a id="gmic-beijing" href="http://beijing.thegmic.com/cn/"></a>
		<a id="gmic-sv" href="http://sv.thegmic.com"></a>
		<a class="english" href="http://beijing.thegmic.com/"></a>
		<a class="japanese" href="http://beijing.thegmic.com/jp"></a>
		</div>
        </div>

	<div id="container">
		<?php do_action('et_header_top'); ?>


<div class="head">
    <div class="left">
				<div class="logo"><a href="http://beijing.thegmic.com/cn/"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/logo.jpg" width="305" height="124" /></a></div>
        <p class="social-buttons clearfix"><a target="_blank" href="http://weibo.com/gmic" id="fb"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons.png"></a><a target="_blank" href="http://t.qq.com/greatwallclub" id="in"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-03.png"></a><a target="_blank" href="http://weibo.com/1656528604/yFWkzE6o7" id="tt"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-02.png"></a><a target="_blank" href="mailto: gmic@gwc.net" id="em"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-05.png"></a><a style="display: none;" target="_blank" href="http://gmic.greatwallclub.com/" id="chinese-overview"><img src="http://beijing.thegmic.com/cn/wp-content/themes/gmic/images/social-buttons-06.png"></a></p>
    </div>
    <div class="right">
        <div class="btn"><div class="btn1"><a href="http://beijing.thegmic.com/cn/register/" target="_blank">注册参会</a></div><div class="btn2"><a href="http://beijing.thegmic.com/cn/sponsorship/" target="_blank">赞助大会</a></div><div class="btn3"><a href="http://beijing.thegmic.com/cn/recommend-a-speaker/" target="_blank">推荐演讲嘉宾</a></div></div>
        <div class="time">
        	<div class="djs">
            <div class="time"><form name="formnow">
<input name="dd" type="text" style="border:0;" size=2 class="nub1">
<div class="text">天</div>
<input name="hh" type="text" style="border:0;" size=2 class="nub2">
<div class="text">小时</div>
<input name="mm" type="text" style="border:0;" size=2 class="nub3">
<div class="text">分</div>
<input name="ss" type="text" style="border:0;" size=2 class="nub4">
<div class="text">秒</div>
</form></div>
</div>
</div>
    </div>
  </div>
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>
