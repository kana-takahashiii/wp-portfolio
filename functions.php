<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * アイキャッチ画像をcssで調整できるようにする
 */
add_filter( 'post_thumbnail_html', 'custom_attribute2' );
function custom_attribute2( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}