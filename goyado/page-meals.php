<?php
	/*
	Template Name: MealsPage
	*/
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>

    <div class="c-fv">
        <figure class="c-fv__img">
            <img src="<?php echo get_field("meals_fv") ?>" alt="">
        </figure>
        <div class="c-fv__lead">
            <p class="c-fv__enTtl">Meals / Option</p>
            <p class="c-fv__jpTtl">食事・オプション</p>
        </div>
    </div>
    <div class="c-breakmast">
        <a href="<?php echo HOME; ?>">ホーム</a>
        <p>食事・オプション</p>
    </div>
    <div class="p-meals">
        <div class="c-detailTop">
            <?php if( have_rows('meals_detail') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('meals_detail') ) : the_row(); $number++;?>
                <p class="c-detailTop__detailTxt"><?php echo get_sub_field('meals_detail_txtarea'); ?></p>
                <figure class="c-detailTop__detailImg">
                    <img src="<?php echo get_sub_field('meals_detail_img'); ?>" alt="">
                </figure>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="p-meals-lists">
            <?php if( have_rows('meals_plan') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('meals_plan') ) : the_row(); $number++;?>
                <a href="#p_meals_plan1" class="p-meals-listsCol">
                    <figure class="p-meals-listsCol__img">
                        <img src="<?php echo get_sub_field('meals_plan_img'); ?>" alt="">
                    </figure>
                    <p class="p-meals-listsCol__ttl"><?php echo get_sub_field('meals_plan_ttl'); ?></p>
                    <p class="p-meals-listsCol__txt"><?php echo get_sub_field('meals_plan_txtarea'); ?></p>
                </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div id="p_meals_plan1" class="p-meals-item u-bg-gray">
            <?php if( have_rows('meals_plan1_detail') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('meals_plan1_detail') ) : the_row(); $number++;?>
                <div class="p-meals-itemTxt">
                    <h3><?php echo get_sub_field('meals_plan1_ttl'); ?></h3>
                    <p><?php echo get_sub_field('meals_plan1_txtarea'); ?></p>
                </div>
                <div class="p-meals-itemImgSlider">
                    <?php if( have_rows('meals_plan1_slider') ): ?>
                        <?php $number = 0; ?>
                        <?php while( have_rows('meals_plan1_slider') ) : the_row(); $number++;?>
                            <div class="p-meals-itemImgSlider__img">
                                <img src="<?php echo get_sub_field('meals_plan1_slider_img'); ?>" alt="">
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div id="p_meals_plan2" class="p-meals-item">
            <?php if( have_rows('meals_plan2_detail') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('meals_plan2_detail') ) : the_row(); $number++;?>
                <div class="p-meals-itemTxt">
                    <h3><?php echo get_sub_field('meals_plan2_ttl'); ?></h3>
                    <p><?php echo get_sub_field('meals_plan2_txtarea'); ?></p>
                </div>
                <div class="p-meals-itemImgSlider">
                    <?php if( have_rows('meals_plan2_slider') ): ?>
                        <?php $number = 0; ?>
                        <?php while( have_rows('meals_plan2_slider') ) : the_row(); $number++;?>
                        <div class="p-meals-itemImgSlider__img">
                            <img src="<?php echo get_sub_field('meals_plan2_slider_img'); ?>" alt="">
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div id="p_meals_plan3" class="p-meals-item u-bg-gray">
            <?php if( have_rows('meals_plan3_detail') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('meals_plan3_detail') ) : the_row(); $number++;?>
                <div class="p-meals-itemTxt">
                    <h3><?php echo get_sub_field('meals_plan3_ttl'); ?></h3>
                    <p><?php echo get_sub_field('meals_plan3_txtarea'); ?></p>
                </div>
                <div class="p-meals-itemImgSlider">
                    <?php if( have_rows('meals_plan3_slider') ): ?>
                        <?php $number = 0; ?>
                        <?php while( have_rows('meals_plan3_slider') ) : the_row(); $number++;?>
                        <div class="p-meals-itemImgSlider__img">
                            <img src="<?php echo get_sub_field('meals_plan3_slider_img'); ?>" alt="">
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>