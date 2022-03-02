<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 先に定義すべき定数
 */

// サイト情報
define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

define( 'THEME_NOTE', 'clothes' );

error_reporting(0);

// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post'))) {
        $editor = true;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

// エディター独自スタイル追加
//TinyMCE追加用のスタイルを初期化
if(!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array) {
        //追加するスタイルの配列を作成
        $style_formats = array(
            array(
                'title' => '注釈',
                'inline' => 'span',
                'classes' => 'cmn_note'
            )
        );
        //JSONに変換
        $init_array['style_formats'] = json_encode($style_formats);
        return $init_array;
    }
}
add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

// オプションページを追加
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'テーマオプション', // 設定ページで表示される名前
        'menu_title' => 'テーマオプション', // ナビに表示される名前
        'menu_slug' => 'top_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// CSS・スクリプトの読み込み
function theme_add_files() {
    global $post;
}
add_action('wp_enqueue_scripts', 'theme_add_files');

function theme_custom_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( "s_thumbnail", 314, 236, true );
    add_image_size( "m_thumbnail", 318, 228, true );
    add_image_size( "x_thumbnail", 320, 244, true );
    set_post_thumbnail_size( 318, 228, true );
	add_editor_style('<?php echo T_DIRE_URI; ?>/assets/css/style.css');
}
add_action( 'after_setup_theme', 'theme_custom_setup' );

function replaceImagePath( $arg ) {
    $content = str_replace('"images/', '"' . T_DIRE_URI . '/assets/img/', $arg);
    $content = str_replace('"/images/', '"' . T_DIRE_URI . '/assets/img/', $content);
    $content = str_replace(', images/', ', ' . T_DIRE_URI . '/assets/img/', $content);
    $content = str_replace("('images/", "('". T_DIRE_URI . '/assets/img/', $content);
    return $content;
}

add_action('the_content', 'replaceImagePath');

add_filter('query_vars', function($vars) {
	$vars[] = 'blog_category';
	return $vars;
});

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}

function add_mwform_validation_rule( $Validation, $data ) {
    $validation_message = '※必須項目です';
    $Validation->set_rule( 'お名前', 'noempty', array( 'message' => $validation_message ) );
    $Validation->set_rule( 'メールアドレス', 'noempty', array( 'message' => $validation_message ) );
    $Validation->set_rule( 'お問い合わせ内容', 'noempty', array( 'message' => $validation_message ) );
    return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-188', 'add_mwform_validation_rule', 10, 2 );