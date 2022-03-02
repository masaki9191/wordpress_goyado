<?php
	/*
	Template Name: FrontPage
	*/
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
?>

<div class="mainFV">
        <div class="intro_top_slider_container">
            <div class="intro_top_page_slider">
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
                <div class="intro_top_slider_item">
                    <div class="intro_top_slider_item_inner">
                        <div class="intro_top_slider_image"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainFV-txtItem">
            <div class="mainFV-txt">
                <p class="mainFV-startDate">2021年12月新規開業</p>
                <h1 class="mainFV-txtArea">GOYADOで過ごす<br>自然と調和する“時間”</h1>
                <p class="mainFV-txtBottom">見渡す限りの自然の中で、身も心も預けられる宿。<br>GOYADOは「自分だけの幸せな時間」を「自分で見つけられる」簡易宿所です。</p>
            </div>
        </div>
    </div>
    <div class="full_container">
        <div class="top_news_info_container">
            <div class="news_info_title">
                <h3>お知らせ</h3>
            </div>
            <div class="news_info_body">
                <div class="news_info_content">
                <?php
                $args1 = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'cat' => 'news'
                );
                $custom_query1 = new WP_Query( $args1 );
                ?>
                <?php if( $custom_query1->have_posts() ) : ?>    
                    <div class="news_list_slider">            
                    <?php while ( $custom_query1->have_posts() ) : $custom_query1->the_post(); ?> 
                        <a href="<?php the_permalink(); ?>" class="news_item">
                            <p class="news_datetime">お知らせ</p>
                            <h3 class="news_title"><?php echo the_title(); ?></h3>
                        </a>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>  
                <?php wp_reset_postdata(); ?>                    
                </div>
                <div class="news_pager"></div>
                <div class="news_pager_content">
                    <button class="news_slick_prev"></button>
                    <div class="news_pager_number"></div>
                    <button class="news_slick_next"></button>
                </div>
            </div>
            <div class="news_info_link_wrap">
                <a href="<?php echo HOME . 'blog'; ?>" class="news_info_link"><span>お知らせ一覧へ</span></a>
            </div>
        </div>
    </div>
    <div id="concept" class="p-top-concept">
        <?php if( have_rows('concept') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('concept') ) : the_row(); $number++;?>
            <div class="p-top-concept__spTtl u-sp-block">
                <p class="p-top-concept__enTtl"><?php echo get_sub_field('concept_en_ttl'); ?></p>
                <h2 class="p-top-concept__jpTtl"><?php echo get_sub_field('concept_jp_ttl'); ?></h2>
            </div>
            <figure class="p-top-concept__img">
                <img src="<?php echo get_sub_field('concept_img'); ?>" alt="">
            </figure>
            <div class="p-top-concept__txtArea">
                <div class="p-top-concept__pcTtl u-pc-block">
                    <p class="p-top-concept__enTtl"><?php echo get_sub_field('concept_en_ttl'); ?></p>
                    <h2 class="p-top-concept__jpTtl"><?php echo get_sub_field('concept_jp_ttl'); ?></h2>
                </div>
                <p class="p-top-concept__txt"><?php echo get_sub_field('concept_txtarea'); ?></p>
                <div class="p-top-concept__moreBtn">
                    <div class="btn01">
                        <a href="<?php echo HOME . 'concept'; ?>">
                            <div class="btn01_border">
                                <div class="btn01_default"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                                <div class="btn01_hover"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                            </div>
                            <div class="btn01_arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="room" class="p-top-room">
        <?php if( have_rows('about') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('about') ) : the_row(); $number++;?>
            <div class="p-top-concept__txtArea">
                <div class="u-pc-block">
                    <p class="p-top-concept__enTtl"><?php echo get_sub_field('about_en_ttl'); ?></p>
                    <h2 class="p-top-concept__jpTtl"><?php echo get_sub_field('about_jp_ttl'); ?></h2>
                </div>
                <p class="p-top-concept__txt"><?php echo get_sub_field('about_txtarea'); ?></p>
                <div class="p-top-concept__moreBtn">
                    <div class="btn01">
                        <a href="<?php echo HOME . 'room'; ?>">
                            <div class="btn01_border">
                                <div class="btn01_default"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                                <div class="btn01_hover"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                            </div>
                            <div class="btn01_arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
            <figure class="p-top-concept__img">
                <div class="p-top-concept__spTtl u-sp-block">
                    <p class="p-top-concept__enTtl">About room</p>
                    <h2 class="p-top-concept__jpTtl">お部屋について</h2>
                </div>
                <img src="<?php echo get_sub_field('about_img'); ?>" alt="">
            </figure>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="p-top-amenities">
        <div class="p-top-amenities__lead">
            <p class="p-top-amenities__enTtl">About room</p>
            <p class="p-top-amenities__jpTtl">アメニティ</p>
        </div>
        <?php if( have_rows('about_slider') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('about_slider') ) : the_row(); $number++;?>
            <div class="p-top-amenities-item">
                <div class="p-top-amenities-slider">
                    <?php if( have_rows('slider_group') ): ?>
                        <?php $number = 0; ?>
                        <?php while( have_rows('slider_group') ) : the_row(); $number++;?>
                        <div class="p-top-amenities-slider__col">
                            <img src="<?php echo get_sub_field('slider_img'); ?>" alt="">
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <p class="p-top-amenities__bottomTxt"><?php echo get_sub_field('slider_txtarea'); ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="meals" class="p-top-room">
        <?php if( have_rows('meals') ): ?>
            <?php $number = 0; ?>
            <?php while( have_rows('meals') ) : the_row(); $number++;?>
            <div class="p-top-concept__txtArea">
                <div class="u-pc-block">
                    <p class="p-top-concept__enTtl">Meals / options</p>
                    <h2 class="p-top-concept__jpTtl">食事・オプション</h2>
                </div>
                <p class="p-top-concept__txt"><?php echo get_sub_field('meals_txtarea'); ?></p>
                <div class="p-top-concept__moreBtn">
                    <div class="btn01">
                        <a href="<?php echo HOME . 'meals'; ?>">
                            <div class="btn01_border">
                                <div class="btn01_default"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                                <div class="btn01_hover"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                            </div>
                            <div class="btn01_arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
            <figure class="p-top-concept__img">
                <div class="p-top-concept__spTtl u-sp-block">
                    <p class="p-top-concept__enTtl">Meals / options</p>
                    <h2 class="p-top-concept__jpTtl">食事・オプション</h2>
                </div>
                <img src="<?php echo get_sub_field('meals_img'); ?>" alt="">
            </figure>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="news" class="p-top-news">
        <figure class="p-top-news__img">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/top/ph_news.png" alt="">
        </figure>
        <div class="p-top-news-item">
            <p class="p-top-concept__enTtl">News</p>
            <h2 class="p-top-concept__jpTtl">お知らせ・ブログ</h2>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'cat' => 'news'
            );
            $custom_query = new WP_Query( $args );
            ?>
            <?php if( $custom_query->have_posts() ) : ?>                
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?> 
                    <a href="<?php the_permalink(); ?>" class="p-top-news__list">
                        <div class="p-top-news__lead">
                            <p class="p-top-news__category">お知らせ</p>
                            <p class="p-top-news__date"><?php  echo get_post_time('Y.m.d');?></p>
                        </div>
                        <p class="p-top-news__txt"><?php echo the_title(); ?></p>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="p-top-concept__moreBtn">
                    <div class="btn01">
                        <a href="blog.html">
                            <div class="btn01_border">
                                <div class="btn01_default"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                                <div class="btn01_hover"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                            </div>
                            <div class="btn01_arrow"></div>
                        </a>
                    </div>
                </div>
            <?php endif; ?>            
        </div>
    </div>
    <div id="faq" class="faq">
        <div class="u-inner-1430">
            <h2>よくある質問</h2>
            <div class="faq__content">
                <?php if( have_rows('faq') ): ?>
                    <?php $number = 0; ?>
                    <?php while( have_rows('faq') ) : the_row(); $number++;?>
                    <div class="faq__item">
                        <button class="collapsible"><span>Q</span><span><?php echo get_sub_field('faq_ttl'); ?></span></button>
                        <div class="content">
                            <p><?php echo get_sub_field('faq_txt'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="p-top-access">
        <div class="p-top-concept__txtArea">
            <div class="u-pc-block">
                <p class="p-top-concept__enTtl">Access</p>
                <h2 class="p-top-concept__jpTtl">アクセス</h2>
            </div>
            <p class="p-top-concept__txt">〒869-1231<br>熊本県大津町平川1045<br><span>※GoogleMapで検索する場合は「郷乃恵入り道」を検索していただき、そこから1本道を奥まで突き進んでいただくとございます。なお、途中離合ができませんので徐行でおすすみください。</span>電話：080-5800-5810<br>Mail:toiawase＠goyado.jp</p>
            <div class="p-top-concept__moreBtn">
                <div class="btn01">
                    <a href="<?php echo HOME . 'access'; ?>">
                        <div class="btn01_border">
                            <div class="btn01_default"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                            <div class="btn01_hover"><span>も</span><span>っ</span><span>と</span><span>見</span><span>る</span></div>
                        </div>
                        <div class="btn01_arrow"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-top-concept__img">
            <div class="p-top-concept__spTtl u-sp-block">
                <p class="p-top-concept__enTtl">Access</p>
                <h2 class="p-top-concept__jpTtl">アクセス</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.645184623152!2d130.86261471518537!3d32.90754818093288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540e151b0f7ba91%3A0x330f4f3859228fa4!2z6YO35LmD5oG177yI44GV44Go44Gu44KB44GQ44G_77yJ!5e0!3m2!1sen!2sjp!4v1642149210625!5m2!1sen!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

<?php get_footer(); ?>