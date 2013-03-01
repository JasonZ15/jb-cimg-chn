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
	<meta property="og:site_name" content="全球移动互联网大会" />
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
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<div id="top-bar"><div class="holder">
		<a href="http://www.thegmic.com" id="thegmic"></a>
		<a href="http://beijing.thegmic.com/cn/" id="gmic-beijing"></a>
		<a href="http://sv.thegmic.com" id="gmic-sv"></a>
		<a href="http://beijing.thegmic.com/" class="english"></a>
		<a href="http://beijing.thegmic.com/jp" class="japanese"></a>
		</div></div>

	<div id="container">
		<?php do_action('et_header_top'); ?>
		<header id="header" class="clearfix">
			<hgroup id="logo-area">
				<?php $bloginfo_name = get_bloginfo( 'name' ); ?>
				<h1 id="logo">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $bloginfo_name ); ?>"><?php if ( 'false' == et_get_option( 'flexible_logo_image', 'false' ) || '' == et_get_option( 'flexible_logo' ) ) echo apply_filters( 'et_logo_markup', $bloginfo_name ); else echo '<img src="' . esc_url( et_get_option( 'flexible_logo' ) ) . '" alt="' . esc_attr( $bloginfo_name ) . '" />'; ?></a>
				</h1>
				<!--<h2><?php bloginfo( 'description' ); ?></h2>-->
			</hgroup>
			<a href="http://beijing.thegmic.com" class="action-button" id="gmic-sv-brochure" style="margin-top:2px;position: fixed; top:0; right:0;z-index: 999999999;display: none;"><span class="color"><span class="text">English</span></span></a>
			<a href="/cn/register/"  id="go-register" class="action-button"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 26px; padding: 12px 20px 14px 5px;">注册参会</span></span></a>
			<a style="margin-left:5px;" href="/cn/sponsorship/" id="sponsor" class="action-button"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 26px; padding: 12px 20px 14px 5px;"><?php esc_html_e( '赞助大会', 'Flexible' ); ?></span></span></a>
			<a href="/cn/recommend-a-speaker/" id="re-speaker" class="action-button" style="margin-left:5px;"><span class="color" style="padding-left: 16px;"><span class="text" style="font-size: 25px; padding: 12px 23px 14px 17px;">推荐演讲嘉宾</span></span></a>
			<p class="social-buttons clearfix"><a id="fb" href="http://weibo.com/gmic" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons.png" /></a><a id="in" href="http://t.qq.com/greatwallclub" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-03.png" /></a><a id="tt" href="http://weibo.com/1656528604/yFWkzE6o7" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-02.png" /></a><a id="em" href="mailto: gmic@gwc.net" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-05.png" /></a><a id="chinese-overview" href="http://gmic.greatwallclub.com/" target="_blank" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-06.png" /></a></p>
			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>		
		</header> 
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>