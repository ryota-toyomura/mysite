<?php get_header(); ?>
<main>
    <div id="p-mainVisual" class="p-mainVisual">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-main.png" alt="">
    </div>
    <section id="p-topAbout" class="p-topAbout p-topSection l-common-container">
        <div class="p-topAbout__txts">
            <h2 class="p-topSection__heading">About</h2>
            <p class="p-topSection__txt">
                お酒と音楽と銭湯が好きな東京在住の28歳。<br>
                広告代理店でWebエンジニアをしています。<br>
            </p>
            <a href="" class="p-topAbout__link"><span>Read more</span></a>
        </div>
        <div class="p-topAbout__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="385px"
                height="385px">
        </div>
    </section>
    <section id="p-topPhoto" class="p-topPhoto p-topSection l-common-container">
        <h2 class="p-topSection__heading">Photos</h2>
        <div class="p-topPhoto__imgs">
            <a href="">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="300px"
                    height="300px">
            </a>
            <a href="">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="300px"
                    height="300px">
            </a>
            <a href="">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="300px"
                    height="300px">
            </a>
        </div>
        <div class="p-topPhoto__txts">
            <p class="p-topPhoto__txt">
                一眼レフカメラを使って写真を撮ります。<br>
                特にこだわりはありませんが、風景の写真が好きです。
            </p>
            <a href="" class="p-topPhoto__link"><span>All view</span></a>
        </div>
    </section>
    <section id="p-topBlog" class="p-topBlog p-topSection l-common-container">
        <h2 class="p-topSection__heading">Blog</h2>
        <div class="p-topBlogs">
            <figure>
                <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt=""
                        width="300px" height="300px">
                </a>
                <figcaption>サンプルサンプルサンプルサンプルサンプル</figcaption>
            </figure>
            <figure>
                <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt=""
                        width="300px" height="300px">
                </a>
                <figcaption>サンプルサンプルサンプルサンプルサンプル</figcaption>
            </figure>
            <figure>
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt=""
                        width="300px" height="300px">
                </a>
                <figcaption>サンプルサンプルサンプルサンプルサンプル</figcaption>
            </figure>
        </div>
        <a href="" class="p-topBlog__link"><span>All view</span></a>
    </section>
</main>
<?php get_footer(); ?>