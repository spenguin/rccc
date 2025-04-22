<?php
/**
 * Navigation section, mostly for Home Page
 */

function rcc_navigation( $atts = [], $content = null, $tag = '' )
{
    $o      = <<<EOD
        <section class="navigation">
            <h3>Navigation</h3>
            <div class="navigation--list">
                <a href="">About Rain City Comicon</a>
                <a href="">The Organisers</a>
                <a href="">Panels</a>
                <a href="">Statement of Purpose</a>
                <a href="">Code of Conduct</a>
                <a href="">Exhibitors</a>
            </div>
         </section>
    EOD;
 
    return $o;
} 