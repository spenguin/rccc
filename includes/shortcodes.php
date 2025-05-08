<?php

namespace Shortcodes;

require_once CORE_SHORTCODE . 'rcc_navigation.php';
require_once CORE_SHORTCODE . 'rcc_organisers.php';
require_once CORE_SHORTCODE . 'rcc_panels.php';
require_once CORE_SHORTCODE . 'rcc_posters.php';
require_once CORE_SHORTCODE . 'rcc_exhibitors.php';


\Shortcodes\initialize();

function initialize()
{
    add_shortcode( 'rcc_navigation', '\rcc_navigation' );
    add_shortcode( 'rcc_organisers', '\rcc_organisers' );
    add_shortcode( 'rcc_panels', '\rcc_panels' );
    add_shortcode( 'rcc_posters', '\rcc_posters' );
    add_shortcode( 'rcc_exhibitors', '\rcc_exhibitors' );
}