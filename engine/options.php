<?php 

function jacbt_customize_register( $wp_customize ) {

  /* Sections and panels are here. Settings are in subfunctions */
  $wp_customize->add_section( 'jacbt_header' , array(
    'title' => __( 'Header options', 'bicicletta' ),
    'priority' => 70, 
    'description' => __( 'Look and function of the main site header. <i>Header menu control is in the "Menu options" section</i>', 'bicicletta' )
  ) );
  $wp_customize->add_panel( 'jacbt_colors', array(
    'title' => __( 'Color scheme', 'bicicletta' ),
    'priority' => 71
  ) );
  $wp_customize->add_section( 'jacbt_site_colors', array(
    'title' => __( 'Content colors', 'bicicletta' ),
    'panel' => 'jacbt_colors'
  ) );
  $wp_customize->add_section( 'jacbt_menu_colors' , array(
    'title' => __( 'Menu colors', 'bicicletta' ),
    'panel' => 'jacbt_colors',
    'description' => __( 'Built-in meny location options.<br>
      	The <b>Header Menu</b> is positioned upper right of the main header.</br>
      	The <b>Content Menu</b> is positioned between the main header and the content. It also scrolls with the content.</br>
      	You will also have to assign your menu to these areas using the menu panel.
      ', 'bicicletta' )
  ) );
  $wp_customize->add_section( 'jacbt_layout' , array(
    'title' => __( 'Layout', 'bicicletta' ),
    'priority' => 72, 
  ) );
    
  jacbt_reg_colors( $wp_customize );
  jacbt_reg_header( $wp_customize );
  jacbt_reg_menus( $wp_customize );
  jacbt_reg_layout( $wp_customize );
  

}
add_action( 'customize_register', 'jacbt_customize_register' );

function jacbt_reg_colors( $wp_customize ) {
  
  $wp_customize->add_setting( 'jacbt_color_bodybg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#888888',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_bodybg', array(
  	'label'        => __( 'Site Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_bodybg'
  ) ) );  
  $wp_customize->add_setting( 'jacbt_color_body', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_body', array(
  	'label'        => __( 'Site Text Color', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_body'
  ) ) ); 
    
  $wp_customize->add_setting( 'jacbt_color_contbg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_contbg', array(
  	'label'        => __( 'Content and Sidebar Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_contbg'
  ) ) );  

  $wp_customize->add_setting( 'jacbt_color_imgbg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#EEEEEE',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_stickbg', array(
  	'label'        => __( 'Image and thumbnail background color', 'bicicletta' ),
    'description' => __('Background for the box around images in both posts and the gallery.', 'bicicletta'),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_imgbg'
  ) ) );  
  
  $wp_customize->add_setting( 'jacbt_color_stickbg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#ffffBA',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_stickbg', array(
  	'label'        => __( 'Sticky post Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_stickbg'
  ) ) );  

  $wp_customize->add_setting( 'jacbt_color_metatxt', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#727272',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_metatxt', array(
  	'label'        => __( 'Metadata text color (including navigation)', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_metatxt'
  ) ) );

  $wp_customize->add_setting( 'jacbt_color_metaemp', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#727272',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_metaemp', array(
  	'label'        => __( 'Metadata emphasis color (including navigation)', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_metaemp'
  ) ) );

  $wp_customize->add_setting( 'jacbt_color_link', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_link', array(
  	'label'        => __( 'Link text color', 'bicicletta' ),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_link'
  ) ) );
  $wp_customize->add_setting( 'jacbt_color_linkbg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#DDDDDD',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_linkbg', array(
  	'label'        => __( 'Link hover background color', 'bicicletta' ),
    'descritpion'  => __( 'This is used to provide a \'highlight\' when the mouse is over a link.', 'bicicletta'),
  	'section'    => 'jacbt_site_colors',
  	'settings'   => 'jacbt_color_linkbg'
  ) ) );
}


function jacbt_reg_header( $wp_customize ) {

  $wp_customize->add_setting( 'jacbt_display_logo', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_display_logo', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Display logo in header', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
    ),
  ) );

    $wp_customize->add_setting( 'jacbt_logo_shadow', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_logo_shadow', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Raise logo above header', 'bicicletta' ),
    'description' => __( 'Add a drop shadow under the logo to make it appear to hover over the header.', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_logo_uri', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => get_template_directory_uri() . '/blue_bike.jpg',
    'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'jacbt_logo_uri',
           array(
               'label'      => __( 'Blog logo', 'bicicletta' ),
               'description' => __( '<b>Note:</b> Pick an image that scales well if you are using the dynamic header option. The image should be 125x125. You can also scale it in the media library.', 'bicicletta' ),
               'section'    => 'jacbt_header',
               'settings'	=> 'jacbt_logo_uri'
           )
       )
   );
   
  $wp_customize->add_setting( 'jacbt_dynamic_header', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_dynamic_header', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Dynamic header resizing', 'bicicletta' ),
    'description' => __( 'Automatically resize the header in response to scrolling, focusing attention on the content.', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_display_blogname', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_display_blogname', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Display blog title in header', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
      'id' => 'jacbt_opt_dis_tagline'
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_display_tagline', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_display_tagline', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Display tagline in header', 'bicicletta' ),
    'description' => __( 'Show the blogs descritpion text in the header.', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
      'id' => 'jacbt_opt_dis_tagline'
    ),
  ) );
  

  $wp_customize->add_setting( 'jacbt_dynamic_tagline', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_dynamic_tagline', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_header',
    'label' => __( 'Context sensitive tagline', 'bicicletta' ),
    'description' => __( 'Display the post title instead of the blog description when viewing a single post.', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
      'id' => 'jacbt_opt_dyn_tagline'
    ),
  ) );

      
  $wp_customize->add_setting( 'jacbt_color_headbg', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_headbg', array(
  	'label'        => __( 'Header Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_header',
  	'settings'   => 'jacbt_color_headbg'
  ) ) );
  $wp_customize->add_setting( 'jacbt_header_opac', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 80, // Percentage, not actual alpha. Translated in jacbt_hex_to_rgba()
    'sanitize_callback' => 'jacbt_sanitize_opacity',
  ) );
  $wp_customize->add_control( 'jacbt_header_opac', array(
    'type' => 'range',
    'section' => 'jacbt_header',
    'label' => __( 'Header background opacity', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 0,
      'max' => 100,
      'step' => 1,
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_color_headtxt', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_headtxt', array(
  	'label'        => __( 'Header Text Color', 'bicicletta' ),
  	'section'    => 'jacbt_header',
  	'settings'   => 'jacbt_color_headtxt'
  ) ) );
  
}

function jacbt_reg_menus( $wp_customize ) {

  /* Menu in header */
  $wp_customize->add_setting( 'jacbt_color_hmenu', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_hmenu', array(
  	'label'        => __( 'Header Menu Text Color', 'bicicletta' ),
  	'section'    => 'jacbt_menu_colors',
  	'settings'   => 'jacbt_color_hmenu'
  ) ) );
  $wp_customize->add_setting( 'jacbt_bgcolor_hmenu', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_bgcolor_hmenu', array(
  	'label'        => __( 'Header Menu Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_menu_colors',
    'description' => __( 'Displayed when link is hovered over', 'bicicletta' ),
    'settings'   => 'jacbt_bgcolor_hmenu'
  ) ) );
  $wp_customize->add_setting( 'jacbt_hmenu_opac', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 100,
    'sanitize_callback' => 'jacbt_sanitize_opacity',
  ) );
  $wp_customize->add_control( 'jacbt_hmenu_opac', array(
    'type' => 'range',
    'section' => 'jacbt_menu_colors',
    'label' => __( 'Header menu background opacity', 'bicicletta' ),
    'description' => __( 'Displayed when link is hovered over', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 0,
      'max' => 100,
      'step' => 1,
    ),
  ) );
  
  /* Menu above content */
  $wp_customize->add_setting( 'jacbt_color_cmenu', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_color_cmenu', array(
  	'label'        => __( 'Content Menu Text Color', 'bicicletta' ),
  	'section'    => 'jacbt_menu_colors',
  	'settings'   => 'jacbt_color_cmenu'
  ) ) );
  $wp_customize->add_setting( 'jacbt_bgcolor_cmenu', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => '#DDDDDD',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jacbt_bgcolor_cmenu', array(
  	'label'        => __( 'Content Menu Background Color', 'bicicletta' ),
  	'section'    => 'jacbt_menu_colors',
    'description' => __( 'Menu above the main content', 'bicicletta' ),
    'settings'   => 'jacbt_bgcolor_cmenu'
  ) ) );
  $wp_customize->add_setting( 'jacbt_cmenu_opac', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 100,
    'sanitize_callback' => 'jacbt_sanitize_opacity',
  ) );
  $wp_customize->add_control( 'jacbt_cmenu_opac', array(
    'type' => 'range',
    'section' => 'jacbt_menu_colors',
    'label' => __( 'Content menu background opacity', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 0,
      'max' => 100,
      'step' => 1,
    ),
  ) );  
}

function jacbt_reg_layout( $wp_customize ) {

  $wp_customize->add_setting( 'jacbt_fixed_width', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => False,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_fixed_width', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_layout',
    'label' => __( 'Fixed width', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
    ),
  ) );

  $wp_customize->add_setting( 'jacbt_content_width', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 800,
    'sanitize_callback' => 'jacbt_sanitize_contwidth',
  ) );
  $wp_customize->add_control( 'jacbt_content_width', array(
    'type' => 'number',
    'section' => 'jacbt_layout',
    'label' => __( 'Content area width (in pixels).', 'bicicletta' ),
    'description' => __( 'Used only if \'Fixed Width\' is selected', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 300,
      'max' => 4000,
      'step' => 10,
    ),
  ) );

  $wp_customize->add_setting( 'jacbt_sidebar_width', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 275,
    'sanitize_callback' => 'jacbt_sanitize_sbwidth',
  ) );
  $wp_customize->add_control( 'jacbt_sidebar_width', array(
    'type' => 'number',
    'section' => 'jacbt_layout',
    'label' => __( 'Sidebar width (in pixels)', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 100,
      'max' => 400,
      'step' => 5,
    ),
  ) );

  $wp_customize->add_setting( 'jacbt_gutter_width', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 10,
    'sanitize_callback' => 'jacbt_sanitize_gutwidth',
  ) );
  $wp_customize->add_control( 'jacbt_gutter_width', array(
    'type' => 'number',
    'section' => 'jacbt_layout',
    'label' => __( 'Gutter width (in pixels)', 'bicicletta' ),
    'description' => __( 'The space between the content and sidebar. Setting this to zero and corner style to square will make the content and sidebar appear to be one panel', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 0,
      'max' => 100,
      'step' => 1,
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_hide_sidebar', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => True,
    'sanitize_callback' => 'jacbt_sanitize_truefalse',
  ) );
  $wp_customize->add_control( 'jacbt_hide_sidebar', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'jacbt_layout',
    'label' => __( 'Hide sidebar when necessary', 'bicicletta' ),
    'descrition' => __( 'When selected, the sidebar will be hidden when the window is resized and there is no longer enough width to display the main panel properly.', 'bicicletta' ),
    'input_attrs' => array(
      'class' => 'jacbt_opt_chk',
    ),
  ) );
  
  $wp_customize->add_setting( 'jacbt_rounded_corners', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 'round',
    'sanitize_callback' => 'jacbt_sanitize_corners',
  ) );
  $wp_customize->add_control( 'jacbt_rounded_corners', array(
        'type' => 'radio',
        'label' => 'Corner Style',
        'section' => 'jacbt_layout',
        'choices' => array(
            'round' => 'Rounded',
            'square' => 'Square',
        ),
  ) );
  $wp_customize->add_setting( 'jacbt_corner_radius', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'default' => 25,
    'sanitize_callback' => 'jacbt_sanitize_radius',
  ) );
  $wp_customize->add_control( 'jacbt_corner_radius', array(
    'type' => 'number',
    'section' => 'jacbt_layout',
    'label' => __( 'Rounded corner radius (in pixels)', 'bicicletta' ),
    'input_attrs' => array(
      'min' => 0,
      'max' => 50,
      'step' => 1,
    ),
  ) );
}


function jacbt_sanitize_truefalse( $value ) {
  if ( $value ) {
    return True;
  } else {
    return False;
  }
}

function jacbt_sanitize_corners( $value ) {
  if ( $value == 'square' ) {
    return 'square';
  }
  return 'round';
}

function jacbt_sanitize_radius ( $value ) {
  if ( $value >= 0 && $value <= 50 ) {
    return $value;
  } elseif ( $value < 0 ) {
    return 0;
  } elseif ( $value > 50 ) {
    return 50;
  } else {
    return 25;
  }
}
function jacbt_sanitize_lr( $value ) {
  if ( $value == 'left' ) {
    return 'left';
  }
  return 'right';
}

function jacbt_sanitize_opacity ( $value ) {
  if ( $value >= 0 && $value <= 100 ) {
    return $value;
  }
  if ( $value < 0 ) {
    return 0;
  }
  return( 100 );
}

function jacbt_sanitize_contwidth ( $value ) {
  if ( $value >= 300 && $value <= 4000 ) {
    return $value;
  } elseif ( $value < 300 ) {
    return 300;
  } elseif ( $value > 4000 ) {
    return 4000;
  } else {
    return 800;
  }
}

function jacbt_sanitize_sbwidth ( $value ) {
  if ( $value >= 100 && $value <= 400 ) {
    return $value;
  } elseif ( $value < 100 ) {
    return 100;
  } elseif ( $value > 400 ) {
    return 400;
  } else {
    return 275;
  }
}

function jacbt_sanitize_gutwidth ( $value ) {
  if ( $value >= 0 && $value <= 100 ) {
    return $value;
  } elseif ( $value < 0 ) {
    return 0;
  } elseif ( $value > 100 ) {
    return 100;
  } else {
    return 10;
  }
}
?>