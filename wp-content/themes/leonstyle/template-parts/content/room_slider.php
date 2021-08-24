<div class="container">
    <div class="row">
        <div class="col-md-2 position-relative">
            <p class="category">内部</p>
            <div class="rotate-text position-absolute">Interior</div>
        </div>
        <div class="col-md-10">
            <div class="slider">
                <div class="slider-for mb-4">
                    <?php
                        $rooms = new WP_Query( array(
                            'post_type' => 'room'
                        ) );
                        
                        if ( $rooms->have_posts() ) {
                            while ( $rooms->have_posts() ) {
                                $rooms->the_post();
                                $room_images = get_children( array(
                                    'post_parent' => get_the_ID(),
                                    'posts_per_page' => 1,
                                ) );
                                if ( $room_images ) {
                                    foreach ( $room_images as $room_image ) {
                                        echo '<img src="' . esc_url($room_image->guid) . '" class="item"  alt="' . get_the_title() . '"/>';
                                    }
                                }
                            }
                        } else {
                        }
                        wp_reset_postdata();
                    ?>	
                </div>
                <div class="slider-nav">
                    <?php
                        $rooms = new WP_Query( array(
                            'post_type' => 'room'
                        ) );
                        
                        if ( $rooms->have_posts() ) {
                            while ( $rooms->have_posts() ) {
                                $rooms->the_post();
                                $room_images = get_children( array(
                                    'post_type' => 'attachment',
                                    'post_parent' => get_the_ID(),
                                    'posts_per_page' => 1,
                                ) );
                                if ( $room_images ) {
                                    foreach ( $room_images as $room_image ) {
                                        echo '<img src="' . esc_url($room_image->guid) . '" class="item"  alt="' . get_the_title() . '"/>';
                                    }
                                }
                            }
                        } else {
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>