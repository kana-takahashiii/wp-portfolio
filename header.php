<!DOCTYPE html>
<html lang="ja">
<!-- head-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- リセットcss -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <!-- OG画像 -->
        <meta property="og:title" content="KANA TAKAHASHI Portfolio">
        <meta property="og:description" content="髙橋果奈のポートフォリオサイトです。">
        <meta property=”og:type” content=”website” />
        <meta property="og:url" content="https://www.kana-takahashi.com/">
        <meta property="og:image" content="https://www.kana-takahashi.com/img/OGP-img.png">
        <meta property="og:site_name" content="KANA TAKAHASHI">

        <!-- js,swipeerをWP用に読み込み-->
        <?php
        wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
        wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
        wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <!-- header -->
        <header>
            <nav class="header-nav-pc">
            <ul>
                <li><a href="/#works">WORKS</a></li>
                <li><a href="/#about">ABOUT</a></li>
                <li><a href="/#contact">CONTACT</a></li>
            </ul>
            </nav>
            <div id="navArea">
            <nav class="header-nav">
                <ul>
                <li><a href="/#works">WORKS</a></li>
                <li><a href="/#about">ABOUT</a></li>
                <li><a href="/#contact">CONTACT</a></li>
                </ul>
            </nav>
            <div class="toggle_btn"><span></span><span> </span><span></span></div>
            <div id="mask"></div>
            </div>
            <div class="cursor"></div>
            <div class="follower"></div>
        </header>