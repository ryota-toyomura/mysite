<?php get_header(); ?>
<main class="l-common-container">
    <div class="p-photo c-archives">
        <hgroup>
            <h2 class="p-photo__heading c-archives__heading">Photo</h2>
            <p class="c-archives__sub">ご飯や風景や友達などを撮ります。</p>
        </hgroup>
        <div class="c-archives__inner">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $my_photo_args = [
                'post_type' => 'photos',
                'paged' => $paged,
                'posts_per_page' => 9,
            ];
            $my_photo_query = new WP_Query($my_photo_args);
            if ($my_photo_query->have_posts()) :
                while ($my_photo_query->have_posts()) :
                    $my_photo_query->the_post();
                    get_template_part('template-parts/loop', 'photo');
                endwhile;
            endif;
            ?>
        </div>
        <?php
        wp_pagenavi(array('query' => $my_photo_query));
        ?>
        <?php wp_reset_postdata(); ?>
    </div>
</main>
<?php get_footer(); ?>
<!-- aa ->