<?php

namespace Shortcodes;

require_once CORE_SHORTCODE . 'rcc_navigation.php';


\Shortcodes\initialize();

function initialize()
{
    add_shortcode( 'rcc_navigation', '\rcc_navigation' );
}