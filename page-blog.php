<?php get_header(); ?>
<main class="l-common-container">
    <div class="p-blog c-archives">
        <hgroup>
            <h2 class="p-blog__heading c-archives__heading">Blog</h2>
            <p class="c-archives__sub">日々のことや旅の日記。</p>
        </hgroup>
        <div class="c-archives__inner">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $my_blog_args = [
                'post_type' => 'blogs',
                'paged' => $paged,
                'posts_per_page' => 9,
            ];
            $my_blog_query = new WP_Query($my_blog_args);
            if ($my_blog_query->have_posts()) :
                while ($my_blog_query->have_posts()) :
                    $my_blog_query->the_post();
                    get_template_part('template-parts/loop', 'blog');
                endwhile;
            endif;
            ?>
        </div>
        <?php
        wp_pagenavi(array('query' => $my_blog_query));
        ?>
        <?php wp_reset_postdata(); ?>
    </div>
</main>
<?php get_footer(); ?>
<!-- aa ->