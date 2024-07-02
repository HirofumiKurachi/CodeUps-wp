<?php
function my_theme_enqueue_styles_and_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Preconnect for Google Fonts
    add_filter('style_loader_tag', function($html, $handle) {
        if ('google-fonts' === $handle) {
            $html = '<link rel="preconnect" href="https://fonts.googleapis.com" />' . "\n" .
                    '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />' . "\n" . $html;
        }
        return $html;
    }, 10, 2);

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        null
    );

    // Theme's main stylesheet
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        filemtime(get_theme_file_path('/assets/css/style.css'))
    );

    // jQuery
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.js',
        array(),
        null,
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    // jQuery InView plugin
    wp_enqueue_script(
        'jquery-inview',
        get_theme_file_uri('/assets/js/jquery.inview.min.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
        true
    );

    // Theme's main script
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/assets/js/script.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts');
    //アイキャッチ等の設定
    function my_setup()
    {
        add_theme_support('post-thumbnails'); // アイキャッチ /
        add_theme_support('automatic-feed-links'); // RSSフィード /
        add_theme_support('title-tag'); // タイトルタグ自動生成 /
        add_theme_support(
            'html5',
            array( //HTML5のタグで出力 */
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
    add_action('after_setup_theme', 'my_setup');
?>