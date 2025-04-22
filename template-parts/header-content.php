<?php
/**
 * Header content
 */
?>
    <?php if( is_home() || is_front_page() ): ?>
        <div class="header-bar max-wrapper__narrow">
            <?php // countdown ?>
            <div class="countdown">
                <div id="days" class="countdown__days">
                    <span class="count__days"></span><span class="units">days</span>
                </div>
                <div id="hours" class="countdown__hours">
                <span class="count">99</span><span class="units">hours</span>
                </div> 
                <div id="minutes" class="countdown__minutes">
                <span class="count">99</span><span class="units">minutes</span>
                </div>
                <div id="seconds" class="countdown__seconds">
                <span class="count">99</span><span class="units">seconds</span>
                </div>                                                           
            </div>
        </div>
    <?php endif; ?>
    <?php if( is_home() || is_front_page() ): ?>
        <div class="header__logo"><img src="<?php echo CORE_URL; ?>/assets/Rain-City-Comicon-logo-with-rain-animation-base.gif" /></div>
    <?php endif; ?>

