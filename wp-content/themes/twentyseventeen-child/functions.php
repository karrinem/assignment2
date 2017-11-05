<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}

/* Add Third Footer Widget */
register_sidebar( array(
		'name'          => __( 'Footer 3', 'twentyseventeen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %1$s"></section>',
		'after_widget'  => '<section id="%2$s" class="widget %2$s"></section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
) );

/*
 Add more sections to the front page sliders
 */
 function wpc_custom_front_sections( $num_sections )
 {
	 return 5; //Change this number to change the number of the sections.
 }
add_filter( 'twentyseventeen_front_page_sections', 'wpc_custom_front_sections' );