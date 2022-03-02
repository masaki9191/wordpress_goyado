<?php
	get_header();
?>

    <div class="c-fv">
        <figure class="c-fv__img">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/concept/ph_fv.jpg" alt="">
        </figure>
        <div class="c-fv__lead">
            <p class="c-fv__enTtl">Contact Us</p>
            <p class="c-fv__jpTtl">お問い合わせ</p>
        </div>
    </div>
    <div class="c-breakmast">
        <a href="<?php echo HOME; ?>">ホーム</a>
        <p>お問い合わせ</p>
    </div>
    <div class="p-contact">
        <?php echo do_shortcode ('[mwform_formkey key = "221"]'); ?>
    </div>

<?php get_footer(); ?>