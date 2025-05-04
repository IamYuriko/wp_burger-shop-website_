<?php
// CSS読み込み
function my_stylesheets()
{
    //Google Fonts
    wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
    wp_enqueue_style('mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap', array());
    //リセットCSS
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
    //メインのスタイルシート
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array('ress'), false, 'all');
    //JavaScript
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        array(),
        '3.7.1',
        true,
    );
    wp_enqueue_script('myscript', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_stylesheets');

function my_setup()
{
    register_nav_menus(array( /*メニュー*/
        'footermenu' => 'フッターメニュー',
        'categorymenu' => 'サイドメニュー'
    ));
    add_theme_support('post-thumbnails'); /* アイキャッチ画像 */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support('custom-background'); /*背景を管理画面から変更*/
    add_theme_support('custom-header'); /*ヘッダー画像を管理画面から変更*/
    add_theme_support('appearance-tools'); /*外観ツール*/
    add_theme_support('responsive-embeds'); /*レスポンシブ埋め込み*/
    add_theme_support('align-wide'); /*ブロックエディタで幅広・全幅の対応*/
    add_theme_support('custom-logo'); /*カスタムロゴ*/
    add_theme_support('html5', array( /* HTML5のタグで出力 */
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');


//カスタムフィールドでフロントページ内マップ部分（アクセス）を管理
function get_access_section_data($post_id)
{
    return [
        'title' => get_post_meta($post_id, 'access_title', true),
        'description' => get_post_meta($post_id, 'access_description', true),
        'map' => get_post_meta($post_id, 'access_map', true),
    ];
}


//カードのカスタムフィールド
function add_card_section_data()
{
    add_meta_box(
        'card_section_data', //セクションのID
        '商品情報', //セクションのタイトル
        'insert_card_section_data', //入力エリアの HTML
        'post',  //投稿タイプの場合は「post」、カスタム投稿タイプの場合は「スラッグ名」、固定ページの場合は「page」
        'normal', //カスタムフィールドが表示される場所
        'high' //優先度
    );
}
add_action('admin_menu', 'add_card_section_data');

//カスタムフィールドの入力エリア
function insert_card_section_data()
{
    global $post;
    echo 'タイトル： <input type="text" name="card_title" value="' . get_post_meta($post->ID, 'card_title', true) . '" size="50" style="margin-bottom: 10px;" />　<br>';
    echo 'テキスト： <input type="text" name="card_desc" value="' . get_post_meta($post->ID, 'card_desc', true) . '" size="50" style="margin-bottom: 10px;" />　<br>';
}


//カスタムフィールドの値を保存
function save_card_section_data($post_id)
{

    if (!empty($_POST['card_title'])) {
        update_post_meta($post_id, 'card_title', $_POST['card_title']);
    } else {
        delete_post_meta($post_id, 'card_title');
    }

    if (!empty($_POST['card_desc'])) {
        update_post_meta($post_id, 'card_desc', $_POST['card_desc']);
    } else {
        delete_post_meta($post_id, 'card_desc');
    }
}
add_action('save_post', 'save_card_section_data');


// wp_nav_menuの<li>にクラスを追加する関数
function add_class_on_li($classes, $item, $args)
{
    // フッターメニュー用のクラスを追加
    if (isset($args->footer_li_class)) {
        $classes[] = $args->footer_li_class; // クラスを配列に追加
    }

    // サイドメニュー用のクラスを追加
    if (isset($args->sideMenu_li_class) && !$item->menu_item_parent) {
        $classes[] = $args->sideMenu_li_class;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 10, 3);


// サブメニューの<ul>にクラスを追加する関数
function add_class_on_submenu($classes, $args)
{
    if (isset($args->submenu_ul_class)) {
        $classes[] = $args->submenu_ul_class;
    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_class_on_submenu', 10, 2);


//検索キーワードを含む投稿ページのみを表示させる
function custom_search_query($query)
{
    if ($query->is_search && !is_admin()) {
        // 投稿を検索対象にする
        $query->set('post_type', array('post'));
        $query->set('s', esc_sql($query->get('s')));
    }
    return $query;
}
add_filter('pre_get_posts', 'custom_search_query');


//投稿者アーカイブページを無効化
add_filter('author_rewrite_rules', '__return_empty_array');
function disable_author_archive()
{
    if (isset($_GET['author']) || preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
        wp_redirect(home_url('/404.php'));
        exit;
    }
}
add_action('init', 'disable_author_archive');
