<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=0">
    <meta property="og:locale" content="ja_JP">
    <!-- Webpage Title -->
    <title>
        <?php if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else{
            wp_title('|',true,'right'); echo bloginfo('name'); 
        }?>      
    </title>
    <?php wp_head(); ?>

    <!-- OGP -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" />
    <link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/css/style.css">

</head>

<body>
    <div class="menu-overlay">
        <div class="overlay-links">
            <a href="<?php echo HOME; ?>">ホーム</a>
            <a href="<?php echo HOME . 'concept'; ?>">コンセプト</a>
            <a href="<?php echo HOME . 'room'; ?>">お部屋について</a>
            <a href="<?php echo HOME . 'meals'; ?>">食事・オプション</a>
            <a href="<?php echo HOME . 'blog'; ?>">お知らせ</a>
            <a href="<?php echo HOME . '#faq'; ?>">よくある質問</a>
            <a href="#">予約のご案内</a>
            <a href="<?php echo HOME . 'contact'; ?>">お問い合わせ</a>
        </div>
        <div class="overlay-social">
            <a href="#" target="_blank">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/cmm/ico_twitter.svg" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/cmm/ico_facebook.svg" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/cmm/ico_line.svg" alt="">
            </a>
        </div>
    </div>
    <div class="c-header" id="cHeader">
        <a href="<?php echo HOME; ?>" class="c-header__logo">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/cmm/logo.png" alt="">
        </a>
        <div class="c-header__link">
            <a href="<?php echo HOME; ?>">ホーム</a>
            <a href="<?php echo HOME . 'concept'; ?>">コンセプト</a>
            <a href="<?php echo HOME . 'room'; ?>">お部屋について</a>
            <a href="<?php echo HOME . 'meals'; ?>">食事・オプション</a>
            <a href="<?php echo HOME . 'blog'; ?>">お知らせ</a>
            <a href="<?php echo HOME . '#faq'; ?>">よくある質問</a>
            <a href="#">予約のご案内</a>
            <a href="<?php echo HOME . 'contact'; ?>">お問い合わせ</a>
        </div>
        <div class="sp-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>