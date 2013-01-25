<?php 
/*
Template Name: Portfolio Page
*/
?>
<?php 
$et_ptemplate_settings = array();
$et_ptemplate_settings = maybe_unserialize( get_post_meta($post->ID,'et_ptemplate_settings',true) );

$fullwidth = true;
$et_ptemplate_showtitle = isset( $et_ptemplate_settings['et_ptemplate_showtitle'] ) ? (bool) $et_ptemplate_settings['et_ptemplate_showtitle'] : false;
$et_ptemplate_showdesc = isset( $et_ptemplate_settings['et_ptemplate_showdesc'] ) ? (bool) $et_ptemplate_settings['et_ptemplate_showdesc'] : false;
$et_ptemplate_detect_portrait = isset( $et_ptemplate_settings['et_ptemplate_detect_portrait'] ) ? (bool) $et_ptemplate_settings['et_ptemplate_detect_portrait'] : false;

$gallery_cats = isset( $et_ptemplate_settings['et_ptemplate_gallerycats'] ) ? (array) $et_ptemplate_settings['et_ptemplate_gallerycats'] : array();
$et_ptemplate_gallery_perpage = isset( $et_ptemplate_settings['et_ptemplate_gallery_perpage'] ) ? (int) $et_ptemplate_settings['et_ptemplate_gallery_perpage'] : 12;

$et_ptemplate_portfolio_size = isset( $et_ptemplate_settings['et_ptemplate_imagesize'] ) ? (int) $et_ptemplate_settings['et_ptemplate_imagesize'] : 2;

$et_ptemplate_portfolio_class = '';
if ( $et_ptemplate_portfolio_size == 1 ) $et_ptemplate_portfolio_class = ' et_portfolio_small';
if ( $et_ptemplate_portfolio_size == 3 ) $et_ptemplate_portfolio_class = ' et_portfolio_large';
?>

<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="clearfix<?php if ( $fullwidth ) echo ' fullwidth'; ?>">
	<div id="left-area">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>				
			<article id="post-<?php the_ID(); ?>" <?php post_class('entry clearfix'); ?>>
				<a style="float: right;" href="/cn/previous-speakers" target="_blank" id="previous-speakers" class="action-button"><span class="color"><span class="text">往届演讲嘉宾</span></span></a>
				

				<?php
					$thumb = '';
					$width = apply_filters('et_blog_image_width',640);
					$height = apply_filters('et_blog_image_height',320);
					$classtext = '';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Blogimage');
					$thumb = $thumbnail["thumb"];
				?>
				<?php if ( '' != $thumb && 'on' == et_get_option('flexible_page_thumbnails') ) { ?>
					<div class="post-thumbnail">
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>	
					</div> 	<!-- end .post-thumbnail -->
				<?php } ?>
				
				<div class="post-content">
					<?php the_content(); ?>
					<ul id="et_portfolio_sort_links" class="speakers_page"><li><a href="#keynote-speakers">主题演讲嘉宾</a></li><li><a href="#main-stage-speakers">主会场演讲嘉宾</a></li><li><a href="#g-startup-speakers">创新大赛演讲嘉宾</a></li><li><a href="#appspace-speakers">开发者星球演讲嘉宾</a></li></ul>
					<div id="et_pt_portfolio_gallery" class="clearfix responsive<?php echo $et_ptemplate_portfolio_class; ?>">
						<?php 
						sort($gallery_cats);
						foreach($gallery_cats as $gallery_cat) {
    					 ?>
							<h2 style="padding: 0 0 14px 7px;" id="<?php $mycategory = get_category( $gallery_cat ); echo $mycategory->slug; ?>"><?php echo get_cat_name( $gallery_cat ) ?></h2>
							<p style="padding: 0 0 14px 7px;">按姓氏拼音排序</p>
							<?php $gallery_query = '';
						$portfolio_count = 1;
						$et_open_row = false;
						if ( !empty($gallery_cats) ) $gallery_query = '&cat=' . implode(",", $gallery_cats);
						else echo '<!-- gallery category is not selected -->'; ?>
						<?php 
							global $wp_embed;
							$et_videos_output = '';
							$et_paged = is_front_page() ? get_query_var( 'page' ) : get_query_var( 'paged' );
						?>
						<?php query_posts("showposts=$et_ptemplate_gallery_perpage&paged=" . $et_paged . '&cat=' . $gallery_cat . "&meta_key=last_name&orderby=meta_value&order=ASC"); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<?php $width = 260;
							$height = 170;
							
							if ( $et_ptemplate_portfolio_size == 1 ) {
								$width = 140;
								$height = 94;
								$et_portrait_height = 170;
							}
							if ( $et_ptemplate_portfolio_size == 2 ) $et_portrait_height = 315;
							if ( $et_ptemplate_portfolio_size == 3 ) {
								$width = 430;
								$height = 283;
								$et_portrait_height = 860;
							}						
							
							$et_auto_image_detection = false;
							if ( has_post_thumbnail( $post->ID ) && $et_ptemplate_detect_portrait ) {
								$wordpress_thumbnail = get_post( get_post_thumbnail_id($post->ID) );
								$wordpress_thumbnail_url = $wordpress_thumbnail->guid;
								
								if ( et_is_portrait($wordpress_thumbnail_url) )	$height = $et_portrait_height;
							}
													
							$titletext = get_the_title();
							$et_portfolio_title = get_post_meta($post->ID,'et_portfolio_title',true) ? get_post_meta($post->ID,'et_portfolio_title',true) : get_the_title();
							$et_videolink = get_post_meta($post->ID,'et_videolink',true) ? get_post_meta($post->ID,'et_videolink',true) : '';
							
							if ( '' != $et_videolink ){
								$et_video_id = 'et_video_post_' . $post->ID;
								$et_videos_output .= '<div id="'. esc_attr( $et_video_id ) .'">' . $wp_embed->shortcode( '', $et_videolink ) . '</div>';
							}

							$thumbnail = get_thumbnail($width,$height,'',$titletext,$titletext,true,'et_portfolio');
							$thumb = $thumbnail["thumb"];
							
							if ( $et_ptemplate_detect_portrait && $thumbnail["use_timthumb"] && et_is_portrait($thumb) ) {
								$height = $et_portrait_height;
							} ?>
						
							<?php if ( $portfolio_count == 1 || ( $et_ptemplate_portfolio_size == 2 && (!$fullwidth && ($portfolio_count+1) % 2 == 0) ) || ( $et_ptemplate_portfolio_size == 3 && (($portfolio_count+1) % 2 == 0) ) ) {
								$et_open_row = true; ?>
								<div class="et_pt_portfolio_row clearfix">
							<?php } ?>
							
									<div class="et_pt_portfolio_item">
										
										<div class="et_pt_portfolio_entry<?php if ( $height == $et_portrait_height ) echo ' et_portrait_layout'; ?>">
											<div class="et_pt_portfolio_image<?php if ($et_videolink <> '') echo ' et_video'; ?>">
												<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, ''); ?>
												<span class="et_pt_portfolio_overlay"></span>
												
												
												<!--<a class="et_portfolio_more_icon" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','Flexible'); ?></a>-->
											</div> <!-- end .et_pt_portfolio_image -->
										</div> <!-- end .et_pt_portfolio_entry -->
										<?php if ($et_ptemplate_showtitle) { ?>
											<h2 class="et_pt_portfolio_title" style="padding-bottom: 8px;"><!--<a href="<?php the_permalink(); ?>" style="font-size: 18px;">--><?php echo $et_portfolio_title; ?></h2>
										<?php } ?>
										<?php if ($et_ptemplate_showdesc) { ?>
											<p style="line-height: 18px">
												<span style="display: block; padding-bottom: 4px;color:#333;"><b><?php echo get_post_meta($post->ID,'person_title',true); ?></b></span>
												<b style="color: #00B7F3;"><?php echo get_post_meta($post->ID,'person_company',true); ?></b>
											</p>
										<?php } ?>
									</div> <!-- end .et_pt_portfolio_item -->
							
							<?php if ( ($et_ptemplate_portfolio_size == 2 && !$fullwidth && $portfolio_count % 2 == 0) || ( $et_ptemplate_portfolio_size == 3 && ($portfolio_count % 2 == 0) ) ) {
								$et_open_row = false; ?>
								</div> <!-- end .et_pt_portfolio_row -->
							<?php } ?>
							
							<?php if ( ($et_ptemplate_portfolio_size == 2 && $fullwidth && $portfolio_count % 3 == 0) || ($et_ptemplate_portfolio_size == 1 && !$fullwidth && $portfolio_count % 3 == 0) || ($et_ptemplate_portfolio_size == 1 && $fullwidth && $portfolio_count % 5 == 0) ) { ?>
								</div> <!-- end .et_pt_portfolio_row -->
								<div class="et_pt_portfolio_row clearfix">
								<?php $et_open_row = true; ?>
							<?php } ?>
							
						<?php $portfolio_count++; 
						endwhile; ?>
							<?php if ( $et_open_row ) { 
								$et_open_row = false; ?>
								</div> <!-- end .et_pt_portfolio_row -->
							<?php } ?>
							<div class="page-nav clearfix">
								<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
								else { ?>
									 <?php get_template_part('includes/navigation'); ?>
								<?php } ?>
							</div> <!-- end .entry -->
						<?php else : ?>
							<?php if ( $et_open_row ) { 
								$et_open_row = false; ?>
								</div> <!-- end .et_pt_portfolio_row -->
							<?php } ?>
							<?php get_template_part('includes/no-results'); ?>
						<?php endif; wp_reset_query(); ?>
						
						<?php if ( $et_open_row ) { 
							$et_open_row = false; ?>
							</div> <!-- end .et_pt_portfolio_row -->
						<?php } ?>
						
						<?php if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>'; ?>
						<?php } ?>
						
					</div> <!-- end #et_pt_portfolio_gallery -->
					
					<?php wp_link_pages(array('before' => '<p><strong>'.esc_attr__('Pages','Flexible').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php edit_post_link(esc_attr__('Edit this page','Flexible')); ?>
				</div> 	<!-- end .post-content -->
			</article> <!-- end .entry -->
		<?php endwhile; // end of the loop. ?>
	</div> <!-- end #left_area -->

	<?php if ( ! $fullwidth ) get_sidebar(); ?>
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>