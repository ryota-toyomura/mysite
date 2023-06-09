<?php

function wp_setup() //neko_theme_setupは任意の関数
{
    add_theme_support('title-tag'); //特定の機能をテーマで使えるようにするための関数 この場合はタイトルを表示
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        ['search-form']
    );
    //get_search_formを最新バージョンにする

    add_image_size(
        'page_eyecatch',
        1100,
        600,
        true
    );
    //アイキャッチ画像のサイズを指定

    register_nav_menus([
        'main-menu' => 'メインメニュー',
        'footer-menu' => 'フッターメニュー'
    ]); //管理画面にメニューを追加 連想配列で管理画面に出す名前を決める
}

add_action( //add_actionはの特定のタイミングで関数を実行するためのもの
    'after_setup_theme', //after_setup_themeはテーマを読み込んだあとに実行 '第二引数は実行する関数名
    'wp_setup'
);

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



function enqueue_scripts() //js,cssの読み込み
{
    wp_enqueue_script('jquery');
    wp_enqueue_script( //jsを定義する関数引数にそれぞれを指定する
        'theme-js', //第一引数 ハンドル名の指定
        get_template_directory_uri() . '/assets/js/function.js', //パスを指定
        array(), //指定ファイルより前に読み込むファイルがあればそのハンドル名を指定する。今回は無いので初期値のarray()
        '20', //バージョン
        true //出力場所をwp_footer()にするならtrue 指定が無ければfalseとなる
    );
    wp_enqueue_style( //cssを定義する関数引数にそれぞれを指定する 引数は上記jsと同一
        'common-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '224'
    );
    wp_enqueue_style( //cssを定義する関数引数にそれぞれを指定する 引数は上記jsと同一
        'google-gont',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap',
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts'); //wp_enqueue_script()は指定したCSSやJavaScriptを読み込む

remove_filter('the_excerpt', 'wpautop');