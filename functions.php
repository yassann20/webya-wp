<?php
if( session_status() == PHP_SESSION_NONE ) {
     session_start();
}
function setup() {
  //ここに関数の中身を記述します。
  add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
  add_theme_support( 'menus');  //メニュー機能をON
}
add_action( 'after_setup_theme', 'setup' );
//投稿アーカイブページの作成
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
        $args['has_archive'] = 'blogs'; //スラッグ名
    }
        return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>
