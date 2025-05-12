<?php
/**
 * Display Panels using CPT panels
 */

function rcc_panels( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'         => 'panel',
        'posts_per_page'    => -1,
        'orderby'           => 'meta_value_num',
        'meta_key'          => 'start_time',
        'order'             => 'ASC'
    ];

    $query  = new WP_Query($args);

    ob_start();
    if( $query->have_posts()):  ?>
        <section class="panels">
            <?php while( $query->have_posts() ): $query->the_post(); 
                $custom = get_post_custom();

            ?>
                <div class="panel">
                    <div class="panel__time">
                        <?php echo $custom['start_time'][0] . ' to ' . $custom['end_time'][0]; ?>
                    </div>
                    <div class="panel__description">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}