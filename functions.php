<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init() {
  wp_enqueue_style( 'women-support-style', get_template_directory_uri() . '/style.css', array());
  wp_enqueue_style( 'women-support-fa5', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1');
  wp_enqueue_style( 'women-support-bt4', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0' );

  wp_enqueue_script( 'women-support-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'women-support-bt4', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array( 'jquery' ), true);
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

?>
