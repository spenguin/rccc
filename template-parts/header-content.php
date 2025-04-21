<?php
/**
 * Header content
 */
?>
    <?php if( is_home() || is_front_page() ): ?>
        <div class="header-bar">
            <?php // countdown ?>
            <div class="countdown">
                <div class="countdown__days">
                    23<span>days</span>
                </div>
                <div class="countdown__hours">
                    17<span>hours</span>
                </div> 
                <div class="countdown__minutes">
                    45<span>minutes</span>
                </div>
                <div class="countdown__seconds">
                    30<span>seconds</span>
                </div>                                                           
            </div>
        </div>
    <?php endif; ?>
    <?php if( is_home() || is_front_page() ): ?>
        <div class="header__logo"><img src="<?php echo CORE_URL; ?>/assets/Rain-City-Comicon-logo-with-rain-animation-base.gif" /></div>
    <?php endif; ?>

