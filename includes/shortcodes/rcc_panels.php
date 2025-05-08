<?php
/**
 * Display Panels using CPT panels
 */

function rcc_panels( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'         => 'panel',
        'posts_per_page'    => -1
    ];

    $query  = new WP_Query($args);

    ob_start();
    if( $query->have_posts()):  ?>
        <section class="panels">
            <?php while( $query->have_posts() ): $query->the_post(); ?>
                <div class="panel">
                    <?php echo the_content(); ?>
                </div>
            <?php endwhile; ?>
        </section>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}