<?php



// THUMBNAILS

add_theme_support('post-thumbnails');
add_theme_support('conferencier-thumbnails');
add_theme_support('conference-thumbnails');

add_image_size('programmation-invite', 270, 270, true);
add_image_size('fiche-invite', 415, 415, true);
add_image_size('fiche-invite-liste', 140, 140, true);
add_image_size('accueil-pourquoi', 685, 352, true);
add_image_size('accueil-apprendre', 208, 208, true);




// CPT

// Register Custom Post Type
function tim_conferencier() {

    $labels = array(
        'name'                  => _x( 'Conférenciers', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Conférencier', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Conférencier', 'text_domain' ),
        'name_admin_bar'        => __( 'Conférencier', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Conférencier', 'text_domain' ),
        'description'           => __( 'Conférenciers', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'tim_conferencier', $args );

}
add_action( 'init', 'tim_conferencier', 0 );



function tim_conference() {

    $labels = array(
        'name'                  => _x( 'Conférences', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Conférence', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Conférence', 'text_domain' ),
        'name_admin_bar'        => __( 'Conférence', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Conférence', 'text_domain' ),
        'description'           => __( 'Conférences', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'tim_conference', $args );

}

add_action( 'init', 'tim_conference', 0 );



function tim_commanditaire() {

    $labels = array(
        'name'                  => _x( 'Commanditaires', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Commanditaire', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Commanditaire', 'text_domain' ),
        'name_admin_bar'        => __( 'Commanditaire', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Commanditaire', 'text_domain' ),
        'description'           => __( 'Commanditaires', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'tim_commanditaire', $args );

}

add_action( 'init', 'tim_commanditaire', 0 );



// MENUS
function add_menu() {
    register_nav_menus(array(
        'menu_principal' => 'Menu principal',
        'menu_footer' => 'Menu du pied de page'
    ));
}


add_action('init', 'add_menu');




// CÔTÉ ADMIN

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Options génèrales de mon thème',
        'menu_title' => 'Options génèrales',
        'menu_slug' => 'cw4-theme-options-generales',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Options du pied de page',
        'menu_title' => 'Pied de page',
        'parent_slug' => 'cw4-theme-options-generales',
    ));
}



// WIDGET

function widgets_initer()
{
    register_sidebar(array(
        'name' => 'Twitter Feed',
        'id' => 'twitter_feed',
        'before_widget' => '<div class="widget widget_categories">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'widgets_initer');
