<?php get_header(); ?>
<?php get_template_part('includes/breadcrumbs', 'page'); ?>
<?php if ( 'on' == et_get_option('flexible_featured', 'on') && is_home() ) get_template_part( 'includes/featured', 'home' ); ?>


<?php if ( 'on' == et_get_option('flexible_quote','on') ) { ?>
	<div id="quote">
		<h2><?php echo et_get_option('flexible_quote_heading'); ?></h2>
		<p><?php echo esc_html( et_get_option('flexible_quote_text') ); ?></p>
	</div> <!-- end #quote -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_display_recentwork_section','on') ) { ?>
	<section id="portfolio" class="clearfix">
		<h1 class="section-title"><?php esc_html_e( 'Design', 'Flexible' ); ?></h1>
		<span class="section-tagline"><?php esc_html_e( 'Recent work', 'Flexible' ); ?></span>
		
		<a href="<?php echo esc_url( et_get_option( 'flexible_more_work_url', '#' ) ); ?>" class="more"><?php esc_html_e( 'More work &raquo;', 'Flexible' ); ?></a>
		
		<?php
			$portfolio_args = array(
				'post_type' => 'project',
				'showposts' => (int) et_get_option('flexible_homepage_numposts_projects'),
				'tax_query' => array(
					array(
						'taxonomy' => 'project_category',
						'field' => 'id',
						'terms' => (array) et_get_option('flexible_homepage_exlcats_projects'),
						'operator' => 'NOT IN'
					)
				)
			);
		
			$categories = get_terms( 'project_category', array( 'exclude' => array( et_get_option('flexible_homepage_exlcats_projects') ) ) );
			if ( $categories ){
				echo '<ul id="et_portfolio_sort_links">';
					echo '<li class="active">' . '<a href="#" data-categories_id="all">' . __( 'All', 'Flexible' ) . '</a>' . '</li>';
					foreach ( $categories as $category ){
						echo '<li>' . '<a href="#" data-categories_id="' . esc_attr( 'project_cat_' . $category->term_taxonomy_id ) . '">' . esc_html( $category->name ) . '</a>' . '</li>';
					}
				echo '</ul>';
			}
		?>
		
		<div id="portfolio-grid" class="clearfix">
		<?php
			$portfolio_query = new WP_Query( apply_filters( 'et_home_portfolio_args', $portfolio_args ) );
			while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();			
				get_template_part( 'includes/entry', 'portfolio' );
			endwhile; 
			wp_reset_postdata(); 
		?>
		</div> <!-- end #portfolio-grid -->
	</section> <!-- end #portfolio -->
<?php } ?>
<div id="speaker_slider" class="image_carousel">
	<div class="speaker">
	<div class="title"><h2>演讲嘉宾</h2></div>
	<div id="foo1">		
		<div id="speaker2"><a href="#"></a></div>
		<div id="speaker3"><a href="#"></a></div>
		<div id="speaker4"><a href="#"></a></div>
		<div id="speaker5"><a href="#"></a></div>
		<div id="speaker6"><a href="#"></a></div>
		<div id="speaker7"><a href="#"></a></div>
		<div id="speaker8"><a href="#"></a></div>
		<div id="speaker9"><a href="#"></a></div>
		<div id="speaker10"><a href="#"></a></div>
		<div id="speaker11"><a href="#"></a></div>
        <div id="speaker12"><a href="#"></a></div>
        <div id="speaker13"><a href="#"></a></div>
        <div id="speaker14"><a href="#"></a></div>
        <div id="speaker15"><a href="#"></a></div>
        <div id="speaker16"><a href="#"></a></div>
        <div id="speaker17"><a href="#"></a></div>
        <div id="speaker18"><a href="#"></a></div>
        <div id="speaker1"><a href="#"></a></div>
	</div></div>
	<div class="clearfix"></div>
</div>
<?php if ( 'on' == et_get_option('flexible_display_fromblog_section','on') && ( 'false' == et_get_option('flexible_blog_style','false') ) ) { ?>
	<section id="blog" class="clearfix">
		<div class="news">
	<div class="title"><h2>最新消息</h2></div>
		<!--<span class="section-tagline"><?php esc_html_e( '最新消息', 'Flexible' ); ?></span>-->
		
		
		
		<div id="blog-grid">
			<?php $i = 0; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
					$i++;
					$last_class = ( $i % 3 == 0 ) ? ' last' : '';
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item' . $last_class); ?>>
					

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="mooth-hotimg">
                     <?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

   the_post_thumbnail('thumbnail');

 }
 ?></div>
					<p class="meta-info">
					<?php printf( __('Posted on %1$s by %2$s', 'Flexible'), get_the_time( apply_filters( 'et_home_post_date_format', 'M j' ) ), et_get_the_author_posts_link() ); ?></p>
					<p><?php the_excerpt(); ?></p>
					<span class="date"><?php the_date('Y-m-d', '<h2>', '</h2>'); ?>
</span>
					<!--<p><?php truncate_post(375); ?></p>-->  
                    
				</article> <!-- end .blog-item -->
			<?php endwhile; else : ?>
				<article id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'Flexible' ); ?></h2>
				</article><!-- end #post-0 -->
			<?php endif; ?>
		</div> <!-- end #blog-grid -->
        <a href="<?php echo esc_url( et_get_option( 'flexible_more_posts_url', '#' ) ); ?>" class="more"><?php esc_html_e( '阅读更多 &raquo;', 'Flexible' ); ?></a>
        </div>
	</section> <!-- end #blog -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_blog_style') ) { ?>
	<div id="content-area" class="clearfix">
		<div id="left-area">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('includes/entry', 'index'); ?>
			<?php
			endwhile;
				if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { get_template_part('includes/navigation','entry'); }
			else:
				get_template_part('includes/no-results','entry');
			endif; ?>
		</div> 	<!-- end #left-area -->
		<?php get_sidebar(); ?>
	</div> 	<!-- end #content-area -->
<?php } ?>
	
<?php get_footer(); ?>