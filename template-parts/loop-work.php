<article id="post-<?php the_ID(); ?>" class="p-work__contents">
    <div class="c-archives__lists">
        <a href="<?php the_permalink(); ?>" class="c-archives__link">
            <figure class="c-archives__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('page_eyechatch'); ?>
                <?php else : ?>
                <?php endif; ?>
            </figure>
            <p class="p-work__excerpt">
                <?php the_excerpt(); ?>
            </p>
        </a>
    </div>
</article>