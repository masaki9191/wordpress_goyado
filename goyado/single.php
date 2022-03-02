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
        <a href="blog.html">ブログ</a>
        <p>詳細ペイジー</p>
    </div>
    <div class="p-blog">
        <div class="p-blog-lists">
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
			<h3>
				<?php the_title(); ?>
			</h3>
            <figure class="p-blog-detailImg">
				<?php the_post_thumbnail(); ?>
            </figure>
            <p class="p-blog-detailTxt"><?php the_content(); ?></p>
            <div class="p-blog-previewBtn">
			<?php
				$previous = get_previous_post();
				$next = get_next_post();
				?>
				<?php if ( get_previous_post() ) : ?>
					<a href="<?php the_permalink($previous); ?>" class="p-blog__preview">
						<svg xmlns="http://www.w3.org/2000/svg" width="6.567" height="11.72" viewBox="0 0 6.567 11.72">
							<path id="Path_24" data-name="Path 24" d="M-7649.707-5915.577l-5.507,5.507,5.507,5.506" transform="translate(7655.921 5915.931)" fill="none" stroke="#000" stroke-width="1"/>
						</svg>
						<p>前の記事</p>
					</a>
				<?php else: ?>
					<a href="#" class="p-blog__preview">
						<p></p>
					</a>
				<?php endif;?>
				<?php if ( get_next_post() ) : ?>
					<a href="<?php the_permalink($next); ?>" class="p-blog__next">
						<p>次の記事</p>
						<svg xmlns="http://www.w3.org/2000/svg" width="6.567" height="11.72" viewBox="0 0 6.567 11.72">
							<path id="Path_24" data-name="Path 24" d="M-7655.214-5915.577l5.507,5.507-5.507,5.506" transform="translate(7655.567 5915.931)" fill="none" stroke="#000" stroke-width="1"/>
						</svg>
					</a>
				<?php else: ?>
					<a href="#" class="p-blog__next">
						<p></p>
					</a>
				<?php endif;?>
            </div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
        </div>        
   		<?php include locate_template('parts/sidebar.php'); ?>
    </div>

<?php get_footer(); ?>