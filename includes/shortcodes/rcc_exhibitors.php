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
        <section class="exhibitors card--list">
            <?php while( $query->have_posts() ): $query->the_post(); 
                $facebook_handle    = get_post_meta( $query->post->ID, 'facebook_handle', TRUE ); 
                $instagram_handle   = get_post_meta( $query->post->ID, 'instagram_handle', TRUE ); 
                $twitter_handle     = get_post_meta( $query->post->ID, 'twitter_handle', TRUE ); 
                $tiktok_handle      = get_post_meta( $query->post->ID, 'tiktok_handle', TRUE );
                $website            = get_post_meta( $query->post->ID, 'website', TRUE );            
            
            ?>
                <div class="exhibitor card--list__item">
                    <h3><?php echo the_title(); ?></h3>
                    <div class="card--list__item--social-media">
                        <?php if(!empty($facebook_handle)): ?>
                            <a href="https://facebook.com/<?php echo $facebook_handle; ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($instagram_handle)): ?>
                            <a href="https://instagram.com/<?php echo $instagram_handle; ?>" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        <?php endif; ?>   
                        <?php if(!empty($twitter_handle)): ?>
                            <a href="https://x.com/<?php echo $twitter_handle; ?>" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                        <?php endif; ?>                                       
                        <?php if(!empty($tiktok_handle)): ?>
                            <a href="https://tiktok.com/<?php echo $tiktok_handle; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        <?php endif; ?>                                      
                        <?php if(!empty($website)): ?>
                            <a href="<?php echo $website; ?>" target="_blank"><img src="<?php echo CORE_URL . '/assets/icons/icons8-website-50.png'; ?>"></a>
                        <?php endif; ?>                                    
                    </div>                    
                </div>
            <?php endwhile; ?>
        </section>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}