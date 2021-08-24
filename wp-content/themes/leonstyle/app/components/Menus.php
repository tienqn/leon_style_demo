<?php

namespace Leonstyle\components;

use Leonstyle\traits\Singleton;

/**
 * Menus
 */
class Menus
{
    use Singleton;

    /**
     * construct
     */
    protected function __construct()
    {
        add_action( 'init', [$this, 'register_menus'] );
    }

    /**
     * register_menus
     *
     * @return void
     */
    public function register_menus() 
    {
        register_nav_menus(
            array(
                'leon-header-menu' => esc_html__( 'Header Menu', 'leonstyle' ),
                'leon-footer-menu' => esc_html__( 'Footer Menu', 'leonstyle' )
            )
        );
    }
}