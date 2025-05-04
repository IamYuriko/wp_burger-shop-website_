<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title><?php bloginfo('name');
            wp_title('|'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <meta property="og:type" content="website"> <!--ページの種類-->
    <meta property="og:url" content="https://hamburger.heyimyuriko.com"> <!--ページのURL-->
    <meta property="og:site_name" content="Hamburger"> <!--ページが所属するサイト名-->
    <meta property="og:title" content="Hamburger"> <!--ページのタイトル-->
    <meta property="og:description" content="スクールの最終課題です"> <!--ページの概要-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-wrapper">
        <div class="l-wrapper__inner">
            <div class="p-overlay-hamburgerMenu"></div>
            <header class="l-header">
                <div class="l-header__inner">
                    <div class="l-header__contents c-flex c-flex--center-between">
                        <!-- ハンバーガメニュー用ボタン -->
                        <button class="l-header__openBtn c-title c-title--s u-hide--pc">Menu</button>
                        <h1 class="l-header__logo c-title c-title--l">
                            <a class="l-header__link" href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name'); ?></a>
                        </h1>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>