<?php

define('THEMROOT', get_template_directory_uri());

add_action( 'init', function() {
    register_post_type('books', [
        'labels' => [
            'name'               => 'Книги',
            'singular_name'      => 'Книга',
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую книгу',
            'edit_item'          => 'Редактировать книгу',
            'new_item'           => 'Новая книга',
            'view_item'          => 'Посмотреть книгу',
            'search_items'       => 'Найти книгу',
            'not_found'          => 'Книг не найдено',
            'not_found_in_trash' => 'В корзине книг не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Книги'

        ],
        'public' => true,
        'has_archive' => true
    ]);
    register_taxonomy( 'books-authors', [ 'books' ], [
        'labels' => [
            'name' => 'Автор',
        ],
        'public' => true
    ]);
});


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main_css', THEMROOT . '/css/style.css');
    wp_enqueue_script('main_js', THEMROOT . '/js/main.js');
});


add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    register_nav_menu('header', 'header menu');
    register_nav_menu('footer', 'footer menu');
});

add_action('widgets_init', function () {
    register_sidebar([
        'name'          => 'Боковая колонка для постов',
        'id'            => "sidebar-post-single",
        'description'   => 'Выводится только на странице 1 поста',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n"
    ]);
});

add_filter( 'nav_menu_css_class', function ($classes, $item, $args, $depth){
    $newClasses = ['nav-item'];
    return $newClasses;
}, 10, 4 );

add_filter( 'nav_menu_item_id', function ($id, $item, $args, $depth){
    return '';
}, 10, 4 );

add_filter( 'nav_menu_link_attributes', function ($attrs, $item, $args, $depth){
    $attrs['class'] = 'nav-link';
    if ($attrs['aria-current'] === 'page') {
        $attrs['class'] .= ' active';
    }

    return $attrs;
}, 10, 4 );


