<?php
/**
 * Display Exhibitors using CPT exhibitors
 */

function rcc_exhibitors( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'         => 'exhibitor',
        'posts_per_page'    => -1
    ];

    $query  = new WP_Query($args);

    ob_start();
    if( $query->have_posts()):  ?>
        <section class="exhibitors">
            <h1>Exhibitors</h1>
            <!-- <?php while( $query->have_posts() ): $query->the_post(); ?>
                <div class="panel">
                    <?php echo the_content(); ?>
                </div>
            <?php endwhile; ?> -->
        </section>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}