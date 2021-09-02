<?php

// Our custom post type function
function create_posttype() {
 
  register_post_type( 'tipo-de-contribuicao',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Tipos de Contribuições' ),
              'singular_name' => __( 'Tipo de Contribuicao' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'tipo-de-contribuicao'),
          'show_in_rest' => true,

      )
  );

  register_post_type( 'reportagens',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Reportagens' ),
              'singular_name' => __( 'Reportagem' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'reportagens'),
          'show_in_rest' => true,

      )
  );

  register_post_type( 'apoiadoras',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Apoiadoras' ),
              'singular_name' => __( 'Apoiadora' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'apoiadoras'),
          'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>