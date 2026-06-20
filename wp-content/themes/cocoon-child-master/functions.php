<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
//
/************************************
** ヘッダーメニュー追加ウィジット追加
************************************/
//ヘッダーロゴの下に出力をする//
add_filter('wp_header_logo_after_open', 'add_header_contents');
 function add_header_contents() {
     dynamic_sidebar('add-header-contents');
 }
// アナウンス枠エリアウィジェット//
if (function_exists('register_sidebar')) {
    register_sidebar(array(
            'name' => 'ヘッダー領域追加コンテンツ',
            'id' => 'add-header-contents',
            'description' => 'ヘッダー領域に追加コンテンツを表示するウィジェットです。',
            'before_widget' => '<div class="add-header-contents">',
            'after_widget' => '</div>',
    ));
}
