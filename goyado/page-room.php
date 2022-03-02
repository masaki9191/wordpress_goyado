<?php
	/*
	Template Name: RoomPage
	*/
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>

    <div class="c-fv">
        <figure class="c-fv__img">
            <img src="<?php echo get_field("room_fv") ?>" alt="">
        </figure>
        <div class="c-fv__lead">
            <p class="c-fv__enTtl">About room</p>
            <p class="c-fv__jpTtl">お部屋について</p>
        </div>
    </div>
    <div class="c-breakmast">
        <a href="<?php echo HOME; ?>">ホーム</a>
        <p>お部屋について</p>
    </div>
    <div class="p-room">
        <div class="c-detailTop">
            <?php if( have_rows('room_detail') ): ?>
                <?php $number = 0; ?>
                <?php while( have_rows('room_detail') ) : the_row(); $number++;?>
                <p class="c-detailTop__detailTxt"><?php echo get_sub_field('room_detail_txt'); ?></p>
                <figure class="p-room__detailImg">
                    <img src="<?php echo get_sub_field('room_detail_img1'); ?>" alt="">
                    <img src="<?php echo get_sub_field('room_detail_img2'); ?>" alt="">
                </figure>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="p-room-multi">
            <h2>各部屋の写真</h2>
            <div class="p-room-multiItem">
                <?php if( have_rows('room_lists') ): ?>
                    <?php $number = 0; ?>
                    <?php while( have_rows('room_lists') ) : the_row(); $number++;?>
                    <div class="p-room-multiCol">
                        <figure class="p-room-multiCol__img">
                            <img src="<?php echo get_sub_field('room_lists_img'); ?>" alt="">
                        </figure>
                        <p class="p-room__ttl"><?php echo get_sub_field('room_lists_ttl'); ?></p>
                        <p class="p-room__detailTxt"><?php echo get_sub_field('room_lists_txt'); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="p-room-amenities">
            <div class="p-room-amenitiesSlider">
                <?php if( have_rows('room_slider') ): ?>
                    <?php $number = 0; ?>
                    <?php while( have_rows('room_slider') ) : the_row(); $number++;?>
                    <div class="p-room-amenitiesSlider__col">
                        <img src="<?php echo get_sub_field('room_slider_img'); ?>" alt="">
                        <p><?php echo get_sub_field('room_slider_ttl'); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="p-room-amenitiesDetail">
                <?php if( have_rows('room_slider_detail') ): ?>
                    <?php $number = 0; ?>
                    <?php while( have_rows('room_slider_detail') ) : the_row(); $number++;?>
                    <p class="p-room-amenitiesDetail__ttl"><?php echo get_sub_field('room_slider_detail_ttl'); ?></p>
                    <p class="p-room-amenitiesDetail__txt"><?php echo get_sub_field('room_slider_detail_txtarea'); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="p-room-price">
            <div class="p-room-priceTable"></div>
            <div class="p-room-priceDetail">
                <p class="p-room-priceDetail__ttl">料金表</p>
                <p class="p-room-priceDetail__txt">お子様の料金設定はございません。未就学児の添い寝は無料となっております。</p>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-item">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </div>

<?php get_footer(); ?>
