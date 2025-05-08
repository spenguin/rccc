<?php
/**
 * Display Posters using CPT posters
 */

function rcc_posters( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'         => 'poster',
        'posts_per_page'    => -1
    ];

    $query  = new WP_Query($args); 

    ob_start();
    if( $query->have_posts()):  ?>
        <section class="posters">
            <?php while( $query->have_posts() ):$query->the_post(); ?>
            <div class="poster">
                <?php
                    the_post_thumbnail();
                ?>
            </div>
            <?php endwhile; ?>
        </section>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}