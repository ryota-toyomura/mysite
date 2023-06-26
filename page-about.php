<?php get_header(); ?>
<main class="l-common-container">
    <section class="p-about p-about-common">
        <div class="p-about__blocks">
            <div class="p-about__txts">
                <h2 class="p-about-common__heading">About</h2>
                <h3 class="p-about__name">Ryota toyomura</h3>
                <ul class="p-about__lists">
                    <li class="p-about__item">職業：フロントエンドエンジニア</li>
                    <li class="p-about__item">生年月日：1994/10/30 (28歳)</li>
                    <li class="p-about__item">趣味：ピアノ/フットサル/銭湯巡り</li>
                    <li class="p-about__item">血液型：O型</li>
                    <li class="p-about__item">出身地：福島県</li>
                    <li class="p-about__item">身長：169cm</li>
                </ul>
            </div>
            <div class="p-about__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-about.png" alt="" width="385px"
                    height="385px" alt="">
            </div>
        </div>
    </section>
    <section class="p-about-intro p-about-common">
        <h2 class="p-about-common__heading">Intoroduce</h2>
        <p class="p-about-intro__txtL">
            音楽とお酒と銭湯が好きな28歳<br>
            広告代理店でWebエンジニアをしています。
        </p>
        <p class="p-about-intro__txtS">
            福島県南相馬市出身、大学進学を機に上京。<br>
            幼い頃からピアノを習っており、音楽が好きで、大学時代は軽音部の部長を務めました。<br>
            今でも音楽は続けており、時折Youtubeに作品をアップしたりしています。
        </p>
        <p class="p-about-intro__txtS">
            お酒が好きで、特にレモンサワーを好みます。<br>
            赤提灯系の居酒屋とか最高ですね。休日はよく飲み歩いています。
        </p>
        <p class="p-about-intro__txtS">
            WEBエンジニアとしては現在三年目で、日々勉強中です。<br>
            現在はフロントエンドを主に学んでおりますが、今後はバックエンドやデザインも学び、<br>
            フルスタックに活躍できるエンジニアを目指します。
        </p>
    </section>
    <section class="p-about-history p-about-common">
        <h2 class="p-about-common__heading">History</h2>
        <ul class="p-about-history__lists">
            <li class="p-about-history__item">1994 福島県南相馬市で生まれる。</li>
            <li class="p-about-history__item">1997 両親の影響でピアノを始める。</li>
            <li class="p-about-history__item">2000 小学校では合唱部に所属し、ピアノ伴奏者を務める。</li>
            <li class="p-about-history__item">2007 中学、高校ではサッカー部に所属。</li>
            <li class="p-about-history__item">2013 大学入学　軽音部に所属しバンド活動に明け暮れる。</li>
            <li class="p-about-history__item">2017 保険代理店に就職　電話営業の日々。</li>
            <li class="p-about-history__item">2020 WEB制作に興味を持ち、独学で勉強を始める。</li>
            <li class="p-about-history__item">2021 広告代理店に転職し、実務としてWEB制作を始める。</li>
            <li class="p-about-history__item">2023 WEBエンジニアとして成長中。</li>
        </ul>
    </section>
    <section class="p-about-skills p-about-common">
        <h2 class="p-about-common__heading">Skills</h2>
        <div class="p-about-skills__lists">
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">HTML5</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/html.svg" alt="" width="150px"
                    height="150px">
                <p>保守運用、設計を意識したタグ付けをします。</p>
            </div>
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">CSS</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/css.svg" alt="" width="150px"
                    height="150px">
                <p>ScssやFLOCSSを使います。</p>
            </div>
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">Javascript</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/js.svg" alt="" width="150px"
                    height="150px">
                <p>基本的な動きは付けることができます。</p>
            </div>
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">Wordpress</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/wp.svg" alt="" width="150px"
                    height="150px">
                <p>自作テーマを作成することができます。</p>
            </div>
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">PHP</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/php.svg" alt="" width="150px"
                    height="150px">
                <p>0ベースで書くことはできませんが、<br>解読・流用はできます。</p>
            </div>
            <div class="p-about-skills__item">
                <h2 class="p-about-skills__heading">Git/GitHub</h2>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/git.svg" alt="" width="150px">
                <p>sourcetreeを使ってバージョン管理ができます。</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>