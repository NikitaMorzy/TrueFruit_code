<?php

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
  $version = '14.0.9.31';
  wp_dequeue_style( 'wp-block-library' );
  wp_deregister_script( 'wp-embed' );

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Montserrat:wght@400;500;600;700;900&display=swap', [], $version);
  wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
  wp_enqueue_script('tin', 'https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js', [], $version, true);
  wp_enqueue_script('map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;coordorder=longlat&amp;apikey=05def24b-f128-4c6d-b9e6-aab34311a834', [], $version, true);
  wp_enqueue_script('map2', 'https://yandex.st/jquery/2.2.3/jquery.js', [], $version, true);
  wp_enqueue_script('focus-visible', 'https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js', [], $version, true);
  wp_enqueue_script('lazy-load', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js', [], $version, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['focus-visible', 'lazy-load'], $version, true);
  wp_enqueue_script('slider.js', get_template_directory_uri() . '/assets/js/slider.js', ['focus-visible', 'lazy-load'], $version, true);
  wp_localize_script('main-js', 'WPJS', [
    'siteUrl' => get_template_directory_uri(),
    'ajaxUrl' => admin_url('admin-ajax.php'),
  ]);
 
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  register_nav_menu( 'menu_main_header', 'Меню в шапке' );
  add_theme_support('post-thumbnails');
  
}

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}


add_action('init', 'create_global_variable');
function create_global_variable() {
  global $true_fruit;
  $true_fruit = [
    
    'whatsup_url' => carbon_get_theme_option( 'site_whatsup_url' ),
    'vk_url' => carbon_get_theme_option( 'site_vk_url' ),
    'teleg_url' => carbon_get_theme_option( 'site_teleg_url' ),
    'ok_url' => carbon_get_theme_option( 'site_ok_url' ),
  ];
}


add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('product', [
    'labels' => [
      'name'               => 'Товары', // основное название для типа записи
      'singular_name'      => 'Товар', // название для одной записи этого типа
      'add_new'            => 'Добавить товар', // для добавления новой записи
      'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование товара', // для редактирования типа записи
      'new_item'           => 'Новый товар', // текст новой записи
      'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
      'search_items'       => 'Искать товар', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Товары', // название меню
    ],
    'menu_icon'          => 'dashicons-cart',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
    'has_archive'        => true,
    'rewrite'            => ['slug' => 'products']
   ] );

   register_taxonomy('product-categories', 'product', [
    'labels'        => [
      'name'                        => 'Категории товаров',
      'singular_name'               => 'Категория товароа',
      'search_items'                =>  'Искать категории',
      'popular_items'               => 'Популярные категории',
      'all_items'                   => 'Все категории',
      'edit_item'                   => 'Изменить категорию',
      'update_item'                 => 'Обновить категорию',
      'add_new_item'                => 'Добавить новую категорию',
      'new_item_name'               => 'Новое название категории',
      'separate_items_with_commas'  => 'Отделить категории запятыми',
      'add_or_remove_items'         => 'Добавить или удалить категорию',
      'choose_from_most_used'       => 'Выбрать самую популярную категорию',
      'menu_name'                   => 'Категории',
    ],
    'hierarchical'  => true,
    
    
  ]);
  
  
  add_action('wp_ajax_send_email', 'truefruit_send_email');
add_action('wp_ajax_nopriv_send_email', 'truefruit_send_email');
function truefruit_send_email() {
  $method = $_SERVER['REQUEST_METHOD'];

  if ($method !== 'POST') {
    exit();
  }

  $admin_email = 'info@true-f.ru';
  $subject = '1';
  $form_subject = 'Заявка с сайта TrueFruit';
  $message = '';
  $color_counter = 1;
  
  foreach ($_POST as $key => $value) {
    if ($value === '') {
      continue;
    }
    $color = $color_counter % 2 === 0 ? '#fff' : '#f8f8f8';
    $message .= "
      <tr style='background-color: $color;'>
        <td style='padding: 10px; border: 1px solid #e9e9e9;'>$key</td>
        <td style='padding: 10px; border: 1px solid #e9e9e9;'>$value</td>
        
        <td style='padding: 10px; border: 1px solid #e9e9e9;'>$alt</td>
      </tr>";
      
  
    $color_counter++;
  }
  
  function adopt($text) {
    return '=?utf-8?B?'.base64_encode($text).'?=';
  }


  $message = "<table style='width: 100%;'>$message</table>";
  
  $headers  = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From:" . adopt($form_subject) . " <$admin_email>\r\n";
  
  $success_send = wp_mail($admin_email, $subject, $message, $headers);
  
  if ($success_send) {
    echo 'success';
  } else {
    echo 'error';
  }
  wp_die();
}
}