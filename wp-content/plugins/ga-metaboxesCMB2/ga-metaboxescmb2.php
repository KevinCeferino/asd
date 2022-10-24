<?php
/*
Plugin Name: GAMetaboxes CMB2
Plugin URI:
Description: Agrega MetaBoxes al sitio Gourmet Artist
Version: 1.0
Author: Juan Pablo De la torre Valdez
Author URI:
License: GLP2
Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if(file_exists(dirname(__FILE__) . '/CMB2/init.php')){
    require_once dirname(__FILE__) . '/CMB2/init.php';
}


add_action('cmb2_admin_init', 'campos_eventos');
function campos_eventos(){
    $prefix = 'ga_campos_eventos_';

    $metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Campos Eventos', 'cmb2' ),
		'object_types'  => array( 'eventos', ), // Post type
	) );

	$metabox_eventos->add_field( array(
	  'name'       => __( 'Ciudad', 'cmb2' ),
	  'desc'       => __( 'Ciudad en la que es el evento', 'cmb2' ),
	  'id'         => $prefix . 'ciudad',
	  'type'       => 'text',
	) );

	$metabox_eventos->add_field( array(
		'name' => __( 'Fecha de Evento', 'cmb2' ),
		'desc' => __( 'Fecha en la que será el evento', 'cmb2' ),
		'id'   => $prefix . 'fecha',
		'type' => 'text_datetime_timestamp',
	) );

	$metabox_eventos->add_field( array(
	  'name' => __( 'Lugares Disponibles', 'cmb2' ),
	  'desc' => __( 'Campos lugares disponibles', 'cmb2' ),
	  'id'   => $prefix . 'lugares',
	  'type' => 'text',
	) );

	$metabox_eventos->add_field( array(
		'name'       => __( 'Temas del Curso', 'cmb2' ),
		'desc'       => __( 'temas que se verán en el curso (opcional)', 'cmb2' ),
		'id'         => $prefix . 'temas',
		'type'       => 'text',
	  'repeatable'      => true,
	) );

}

function consulta_eventos_proximos($texto) {
	$args = array(
	  'post_type' => 'eventos', // Tell WordPress which post type we want
	   'orderby' => 'meta_value', // We want to organize the events by date
	   'meta_key' => 'ga_campos_eventos_fecha', // Grab the "start date" field created via "More Fields" plugin (stored in YYYY-MM-DD format)
	   'order' => 'ASC', // ASC is the other option
	   'posts_per_page' => '-1', // Let's show them all.
	   'meta_query' => array( // WordPress has all the results, now, return only the events after today's date
		   array(
			   'key' => 'ga_campos_eventos_fecha', // Check the start date field
			   'value' => time(), // Set today's date (note the similar format)
			   'compare' => '>=', // Return the ones greater than today's date
			   'type' => 'NUMERIC,' // Let WordPress know we're working with numbers
			   )
		   ),
	 );
	   echo "<h2 class='text-center'>" . $texto['texto'] . "</h2>";
	 echo "<ul class='lista-eventos no-bullet'>";
	 $eventos = new WP_Query($args); while($eventos->have_posts()): $eventos->the_post();

	 echo '<li>';
	 
	 echo the_title('<h3 class="text-center">', '</h3>');
	 echo "<p><b>Lugares disponibles: </b>" . get_post_meta( get_the_ID(), 'ga_campos_eventos_lugares', true ) . "</p>";
	 echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'ga_campos_eventos_ciudad', true ) . "</p>";
	 
	 $fechaEvento =  get_post_meta( get_the_ID(), 'ga_campos_eventos_fecha', true ); ?>
	 <p class="fecha-evento"><b>Fecha:</b> <?php echo gmdate("d-m-Y", $fechaEvento) ?> <b>Hora: </b><?php echo gmdate("H:i", $fechaEvento) ?></p>
	 
	 <?php
	 echo "<h4>Temas que se verán</h4>";
	 $temas = get_post_meta( get_the_ID(), 'ga_campos_eventos_temas', true );
	 
	 foreach($temas as $tema){
	  echo "<p>$tema</p>";
	 }
	 echo '</li>';
	 
	 endwhile; wp_reset_postdata();
  echo "</ul>";
  }
  
  add_shortcode( 'proximos-eventos', 'consulta_eventos_proximos' );