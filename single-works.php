<?php get_header(); ?>
<main class="l-common-container">
    <hgroup class="c-single-heading">
        <h2 class="p-blog__heading c-archives__heading">Blog</h2>
        <p class="c-archives__sub">日々のことや旅の日記。</p>
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