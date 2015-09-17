<?php

$jacpt_option_group = 'jacbt_options_group';

/* Dependancies... */
add_action( 'wp_enqueue_scripts', 'jacbt_load_depends' );

function jacbt_load_depends() {
	/* CSS */
	wp_enqueue_style( 'jacbt_posts', get_stylesheet_directory_uri() . '/css/post.css' );
	/* TODO: Eventually we want this to be driven by a config variable. For now 'peloton' is a placeholder */
	wp_enqueue_style( 'jacbt_scheme', get_stylesheet_directory_uri() . '/color-schemes/peloton.css' );
	
	wp_enqueue_script(
		'jacbt_bicicletta_js',
		get_stylesheet_directory_uri() . '/js/bicicletta.js',
		array( 'jquery' )
	);
}



/*
 --- Options Page Stuff ---
*/
add_action( 'admin_menu', 'jacbt_admin_options' );
add_action( 'admin_init', 'jacbt_register_settings' );

function jacbt_register_settings() {
	$jacpt_option_group = 'jacbt_options_group';
	register_setting( $jacpt_option_group, 'jacbt_opt_color_scheme', 'peloton' );
	register_setting( $jacpt_option_group, 'jacbt_opt_logo_url' );

	add_settings_section( 'jacbt_head', 'Header', 'jacbt_sections', 'jacbt' );

	add_settings_section(
		'jacbt_head', // ID
		'Header', // Title
		array( $this, 'jacbt_sections' ), // Callback
		'jacbt_theme_options' // Page
	);  
	add_settings_field(
		'jacbt_header_logo', // ID
	    'Header Logo', // Title 
	    'id_number_callback', // Callback
	    'jacbt_theme_options', // Page
	    'jacbt_head' // Section           
    );   
        
        
}

function simple_text_callback() {
	echo '<input type="text" value="ross-test-value" />"';
}
function jacbt_admin_options() {
	add_theme_page( 'Bicicletta Options 1', 'Bicicletta', 'manage_options', 'jacbt', 'jacbt_theme_options' );
}

function jacbt_sections() {
	echo 'Section stuff...';
}

function jacbt_theme_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	
	<div class="wrap">
	<h2>Bicicletta Theme Options</h2>
	<form method="post" action="options.php">
	<?php 
		settings_fields( $jacpt_option_group );
		do_settings_sections( $jacpt_option_group );
		submit_button();
	?>
	</form>
	</div>
	<?php 
}
?>