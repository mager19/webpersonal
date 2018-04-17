<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package portafolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function portafolio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'portafolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function portafolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'portafolio_pingback_header' );

// Register Custom Post Type
function acerca_de_mi_() {

	$labels = array(
		'name'                  => _x( 'Acerca_de_mi', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Acerca_de_mi', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Acerca de Mi', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
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
		'label'                 => __( 'Acerca_de_mi', 'text_domain' ),
		'description'           => __( 'acercademi', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 85,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'acercademi', $args );

}
add_action( 'init', 'acerca_de_mi_', 0 );

// Register Custom Post Type
function trabajos() {

	$labels = array(
		'name'                  => _x( 'trabajos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'trabajo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Trabajos', 'text_domain' ),
		'name_admin_bar'        => __( 'Trabajos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los trabajos', 'text_domain' ),
		'add_new_item'          => __( 'Crear nuevo trabajo', 'text_domain' ),
		'add_new'               => __( 'Nuevo trabajo', 'text_domain' ),
		'new_item'              => __( 'Nuevo trabajo', 'text_domain' ),
		'edit_item'             => __( 'Editar trabajo', 'text_domain' ),
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
		'label'                 => __( 'trabajo', 'text_domain' ),
		'description'           => __( 'Recopilación de trabajos con algunos de mis clientes.', 'text_domain' ),
		'labels'                => $labels,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trabajos', $args );

}
add_action( 'init', 'trabajos', 0 );

// Register Custom Post Type
function contenido() {

	$labels = array(
		'name'                  => _x( 'Contenidos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'contenido', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Contenidos Extra', 'text_domain' ),
		'name_admin_bar'        => __( 'Contenidos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los Contenidos Extra', 'text_domain' ),
		'add_new_item'          => __( 'Crear nuevo Contenido', 'text_domain' ),
		'add_new'               => __( 'Nuevo Contenido', 'text_domain' ),
		'new_item'              => __( 'Nuevo Contenido', 'text_domain' ),
		'edit_item'             => __( 'Editar Contenido', 'text_domain' ),
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
		'label'                 => __( 'contenido', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-media',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'contenido', $args );

}
add_action( 'init', 'contenido', 0 );

// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
add_action( 'init', 'create_book_taxonomies', 0 );
 
// Creamos dos taxonomías, género y autor para el custom post type "libro"
function create_book_taxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
	$labels = array(
	'name' => _x( 'Tipo de Trabajo', 'taxonomy general name' ),
	'singular_name' => _x( 'Tipo de Trabajo', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por tipo de trabajo' ),
	'all_items' => __( 'Todos los Trabajos' ),
	'parent_item' => __( 'trabajo padre' ),
	'parent_item_colon' => __( 'trabajo padre:' ),
	'edit_item' => __( 'Editar trabajo' ),
	'update_item' => __( 'Actualizar trabajo' ),
	'add_new_item' => __( 'Añadir nuevo trabajo' ),
	'new_item_name' => __( 'Nombre del nuevo trabajo' ),
);
register_taxonomy( 'tipo', array( 'trabajos' ), array(
	'hierarchical' => true,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'tipo' ),
));

	$labels = array(
	'name' => _x( 'Tipo de Contenido', 'taxonomy general name' ),
	'singular_name' => _x( 'Tipo de Contenido', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por tipo de contenido' ),
	'all_items' => __( 'Todos los Contenidos' ),
	'parent_item' => __( 'Contenido padre' ),
	'parent_item_colon' => __( 'Contenido padre:' ),
	'edit_item' => __( 'Editar Contenido' ),
	'update_item' => __( 'Actualizar Contenido' ),
	'add_new_item' => __( 'Añadir nuevo Contenido' ),
	'new_item_name' => __( 'Nombre del nuevo Contenido' ),
);
register_taxonomy( 'tipoContenido', array( 'contenido' ), array(
	'hierarchical' => true,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'categoria' ),
));

} // Fin de la función create_book_taxonomies().
