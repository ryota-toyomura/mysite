<?php get_header(); ?>
<main>
    <div id="p-mainVisual" class="p-mainVisual">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/top.png" alt="">
    </div>
    <section id="p-topAbout" class="p-topAbout p-topSection l-common-container">
        <div class="p-topAbout__txts">
            <h2 class="p-topSection__heading">About</h2>
            <p class="p-topSection__txt">
                お酒と音楽と銭湯が好きな東京在住の28歳。<br>
                広告代理店でWebエンジニアをしています。<br>
            </p>
            <a href="/wp/about/" class="p-topAbout__link tab-none"><span>Read more</span></a>
        </div>
        <div class="p-topAbout__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="385px" height="385px">
        </div>
        <a href="/wp/about/" class="p-topAbout__link tab-appea"><span>Read more</span></a>
    </section>
    <section id="p-topPhoto" class="p-topPhoto p-topSection l-common-container">
        <h2 class="p-topSection__heading">Photos</h2>
        <div class="p-topPhoto__imgs">
            <?php
            $my_photo_args = [
                'post_type' => 'photos',
                'posts_per_page' => 3,
            ];
            $my_photo_query = new WP_Query($my_photo_args);
            if ($my_photo_query->have_posts()) :
                while ($my_photo_query->have_posts()) :
                    $my_photo_query->the_post();
                    get_template_part('template-parts/loop', 'photo');
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="p-topPhoto__txts">
            <p class="p-topPhoto__txt">
                一眼レフカメラを使って写真を撮ります。<br>
                特にこだわりはありませんが、風景の写真が好きです。
            </p>
            <a href="/wp/photo/" class="p-topPhoto__link"><span>All view</span></a>
        </div>
    </section>
    <section id="p-topBlog" class="p-topBlog p-topSection l-common-container">
        <h2 class="p-topSection__heading">Blog</h2>
        <div class="p-topBlogs">
        <?php
            $my_blog_args = [
                'post_type' => 'blogs',
                'posts_per_page' => 3,
            ];
            $my_blog_query = new WP_Query($my_blog_args);
            if ($my_blog_query->have_posts()) :
                while ($my_blog_query->have_posts()) :
                    $my_blog_query->the_post();
                    get_template_part('template-parts/loop', 'blog');
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <a href="/wp/blog/" class="p-topBlog__link"><span>All view</span></a>
    </section>
</main>
<?php get_footer(); ?>