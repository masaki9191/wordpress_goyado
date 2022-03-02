<?php
	/*
	Template Name: ConceptPage
	*/
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>

    <div class="c-fv">
        <figure class="c-fv__img">
            <img src="<?php echo get_field("concept_fv") ?>" alt="">
        </figure>
        <div class="c-fv__lead">
            <p class="c-fv__enTtl">Concept</p>
            <p class="c-fv__jpTtl">承継～つなぐ・つむぐ～</p>
        </div>
    </div>
    <div class="c-breakmast">
        <a href="<?php echo HOME; ?>">ホーム</a>
        <p>コンセプト</p>
    </div>
    <div class="p-concept">
        <?php if( have_rows('concept_detail') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept_detail') ) : the_row(); $number++;?>
            <div class="c-detailTop u-inner-1430">
                <p class="c-detailTop__detailTxt"><?php echo get_sub_field('concept_detail_txt'); ?></p>
                <figure class="c-detailTop__detailImg">
                    <img src="<?php echo get_sub_field('concept_detail_img'); ?>" alt="">
                </figure>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('concept_lists1') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept_lists1') ) : the_row(); $number++;?>
            <div class="p-concept__layout c-concept-flex-start">
                <figure class="p-concept__layoutImg">
                    <img src="<?php echo get_sub_field('concept_img'); ?>" alt="">
                </figure>
                <div class="p-concept__layoutTxt c-concept-pos-right">
                    <h2 class="p-concept__jpTtl"><?php echo get_sub_field('concept_ttl'); ?></h2>
                    <p class="p-concept__layouttxtArea"><?php echo get_sub_field('concept_txtarea'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if( have_rows('concept_lists2') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept_lists2') ) : the_row(); $number++;?>
            <div class="p-concept__layout u-mb-100 c-concept-bg c-concept-flex-end">
                <figure class="p-concept__layoutImg">
                    <img src="<?php echo get_sub_field('concept_img'); ?>" alt="">
                </figure>
                <div class="p-concept__layoutTxt c-concept-pos-left">
                    <h2 class="p-concept__jpTtl"><?php echo get_sub_field('concept_ttl'); ?></h2>
                    <p class="p-concept__layouttxtArea"><?php echo get_sub_field('concept_txtarea'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if( have_rows('concept_lists3') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept_lists3') ) : the_row(); $number++;?>
            <div class="p-concept__layout u-mb-100 c-concept-flex-start">
                <figure class="p-concept__layoutImg">
                    <img src="<?php echo get_sub_field('concept_img'); ?>" alt="">
                </figure>
                <div class="p-concept__layoutTxt c-concept-pos-right">
                    <h2 class="p-concept__jpTtl"><?php echo get_sub_field('concept_ttl'); ?></h2>
                    <p class="p-concept__layouttxtArea"><?php echo get_sub_field('concept_txtarea'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if( have_rows('concept_lists4') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept_lists4') ) : the_row(); $number++;?>
            <div class="p-concept__layout u-mb-100 c-concept-bg c-concept-flex-end">
                <figure class="p-concept__layoutImg">
                    <img src="<?php echo get_sub_field('concept_img'); ?>" alt="">
                </figure>
                <div class="p-concept__layoutTxt c-concept-pos-left">                    
                    <h2 class="p-concept__jpTtl"><?php echo get_sub_field('concept_ttl'); ?></h2>
                    <p class="p-concept__layouttxtArea"><?php echo get_sub_field('concept_txtarea'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>