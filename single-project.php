<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'index'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	
	
	<div id="content-area" class="fullwidth clearfix">
		<div id="left-area">
			<?php
		$media = get_post_meta( $post->ID, '_et_used_images', true );
		$width = apply_filters( 'et_single_project_width', 240 );
		$height = apply_filters( 'et_single_project_height', 240 );
		
		if ( $media ){
			echo '<div class="flexslider"><ul class="slides">';
			foreach( (array) $media as $et_media ){
				echo '<li class="slide">';
				
				if ( is_numeric( $et_media ) ) {
					$et_fullimage_array = wp_get_attachment_image_src( $et_media, 'full' );
					if ( $et_fullimage_array ){
						$et_fullimage = $et_fullimage_array[0];
						echo '<img src="' . esc_url( et_new_thumb_resize( et_multisite_thumbnail($et_fullimage ), $width, $height, '', true ) ) . '" width="' . esc_attr( $width ) . '" height="' . esc_attr( $height ) . '" />';
					}
				} else {
					$video_embed = $wp_embed->shortcode( '', $et_media );
														
					$video_embed = preg_replace('/<embed /','<embed wmode="transparent" ',$video_embed);
					$video_embed = preg_replace('/<\/object>/','<param name="wmode" value="transparent" /></object>',$video_embed); 
					$video_embed = preg_replace("/height=\"[0-9]*\"/", "height={$height}", $video_embed);
					$video_embed = preg_replace("/width=\"[0-9]*\"/", "width={$width}", $video_embed);
					
					echo $video_embed;								
				}
				echo '</li>';
			}
			echo '</ul></div>';
		} else {
			$thumb = '';
			$classtext = 'single_project_image';
			$titletext = get_the_title();
			$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Ajaximage');
			$thumb = $thumbnail["thumb"];
			
			print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext);
		}
	?>
	<div style="float: right; padding-right: 12px;padding-top:20px;">
		<b>Vote for Others:</b>
		<ul style="padding-bottom:6px;">
			<?php
			global $post;
			$args = array( 'numberposts' => 5, 'post_type' => 'project', 'orderby' => 'rand' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
			<?php wp_reset_query(); ?>
		</ul>
		<b><a href="http://www.gmic-sv.com/appattack-voting/">See All Apps &rarr;</a></b><br />
		<b><a href="http://www.gmic-sv.com/appattack/">Submit Your Own App &rarr;</a></b>
	 </div>
	<h1 style="" class="page_title"><?php the_title(); ?></h1>	
	<p>Developer: 
		<?php 
		$developer_website = get_post_meta($post->ID,'app_url',true);

  if ( $developer_website ) { ?>
    <b><a target="_blank" href="<?php echo get_post_meta($post->ID,'app_url',true); ?>"><?php echo get_post_meta($post->ID,'app_developer',true); ?></a></b><br />
  <?php }
  else { ?>
    <b><?php echo get_post_meta($post->ID,'app_developer',true); ?></b><br />
  <?php } ?>
		Compatible Platforms: <b><?php echo get_post_meta($post->ID,'app_platforms',true); ?></b>
	</p>
	<div style="position: static; padding: 14px 0 0 0; " class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="450" data-show-faces="true"></div>
	
			<?php get_template_part('loop', 'single_project'); ?>

		</div> <!-- end #left_area -->
	<?php endwhile; ?>
	</div> 	<!-- end #content-area -->
	
<?php get_footer(); ?>