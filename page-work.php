<?php get_header(); ?>
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