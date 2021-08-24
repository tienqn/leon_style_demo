<?php
/**
 * Displays the nav header
 *
 * @package leonstyle
 */
// get_template_part( 'template-parts/header/bootstrap' );
// get_template_part( 'template-parts/header/default' );
?>

<nav class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="vertically-center h-100">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        if ( has_custom_logo() ) {
                            echo '<a href="' . home_url('/') . '"><img class="w-75 logo-branch" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vertically-center h-100">
                    <p class="slogan">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vertically-center h-100 flex-end">
                    <div class="text-end">
                        <?php echo do_shortcode ("[addtoany]"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

