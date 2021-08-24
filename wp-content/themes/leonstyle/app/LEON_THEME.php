<?php

namespace Leonstyle;

use Leonstyle\components\Assets;
use Leonstyle\components\Menus;
use Leonstyle\traits\Singleton;

/**
 * LEON_THEME
 */
class LEON_THEME
{
    use Singleton;

    /**
     * construct
     */
    protected function __construct()
    {
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }

    /**
     * setup_hooks
     *
     * @return void
     */
    protected function setup_hooks()
    {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        ) );
        add_theme_support( 'custom-background', array() );

        // 19/08/2021

        /*1.tao ra hình ảnh thumbnail cho mỗi loại post có type khác nhau
        2.tùy chỉnh kích thước hiển thị ở frontend
        3.thêm 1 kích thước hiển thị ở frontend
        */
        add_theme_support( 'post-thumbnails', array( 'room' ) );
        set_post_thumbnail_size( 150, 150 );
        add_image_size( 'room-thumb', 500, 9999 ); 
        
        /*chưa hiểu
        */
        add_theme_support( 'customize-selective-refresh-widgets' );

        /*Tính năng này thêm liên kết nguồn cấp dữ liệu RSS vào HTML <head>
        <link rel="alternate" type="application/rss+xml" title="LeonStyle » Feed" href="http://localhost/feed">
        <link rel="alternate" type="application/rss+xml" title="LeonStyle » Comments Feed" href="http://localhost/comments/feed">
        */
        add_theme_support( 'automatic-feed-links' );

        /*chưa hiểu
        */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

        /*chưa hiểu
        */
        add_editor_style( 'style-editor.css' );
        
        /*
        Một số block trong Gutenberg như bảng, dấu ngoặc kép, dấu phân cách được hưởng lợi từ các kiểu cấu trúc (lề, đệm, đường viền, v.v.)
        Chúng chỉ được áp dụng trực quan trong trình chỉnh sửa (back-end) chứ không phải trên front-end để tránh nguy cơ xung đột với các phong cách mong muốn trong chủ đề.
        Nếu bạn muốn hiển thị chúng ở phía trước để có cơ sở làm việc, trong trường hợp này, bạn có thể thêm hỗ trợ cho wp-block-styles.
        */
        add_theme_support('wp-block-styles');

        /*Một số khối chẳng hạn như khối hình ảnh có khả năng xác định căn chỉnh “rộng” hoặc “đầy đủ” 
        bằng cách thêm tên lớp tương ứng vào trình bao bọc của khối (căn chỉnh toàn bộ hoặc căn chỉnh). trong quản trị, floAT block de dang
        */
        add_theme_support('align-wide');

        /*chưa hiểu
        */
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 800;
        }
    }
}