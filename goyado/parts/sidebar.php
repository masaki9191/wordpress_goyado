<div class="p-blog-categoryItem">
    <div class="p-blog-categoryLists">
        <p class="p-blog-categoryLists__lead">カテゴリー</p>
        <ul class="p-blog-categoryLists__lists">
        <?php
        $args = array(
            'post_type' => 'menu-item'
        );

        $categories = get_categories( $args );
        // print_r($categories);
        foreach ( $categories as $category ) {
            $category_link = get_category_link( $category->cat_ID );
            ?>
        <li><a href="<?php echo $category_link; ?>"><span><?php echo $category->name?></span><span>（<?php echo $category->count;?>）</span></a></li>
        <?php } ?>
        </ul>
    </div>
    <div class="p-blog-categoryLists">
        <p class="p-blog-categoryLists__lead">月別アーカイブ</p>
        <ul class="p-blog-categoryLists__lists">
            <?php
            $firstdate = date( 'Y' ) . '-01-01';
            $year_prev = null;
            $months = $wpdb->get_results( "SELECT DISTINCT MONTH( post_date ) AS month ,
                                                                            YEAR( post_date ) AS year,
                                                                            COUNT( id ) as post_count FROM $wpdb->posts
                                                                            WHERE post_status = 'publish' and post_date <= now( ) and post_date >= $firstdate
                                                                            and post_type = 'post'
                                                                            GROUP BY month , year
                                                                            ORDER BY post_date DESC" );
            ?>
            <?php foreach ( $months as $month ):?>
            <li>
                <a href="<?php echo home_url(); ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>/">
                    <?php echo $month->year; ?>年<?php echo $month->month; ?>月 (<?php echo $month->post_count; ?>)
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="p-blog-categoryLists">
        <p class="p-blog-categoryLists__lead">最近の記事</p>


        <ul class="p-blog-categoryLists__lists">
        <?php 
        // Define our WP Query Parameters
        $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        
        
        <?php 
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post(); 
        // Display the Post Title with Hyperlink
        ?>        
        
        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>  
        
        <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>
        </ul>

    </div>
</div>