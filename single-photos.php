<?php get_header(); ?>
<main class="l-common-container">
    <hgroup class="c-single-heading">
        <h2 class="p-photo__heading c-archives__heading">Photo</h2>
        <p class="c-archives__sub">ご飯や風景や友達などを撮ります。</p>
    </hgroup>
    <article class="p-photo c-single-contents">
        <?php
        if (have_posts()) : ?>
        <?php while (have_posts()) :
                the_post();
            ?>
        <div class="c-single-title">
            <h2>
                <?php the_title(); ?>
            </h2>
            <time class="c-single-title__time">
                <?php echo get_the_date(); ?>
            </time>
        </div>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </article>
</main>
<?php get_footer(); ?>