<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="l-header l-container">
            <div class="l-header__inner">
                <h1 class="l-header__logo">
                    <a href="<?php echo esc_url(home_url()); ?>"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" width="300px"
                            width="270px" alt="">
                </h1>

                <nav class="l-header__nav">
                    <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'l-header__lists',
                        'add_li_class' => 'l-header__item',
                        'add_a_class' => 'l-header__link',
                        'container' => false,
                    )
                );
                ?>
                </nav>
                <div class="l-toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="mask"></div>
        </header>