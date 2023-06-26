<?php get_header(); ?>
<main class="l-common-container">
    <hgroup class="c-single-heading">
        <h2 class="p-photo__heading c-archives__heading">Photo</h2>
        <p class="c-archives__sub">ご飯や風景や友達などを撮ります。</p>
    </hgroup>
    <div class="p-photo c-archives-contents">
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