<?php 
/*
Template Name: Chinese Landing Page
*/
?>
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
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<?php do_action('et_header_top'); ?>
		<header id="header" class="clearfix">
			<hgroup id="logo-area">
				<?php $bloginfo_name = get_bloginfo( 'name' ); ?>
				<h1 id="logo">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $bloginfo_name ); ?>"><?php if ( 'false' == et_get_option( 'flexible_logo_image', 'false' ) || '' == et_get_option( 'flexible_logo' ) ) echo apply_filters( 'et_logo_markup', $bloginfo_name ); else echo '<img src="' . esc_url( et_get_option( 'flexible_logo' ) ) . '" alt="' . esc_attr( $bloginfo_name ) . '" />'; ?></a>
				</h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
			
			<a href="http://www.gmic-sv.com/register" id="go-register" class="action-button"><span class="color"><span class="text">注册参会</span></span></a>
			<a style="margin-left:5px;" href="http://www.gmic-sv.com/?page_id=290" id="sponsor" class="action-button"><span class="color"><span class="text"><?php esc_html_e( '赞助 GMIC SV', 'Flexible' ); ?></span></span></a>
			<a style="clear:left; margin-top: 0;" href="http://eepurl.com/h2MOg" id="email-list" class="action-button" target="_blank"><span class="color"><span class="text"><?php esc_html_e( '订阅GMIC SV最新消息', 'Flexible' ); ?></span></span></a>
			<p class="social-buttons clearfix"><a id="fb" href="http://www.facebook.com/theGMIC"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons.png" /></a><a id="tt" href="http://www.twitter.com/theGMIC"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-02.png" /></a><a id="in" href="http://www.linkedin.com/groups?gid=2825839&trk=hb_side_g"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-03.png" /></a><a id="em" href="mailto: info@greatwallclub.com"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-05.png" /></a><a id="chinese-overview" href="http://www.gmic-sv.com/overview-chinese"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-06.png" /></a></p>
			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>		
		</header> 
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>
<div id="content-area" class="fullwidth clearfix">
	<div id="left-area">
						
	<article id="post-164" class="post-164 page type-page status-publish hentry entry clearfix">
		

						
		<div class="post-content">
			<p class="clearfix silicon"><img alt="Silicon Vally" src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/graphic-1.png" style="float: left;">全球移动互联网大会(GMIC)是亚洲规模最大的移动互联网大会。本届(2012年)吸引了来自32个国家超过5200名与会者。现在，GMIC即将来到硅谷。</p>
<p class="clearfix beijing" style="font-size:20px;"><img alt="GMIC Beijing" src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/graphic-2.png" />今年十月，成千上万的企业家、高管、投资人和开发商将来到GMIC SV，与世界头号移动市场的从业人建立联系、交流学习 。</p>
<h2 class="page_title">主会场</h2>
<p>来自硅谷和世界各地的演讲人将在这里分享见解。</p>
<p class="clearfix"><img alt="GMIC Previous Speakers" src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/speakers.png" style="float: right; width: 600px; margin: -22px 0 0 -18px;" /><b>历届演讲人:</b><br />
雷军 CEO，<b>小米科技</b><br />
马化腾，CEO，<b>腾讯</b><br />
曹国伟，CEO，<b>新浪</b><br />
李开复，CEO，<b>创新工场</b><br />
李彦宏，CEO，<b>百度</b><br />
俞永福 CEO，<b>UC优视</b><br />
Mike McCue, CEO,<b>Flipboard</b><br />
Naveen Tewari, CEO,<b>InMobi</b><br />
Peter Vesterbacka, CMO,<b>Rovio</b><br />
宋涛， CEO，<b>斯凯网络</b></p>
<h2 class="page_title">开发者星球</h2>
<p><img src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/event.png" alt="appSpaec" width="100%" /><br />开发人员可在此学习最新的技术和行业趋势，展示自己的应用，并在appAttack应用开发大赛中争夺头把交椅。</p>
<h2 class="page_title">创业大赛</h2>
<p><img src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/event-02.png" alt="G-Startup" width="100%" /><br />种子和成长阶段公司的全球性创业大赛，获胜者有机会加入顶尖的孵化企业。经验丰富的
企业家将在主题演讲和小组讨论中分享创业干货，千万不要错过！</p>
<h2 class="page_title">展示区</h2>
<p><img src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/event-03.png" alt="Exhibition" width="100%" /><br />向成千上万的移动互联网行业潜在客户展示您的产品。</p>
<p class="page_title sanjose"><a href="http://maps.google.com.hk/maps?q=SAN+JOSE+CONVENTION+CENTER&ll=37.330242,-121.888826&spn=0.009691,0.021651&fb=1&gl=hk&hq=SAN+JOSE+CONVENTION+CENTER&cid=0,0,1591443767283696794&t=m&z=16&iwloc=A&brcurrent=3,0x0:0x0,0" style="color:#fff;font-family:‘微软雅黑’；" target="_blank">圣何塞会议中心<br />
<span>十月19-20日</span></a></p>
								</div> 	<!-- end .post-content -->
	</article> <!-- end .entry -->
			</div> <!-- end #left_area -->
</div> 	<!-- end #content-area -->
</div> 	<!-- end #main-area -->
		
		<footer id="main_footer" class="clearfix">
			<p id="copyright"><span style="font-size:22px;font-family:‘微软雅黑’；">联系我们</span><br />长城会<br />蒋女士 <a href="mailto: lijuan@greatwallclub.com" title="Email Us">lijuan@greatwallclub.com</a><br />电话: 010-82525377转806<br /><a href="http://www.facebook.com/theGMIC">www.facebook.com/theGMIC</a><br /><a href="http://www.twitter.com/theGMIC">Twitter: @theGMIC</a><br />Copyright © GMIC SV - All rights reserved.</p>
		</footer> <!-- end #main_footer -->
	</div> <!-- end #container -->
<div id="bg">
	<img src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/bg-web3.jpg" alt="">
</div>

	<?php wp_footer(); ?>
</body>
</html>