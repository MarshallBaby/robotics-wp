<?php
/**
 * robotics Theme Customizer
 *
 * @package robotics
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function robotics_customize_register( $wp_customize ) {
	$wp_customize->add_section('titlecard', array(
		'title'=> 'Титульная карточка',
		'priority'=>10
	));
	$wp_customize->add_setting('titlecard_background', array(
		'default'=>'',
		'transport'=>'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'titlecard_background', array(
		"label"=>"Фоновое изображение",
		"section"=>"titlecard",
		"settings"=>'titlecard_background',
		'descripton'=>'Фоновое изображение карточки'
	)));
}
add_action( 'customize_register', 'robotics_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function robotics_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function robotics_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function robotics_customize_preview_js() {
	wp_enqueue_script( 'robotics-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'robotics_customize_preview_js' );
