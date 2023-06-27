<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,follow" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header l-container">
        <div class="l-header__inner">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url()); ?>">Test
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
        </div>

    </header>
    <main class="l-common-container">
        <hgroup class="c-single-heading">
            <h2 class="p-blog__heading c-archives__heading">Works</h2>
            <p class="c-archives__sub">制作実績</p>
        </hgroup>
        <div class="p-blog c-archives-contents">
            <?php
            if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post();
                ?>

                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>