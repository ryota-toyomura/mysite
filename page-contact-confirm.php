<?php get_header(); ?>
<main class="l-common-container">
    <div class="p-contact c-archives">
        <hgroup>
            <h2 class="p-contact__heading c-archives__heading">Contact</h2>
            <p class="c-archives__sub">お問い合わせ</p>
        </hgroup>
        <div class="p-contact__inner">
            <p class="p-contact__txt">ご入力内容に間違いがなければ、<br class="sp-appea">送信するボタンを押してください</p>
            <?php echo do_shortcode('[mwform_formkey key="57"]'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
<!-- aa ->