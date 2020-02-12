 <?php 
 function theme_enqueue_style() {
	/* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

  /* template's primary css file */
  wp_enqueue_style( 'css' , get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'business-casual' , get_template_directory_uri().'/css/business-casual.min.css' );

  /* Bootstrap core JavaScript */
  wp_enqueue_script( 'jquery.min' , get_template_directory_uri().'/vendor/jquery/jquery.min.js', array(), '1.1', true );
  wp_enqueue_script( 'bootstrap.bundle' , get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.1', true);
}

 add_action( "wp_enqueue_scripts", "theme_enqueue_style" );



?>

