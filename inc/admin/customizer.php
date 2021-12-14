<?php

/**************************************************
	** Underscores customization **
**************************************************/

/**
 * Azara Healthcare Theme Customizer
 *
 * @package Azara_Healthcare
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function underscores_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'underscores_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'underscores_customize_partial_blogdescription',
			)
		);
	}

}
add_action( 'customize_register', 'underscores_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function underscores_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function underscores_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underscores_customize_preview_js() {
	wp_enqueue_script( 'underscores-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'underscores_customize_preview_js' );


/**************************************************
	** WP Core Default Controls Examples **
**************************************************/

function example_customize_register( $wp_customize ) {

	// Add all Customizer code (i.e. Panels, Sections, Settings & Controls) here...

	// Add a panel
	$wp_customize->add_panel( 'test_panel',
	   array(
	      'title' => __( 'My Test Panel', 'azarahealthcare' ),
	      'description' => esc_html__( 'Description of my test panel.', 'azarahealthcare' ), // Can include html tags
	      //'priority' => 160, // Not typically needed. Default is 160
	      //'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
	      //'theme_supports' => '', // Rarely needed
	      //'active_callback' => '', // Rarely needed
	   )
	);

	// Add a section
	$wp_customize->add_section( 'default_controls_section',
	   array(
	      'title' => __( 'Default Controls', 'azarahealthcare' ),
	      'description' => esc_html__( 'These are examples of default controls for the customizer.', 'azarahealthcare' ),
	      'panel' => 'test_panel', // Only needed if adding your Section to a Panel
	      //'priority' => 160, // Not typically needed. Default is 160
	      //'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
	      //'theme_supports' => '', // Rarely needed
	      //'active_callback' => '', // Rarely needed
	      //'description_hidden' => 'false', // Rarely needed. Default is False
	   )
	);

	// Add an input setting
	$wp_customize->add_setting( 'example_default_text',
   		array(
      'default' => 'Default text', // Optional.
      //'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
      //'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      //'theme_supports' => '', // Optional. Rarely needed
      //'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
      //'sanitize_callback' => '', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
      //'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
      //'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
   )
	);

	// Add an input control
	$wp_customize->add_control( 'example_default_text',
   array(
      'label' => __( 'Default Input Control', 'azarahealthcare' ),
      'description' => esc_html__( 'Input control type can be text, email, url, number, hidden, or date', 'azarahealthcare' ),
      'section' => 'default_controls_section',
      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => 'my-custom-class',
         'style' => 'border: 2px solid green',
         'placeholder' => __( 'Enter your text here...', 'azarahealthcare' ),
      ),
   )
	);

	// Add a checkbox setting
	$wp_customize->add_setting( 'example_default_checkbox',
   array(
      'default' => 0,
      //'transport' => 'refresh',
      //'sanitize_callback' => 'skyrocket_switch_sanitization'
   )
);

	// Add a checkbox control
	$wp_customize->add_control( 'example_default_checkbox',
	   array(
	      'label' => __( 'Default Checkbox Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section'  => 'default_controls_section',
	      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type'=> 'checkbox',
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	   )
	);

	// Add a selection setting
	$wp_customize->add_setting( 'example_default_select',
   array(
      'default' => 'jet-fuel',
      //'transport' => 'refresh',
      //'sanitize_callback' => 'skyrocket_radio_sanitization'
   )
	);

	// Add a selection control
	$wp_customize->add_control( 'example_default_select',
	   array(
	      'label' => __( 'Default Select Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'select',
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'choices' => array( // Optional.
	         'wordpress' => __( 'WordPress', 'azarahealthcare' ),
	         'hamsters' => __( 'Hamsters', 'azarahealthcare' ),
	         'jet-fuel' => __( 'Jet Fuel', 'azarahealthcare' ),
	         'nuclear-energy' => __( 'Nuclear Energy', 'azarahealthcare' )
	      )
	   )
	);

	// Add a radio button setting
	$wp_customize->add_setting( 'example_default_radio',
   array(
      'default' => 'spider-man',
      //'transport' => 'refresh',
      //'sanitize_callback' => 'skyrocket_radio_sanitization'
   )
	);

	// Add a radio button control
	$wp_customize->add_control( 'example_default_radio',
	   array(
	      'label' => __( 'Default Radio Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'radio',
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'choices' => array( // Optional.
	         'captain-america' => __( 'Captain America', 'azarahealthcare' ),
	         'iron-man' => __( 'Iron Man', 'azarahealthcare' ),
	         'spider-man' => __( 'Spider Man', 'azarahealthcare' ),
	         'thor' => __( 'Thor', 'azarahealthcare' )
	      )
	   )
	);

	// Add a pages dropdown setting
	$wp_customize->add_setting( 'example_default_dropdownpages',
   array(
      'default' => '9', // Use post's ID as value
      //'transport' => 'refresh',
      'sanitize_callback' => 'absint'
   )
	);

	// Add a pages dropdown control
	$wp_customize->add_control( 'example_default_dropdownpages',
	   array(
	      'label' => __( 'Default Dropdown Pages Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'dropdown-pages',
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	   )
	);

	// Add a text area setting
	$wp_customize->add_setting( 'example_default_textarea',
   array(
      'default' => '',
      //'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
	);

	// Add a text area control
	$wp_customize->add_control( 'example_default_textarea',
	   array(
	      'label' => __( 'Default Textarea Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'textarea',
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 2px solid purple',
	         'placeholder' => __( 'Enter your message...', 'azarahealthcare' ),
	      ),
	   )
	);

	// Add a color setting
	$wp_customize->add_setting( 'example_default_color',
   array(
      'default' => '#33ce00',
      //'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
   )
	);

	// Add a color control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
		$wp_customize,
		'example_default_color',
	   	array(
				'label' => __( 'Default Color Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'Example description', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      //'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      //'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
		  )
		)
	);

	// Add a media setting
	$wp_customize->add_setting( 'example_default_media',
	   array(
	      'default' => '',
	      //'transport' => 'refresh',
	      'sanitize_callback' => 'absint'
	   )
	);

	// Add a media control
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'example_default_media',
	   array(
	      'label' => __( 'Default Media Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'This is the description for the Media Control', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
	      'button_labels' => array( // Optional
	         'select' => __( 'Select File', 'azarahealthcare' ),
	         'change' => __( 'Change File', 'azarahealthcare' ),
	         'default' => __( 'Default', 'azarahealthcare' ),
	         'remove' => __( 'Remove', 'azarahealthcare' ),
	         'placeholder' => __( 'No file selected', 'azarahealthcare' ),
	         'frame_title' => __( 'Select File', 'azarahealthcare' ),
	         'frame_button' => __( 'Choose File', 'azarahealthcare' ),
	      )
	   )
	) );

	// Add a cropped media setting
	$wp_customize->add_setting( 'example_default_cropped_image',
	   array(
	      'default' => '',
	      //'transport' => 'refresh',
	      'sanitize_callback' => 'absint'
	   )
	);

	// Add a cropped media control
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'example_default_cropped_image',
	   array(
	      'label' => __( 'Default Cropped Image Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'This is the description for the Cropped Image Control', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      'flex_width' => false, // Optional. Default: false
	      'flex_height' => true, // Optional. Default: false
	      'width' => 800, // Optional. Default: 150
	      'height' => 400, // Optional. Default: 150
	      'button_labels' => array( // Optional.
	         'select' => __( 'Select Image', 'azarahealthcare' ),
	         'change' => __( 'Change Image', 'azarahealthcare' ),
	         'remove' => __( 'Remove', 'azarahealthcare' ),
	         'default' => __( 'Default', 'azarahealthcare' ),
	         'placeholder' => __( 'No image selected', 'azarahealthcare' ),
	         'frame_title' => __( 'Select Image', 'azarahealthcare' ),
	         'frame_button' => __( 'Choose Image', 'azarahealthcare' ),
	      )
	   )
	) );

	// Add a date and time setting
	$wp_customize->add_setting( 'example_date_time',
	   array(
	      'default' => '2020-08-28 16:30:00',
	      //'transport' => 'refresh',
	      'sanitize_callback' => 'skyrocket_date_time_sanitization'
	   )
	);

	// Add a date and time control
	$wp_customize->add_control( new WP_Customize_Date_Time_Control( $wp_customize, 'example_date_time',
	   array(
	      'label' => __( 'Default Date Control', 'azarahealthcare' ),
	      'description' => esc_html__( 'This is the Date Time Control. It also has Max and Min years set.', 'azarahealthcare' ),
	      'section' => 'default_controls_section',
	      //'include_time' => true, // Optional. Default: true
	      //'allow_past_date' => true, // Optional. Default: true
	      //'twelve_hour_format' => true, // Optional. Default: true
	      //'min_year' => '2010', // Optional. Default: 1000
	      //'max_year' => '2025' // Optional. Default: 9999
	   )
	) );

}
add_action( 'customize_register', 'example_customize_register' );


/**************************************************
	** Theme-specific Customizations **
**************************************************/

function azarahealthcare_customize_register( $wp_customize ) {

	// Add all Customizer code (i.e. Panels, Sections, Settings & Controls) here...

	// Add a color setting
	$wp_customize->add_setting( 'footer_color',
   	array(
	    'default' => '#f9fafc',
	    'sanitize_callback' => 'sanitize_hex_color',
   	)
	);

	// Add a color control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color',
	   	array(
	      'label' => __( 'Footer Color', 'azarahealthcare' ),
	      'section' => 'colors',
	      'capability' => 'edit_theme_options',
		  )
		)
	);

}
add_action( 'customize_register', 'azarahealthcare_customize_register' );
