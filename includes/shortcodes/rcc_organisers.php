<?php
/**
 * Organisers part of the Organisers page section
 */

function rcc_organisers( $atts = [], $content = null, $tag = '' )
{
    ob_start();
    ?>
        <div class="organisers max-wrapper__narrow">
            <div class="organiser">
                <div class="organiser--logo">
                    <img src="<?php echo CORE_URL; ?>/assets/Weirdspace-logo-revised.png" alt="Weirdspace" />
                </div>
                <div class="organiser--text">
                    <h3>Weirdspace</h3>
                    <p>A comics event organizer</p>
                </div>
            </div>
            <div class="organiser organiser--even">
                <div class="organiser--logo">
                    <img src="<?php echo CORE_URL; ?>/assets/comics-studies-cluster-promo-blue282-300rgb.png" alt="UBC Comics Studies Cluster" />
                </div>
                <div class="organiser--text">
                    <h3><a href="https://pop-culture.arts.ubc.ca/comics-studies/" target="_blank">UBC Comics Studies Cluster</a></h3>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="organiser">
                <div class="organiser--logo">
                    <img src="<?php echo CORE_URL; ?>/assets/Soaring-Penguin-Logo-Colour-with-circle-square-200px.png" alt="Soaring Penguin Press" />
                </div>
                <div class="organiser--text">
                    <h3><a href="https://www.soaringpenguinpress.com" target="_blank">Soaring Penguin Press</a></h3>
                    <p>An independent comics publisher</p>
                </div>
            </div>                        

        </div>
    <?php
    return ob_get_clean();
}