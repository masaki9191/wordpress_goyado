<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
	<div class="c-fv">
        <figure class="c-fv__img">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/blog/ph_fv.jpg" alt="">
        </figure>
        <div class="c-fv__lead">
            <p class="c-fv__enTtl">Blog</p>
            <p class="c-fv__jpTtl">ブログ</p>
        </div>
    </div>
    <div class="c-breakmast">
        <a href="<?php echo HOME; ?>">ホーム</a>
        <p>ブログ</p>
    </div>
    <div class="p-blog">
        <div class="p-blog-lists">
			<?php
			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
			$args = array(
				'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
				'paged'          => $current_page // current page
			);
			query_posts( $args );
			
			$wp_query->is_archive = true;
			$wp_query->is_home = false;
			?>
			<?php if ( have_posts() ) : ?>
				<?php while(have_posts()): the_post(); ?>  
					<a href="<?php the_permalink(); ?>" class="p-blog-link">
						<div class="p-blog-link__lead">
							<p class="p-blog-link__leadCategory"><?php echo get_the_category()[0]->name; ?></p>
							<p class="p-blog-link__leadDate"><?php echo get_post_time('Y.m.d'); ?></p>
						</div>
						<p class="p-blog-link__txt"><?php the_title(); ?></p>
					</a>                      
				<?php endwhile; ?>
				<?php  if( function_exists('wp_pagenavi') ) :  // WP-PageNavi function ?>
					<?php wp_pagenavi();?>
				<?php endif; ?>
			<?php endif; ?>
            
        </div>
   		<?php include locate_template('parts/sidebar.php'); ?>
    </div>
<?php
get_footer();?>