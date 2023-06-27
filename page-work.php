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
        <div class="p-work c-archives">
            <hgroup>
                <h2 class="p-photo__heading c-archives__heading">Works</h2>
                <p class="c-archives__sub">制作実績</p>
            </hgroup>
            <div class="p-work__inner">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $my_works_args = [
                    'post_type' => 'works',
                    'paged' => $paged,
                    'posts_per_page' => 9,
                ];
                $my_works_query = new WP_Query($my_works_args);
                if ($my_works_query->have_posts()) :
                    while ($my_works_query->have_posts()) :
                        $my_works_query->the_post();
                        get_template_part('template-parts/loop', 'work');
                    endwhile;
                endif;
                ?>
            </div>
            <?php
            wp_pagenavi(array('query' => $my_works_query));
            ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </main>
    <?php get_footer(); ?>
    <!-- aa ->