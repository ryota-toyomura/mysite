<article id="post-<?php the_ID(); ?>" class="c-archives__contents">
    <div class="c-archives__lists">
        <a href="<?php the_permalink(); ?>" class="c-archives__link">
            <figure class="c-archives__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('page_eyechatch'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dummy-image.png" alt=""
                    width="200" height="150" load="lazy">
                <?php endif; ?>
            </figure>
            <p class="c-archives__excerpt">
                <?php the_excerpt(); ?>
            </p>
        </a>
    </div>
</article>