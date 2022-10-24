<?php
/*
PLugin Name: Gourmet Artist Post Types
Plugin URI:
Description: Agrega Custom Post Types al sitio Gormet Artist
Version: 1.0
Author: Kevin Ceferino
Author URI:
License: GLP2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
function crear_post_type_recetas(){
    $labels = array(
		'name'                => _x( 'Recetas', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Receta', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Recetas', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Receta Padre', 'gourmet-artist' ),
		'all_items'           => __( 'Todas las Recetas', 'gourmet-artist' ),
		'view_item'           => __( 'Ver Receta', 'gourmet-artist' ),
		'add_new_item'        => __( 'Agregar Nueva Receta', 'gourmet-artist' ),
		'add_new'             => __( 'Agregar Nueva Receta', 'gourmet-artist' ),
		'edit_item'           => __( 'Editar Receta', 'gourmet-artist' ),
		'update_item'         => __( 'Actualizar Receta', 'gourmet-artist' ),
		'search_items'        => __( 'Buscar Receta', 'gourmet-artist' ),
		'not_found'           => __( 'No encontrado', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gourmet-artist' ),
	);

    $args = array(
		'label'               => __( 'recetas', 'gourmet-artist' ),
		'description'         => __( 'Recetas para cocina', 'gourmet-artist' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-book-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type( 'recetas', $args );
}

add_action('init', 'crear_post_type_recetas', 0);


function crear_post_type_eventos(){
    $labels = array(
		'name'                => _x( 'Eventos', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Eventos', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Evento Padre', 'gourmet-artist' ),
		'all_items'           => __( 'Todos las Eventos', 'gourmet-artist' ),
		'view_item'           => __( 'Ver Evento', 'gourmet-artist' ),
		'add_new_item'        => __( 'Agregar Nuevo Evento', 'gourmet-artist' ),
		'add_new'             => __( 'Agregar Nuevo Evento', 'gourmet-artist' ),
		'edit_item'           => __( 'Editar Evento', 'gourmet-artist' ),
		'update_item'         => __( 'Actualizar Evento', 'gourmet-artist' ),
		'search_items'        => __( 'Buscar Evento', 'gourmet-artist' ),
		'not_found'           => __( 'No encontrado', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gourmet-artist' ),
	);

    $args = array(
		'label'               => __( 'eventos', 'gourmet-artist' ),
		'description'         => __( 'Eventos de la empresa', 'gourmet-artist' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type( 'eventos', $args );
}

add_action('init', 'crear_post_type_eventos', 0);

function articulos() {

	$labels = array(
		'name'                  => _x( 'Articulos', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'         => _x( 'Articulos', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'             => __( 'Articulos', 'gourmet-artist' ),
		'name_admin_bar'        => __( 'Articulos', 'gourmet-artist' ),
		'archives'              => __( 'Archivo de Articulos', 'gourmet-artist' ),
		'attributes'            => __( 'Atributos', 'gourmet-artist' ),
		'parent_item_colon'     => __( 'Articulo Padre', 'gourmet-artist' ),
		'all_items'             => __( 'Todos los Artículos', 'gourmet-artist' ),
		'add_new_item'          => __( 'Agregar Nuevo Articulo', 'gourmet-artist' ),
		'add_new'               => __( 'Agregar Nuevo Articulo', 'gourmet-artist' ),
		'new_item'              => __( 'Nuevo Articulo', 'gourmet-artist' ),
		'edit_item'             => __( 'Editar Articulo', 'gourmet-artist' ),
		'update_item'           => __( 'Actualizr Articulo', 'gourmet-artist' ),
		'view_item'             => __( 'Ver Articulo', 'gourmet-artist' ),
		'view_items'            => __( 'Ver Articulos', 'gourmet-artist' ),
		'search_items'          => __( 'Buscar Articulo', 'gourmet-artist' ),
		'not_found'             => __( 'No Encontrado', 'gourmet-artist' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gourmet-artist' ),
		'featured_image'        => __( 'Imagen Destacada', 'gourmet-artist' ),
		'set_featured_image'    => __( 'Agregar Imagen Destacada', 'gourmet-artist' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'gourmet-artist' ),
		'use_featured_image'    => __( 'Usar Imagen Destacada', 'gourmet-artist' ),
		'insert_into_item'      => __( 'Insertar dentro de Articulos', 'gourmet-artist' ),
		'uploaded_to_this_item' => __( 'Agregado a Articulos', 'gourmet-artist' ),
		'items_list'            => __( 'Lista de Articulos', 'gourmet-artist' ),
		'items_list_navigation' => __( 'Navegación de Articulos', 'gourmet-artist' ),
		'filter_items_list'     => __( 'Filtrar Articulos', 'gourmet-artist' ),
	);
	$args = array(
		'label'                 => __( 'Articulos', 'gourmet-artist' ),
		'description'           => __( 'Articulos recomendados', 'gourmet-artist' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'articulos', $args );

}
add_action( 'init', 'articulos', 0 );

function taxonimiatipo_receta_taxonimia(){

	$labels = array(
		'name'              => _x( 'Tipo de comida', 'taxonomy general name' ),
		'singular_name'     => _x( 'Tipo de comida', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Tipo de comida' ),
		'all_items'         => __( 'Todos los Tipo de comidas' ),
		'parent_item'       => __( 'Tipo de comida Padre' ),
		'parent_item_colon' => __( 'Tipo de comida Padre:' ),
		'edit_item'         => __( 'Editar Tipo de comida' ),
		'update_item'       => __( 'Actualizar Tipo de comida' ),
		'add_new_item'      => __( 'Agregar Nuevo Tipo de comida' ),
		'new_item_name'     => __( 'Nuevo Tipo de comida' ),
		'menu_name'         => __( 'Tipo de comida' ),
	);
	
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite' => array( 'slug' => 'tipo-comida' ),
	);
	
	register_taxonomy( 'tipo-comida', array( 'recetas' ), $args );

}

add_action('init', 'taxonimiatipo_receta_taxonimia');

function horario_comida_taxonimia() {
	$labels = array(
		'name'              => _x( 'Horario de Comida', 'taxonomy general name' ),
		'singular_name'     => _x( 'Horario de Comida', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Horario' ),
		'all_items'         => __( 'Todos los Horarios' ),
		'parent_item'       => __( 'Horario Padre' ),
		'parent_item_colon' => __( 'Horario Padre:' ),
		'edit_item'         => __( 'Editar Horario' ),
		'update_item'       => __( 'Actualizar Horario' ),
		'add_new_item'      => __( 'Agregar Nuevo Horario' ),
		'new_item_name'     => __( 'Nuevo Horario' ),
		'menu_name'         => __( 'Horario' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite' => array( 'slug' => 'horario' ),
	);

	register_taxonomy( 'horario-menu', array( 'recetas' ), $args );
}
add_action( 'init', 'horario_comida_taxonimia' );

function estado_animo_taxonimia(){
	$labels = array(
		'name'              => _x( 'Estado de Animo', 'taxonomy general name' ),
		'singular_name'     => _x( 'Estado de Animo', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Estado de Animo' ),
		'all_items'         => __( 'Todos los Estados de Animo' ),
		'parent_item'       => __( 'Genero Estado' ),
		'parent_item_colon' => __( 'Genero Estado:' ),
		'edit_item'         => __( 'Editar Estado' ),
		'update_item'       => __( 'Actualizar Estado' ),
		'add_new_item'      => __( 'Agregar Nuevo Estado' ),
		'new_item_name'     => __( 'Nuevo Estado' ),
		'menu_name'         => __( 'Estado de Ánimo' ),
	);
	
	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite' => array( 'slug' => 'estado' ),
	);
	
	register_taxonomy( 'estado', array( 'recetas' ), $args );
}

add_action( 'init', 'estado_animo_taxonimia' );

function precio_receta_taxonomia() {

	$labels = array(
		'name'                       => _x( 'Precios', 'Taxonomy General Name', 'gourmet-artist' ),
		'singular_name'              => _x( 'Precio', 'Taxonomy Singular Name', 'gourmet-artist' ),
		'menu_name'                  => __( 'Precio', 'gourmet-artist' ),
		'all_items'                  => __( 'Todos los Precio', 'gourmet-artist' ),
		'parent_item'                => __( 'Precio Padre', 'gourmet-artist' ),
		'parent_item_colon'          => __( 'Precio padre:', 'gourmet-artist' ),
		'new_item_name'              => __( 'New Item Name', 'gourmet-artist' ),
		'add_new_item'               => __( 'Agregar nuevo Precio', 'gourmet-artist' ),
		'edit_item'                  => __( 'Editar Precio', 'gourmet-artist' ),
		'update_item'                => __( 'Actualizar Precio', 'gourmet-artist' ),
		'view_item'                  => __( 'Ver Precio', 'gourmet-artist' ),
		'separate_items_with_commas' => __( 'Separa los Precios con comas', 'gourmet-artist' ),
		'add_or_remove_items'        => __( 'Agrega o Elimina Precios', 'gourmet-artist' ),
		'choose_from_most_used'      => __( 'Escoge el Precio más usado', 'gourmet-artist' ),
		'popular_items'              => __( 'Precios populares', 'gourmet-artist' ),
		'search_items'               => __( 'Buscar Precio', 'gourmet-artist' ),
		'not_found'                  => __( 'No Encontrado', 'gourmet-artist' ),
		'no_terms'                   => __( 'Sin Precios', 'gourmet-artist' ),
		'items_list'                 => __( 'Lista de Precios', 'gourmet-artist' ),
		'items_list_navigation'      => __( 'Navegación de lista de Precios', 'gourmet-artist' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'precio_receta', array( 'recetas' ), $args );

}
add_action( 'init', 'precio_receta_taxonomia', 0 );