<?php 

function TwentyTenChild_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'additional_options' , array(
	    'title'      => __('Additional Options','conqueringwordpress'),
	    'priority'   => 150,
	) );
	
	
	/* HOVER COLOR */
	
	$wp_customize->add_setting(
			'sitewide_hover_color', array(
				'default' => '#21759b',
				'type' => 'option', 
				'capability' => 
				'edit_theme_options'
			)
		);
		
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sitewide_hover_color_control', 
			array('label' => __( 'Hover Color', 'conqueringwordpress' ),
			'section' => 'additional_options',
			'settings' => 'sitewide_hover_color',
			'priority'   => 1
			)
		)
	);
	
	/* PADDING TOP TEXT HEADER */
	
	$wp_customize->add_setting( 'padding_top_text_header' , array(
	    'default'     => false,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'padding_top_text_header_control', array(
		'label'        => __( 'Pad Top (of text header)?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'padding_top_text_header',
	    'type'     => 'checkbox',
		'priority'   => 2
	) ) ;
	
	/* SEARCH BAR ON TOP */
	
	$wp_customize->add_setting( 'search_bar_top' , array(
	    'default'     => true,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'search_bar_top_control', array(
		'label'        => __( 'Search Bar on Top of Page?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'search_bar_top',
	    'type'     => 'checkbox',
		'priority'   => 3
	) ) ;
	
	/* TOP SEARCH BAR BACKGROUND COLOR */
	
	$wp_customize->add_setting(
			'search_bar_top_bg_color', array(
				'default' => '#CCC',
				'type' => 'option', 
				'capability' => 
				'edit_theme_options'
			)
		);
		
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'search_bar_top_bg_color_control', 
			array('label' => __( 'Search Top Background Color', 'conqueringwordpress' ),
			'section' => 'additional_options',
			'settings' => 'search_bar_top_bg_color',
			'priority'   => 4)
		)
	);
	
	/* PAGE CONTAINER SHADOW */
	
	$wp_customize->add_setting( 'page_container_shadow' , array(
	    'default'     => true,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'page_container_shadow_control', array(
		'label'        => __( 'Page Container Shadow (TURN OFF WITH WHITE SITE BACKGROUND)', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'page_container_shadow',
	    'type'     => 'checkbox',
		'priority'   => 5
	) ) ;
	
	/* PAGE CONTAINER COLOR TRANSPARENT */
	
	$wp_customize->add_setting( 'page_container_color_transparent' , array(
	    'default'     => false,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'page_container_color_transparent_control', array(
		'label'        => __( 'Page Container Color Transparent?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'page_container_color_transparent',
	    'type'     => 'checkbox',
		'priority'   => 6
	) ) ;
	
	/* PAGE CONTAINER COLOR */
	
	$wp_customize->add_setting(
			'page_container_color', array(
				'default' => '#FFF',
				'type' => 'option', 
				'capability' => 
				'edit_theme_options'
			)
		);
		
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_container_color_control', 
			array('label' => __( 'Page Container Color (TURN OFF WITH WHITE SITE BACKGROUND)', 'conqueringwordpress' ),
			'section' => 'additional_options',
			'settings' => 'page_container_color',
			'priority'   => 7)
		)
	);
	
	/* FOOTER CENTERED */
	
	$wp_customize->add_setting( 'footer_centered' , array(
	    'default'     => false,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'footer_centered_control', array(
		'label'        => __( 'Footer Centered?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'footer_centered',
	    'type'     => 'checkbox',
		'priority'   => 8
	) ) ;
	
	/* FOOTER TEXT */
	
	$wp_customize->add_setting( 'footer_text' , array(
	    'default'     => date("Y"),
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'footer_text_control', array(
				'label'        => __( 'Footer Text', 'conqueringwordpress' ),
				'section'    => 'additional_options',
				'settings'   => 'footer_text',
				'priority'   => 9)
	) ) ;
	
	/* FOOTER HIDDEN */
	
	$wp_customize->add_setting( 'footer_hidden' , array(
	    'default'     => false,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'footer_hidden_control', array(
		'label'        => __( 'Footer Hidden?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'footer_hidden',
	    'type'     => 'checkbox',
		'priority'   => 10
	) ) ;
	
	/* HEADER HIDDEN */
	
	$wp_customize->add_setting( 'header_hidden' , array(
	    'default'     => false,
	    'type'           => 'option',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_control( 'header_hidden_control', array(
		'label'        => __( 'Header Hidden?', 'conqueringwordpress' ),
		'section'    => 'additional_options',
		'settings'   => 'header_hidden',
	    'type'     => 'checkbox',
		'priority'   => 10
	) ) ;
	
	
}
add_action( 'customize_register', 'TwentyTenChild_customize_register' );

?>