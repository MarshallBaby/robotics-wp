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
function robotics_customize_register($wp_customize)
{
	$wp_customize->add_section('titlecard', array(
		'title' => 'Титульная карточка',
		'priority' => 10
	));
	$wp_customize->add_setting('titlecard_background', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'titlecard_background', array(
		"label" => "Фоновое изображение",
		"section" => "titlecard",
		"settings" => 'titlecard_background',
		'descripton' => 'Фоновое изображение карточки'
	)));
	
	$wp_customize->add_setting('card_telegram_url', array(
		'default' => '#',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'card_telegram_url', array(
		"label" => "Telegram URL",
		"section" => "titlecard",
		"settings" => 'card_telegram_url',
		"type"=>"text"
	)));

	$wp_customize->add_setting('card_facebook_url', array(
		'default' => '#',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'card_facebook_url', array(
		"label" => "Facebook URL",
		"section" => "titlecard",
		"settings" => 'card_facebook_url',
		"type"=>"text"
	)));

	$wp_customize->add_setting('card_youtube_url', array(
		'default' => '#',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'card_youtube_url', array(
		"label" => "Youtube URL",
		"section" => "titlecard",
		"settings" => 'card_youtube_url',
		"type"=>"text"
	)));

	$wp_customize->add_setting('card_instagram_url', array(
		'default' => '#',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'card_instagram_url', array(
		"label" => "Instagram URL",
		"section" => "titlecard",
		"settings" => 'card_instagram_url',
		"type"=>"text"
	)));
	
	
	$wp_customize->add_setting('card_button_text', array(
		'default' => 'Наша деятельность',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'card_button_text', array(
		"label" => "Текст кнопки",
		"section" => "titlecard",
		"settings" => 'card_button_text',
		"type" => 'text',
	)));

	$wp_customize->add_section('projects', array(
		'title' => 'Проекты (титульник)',
		'priority' => 11
	));

	$wp_customize->add_setting('projects_descr', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'projects_descr', array(
		"label" => "Проекты подзаголовок",
		"section" => "projects",
		"settings" => 'projects_descr',
		"type" => 'textarea',
	)));

	$wp_customize->add_setting('projects_more_background', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'projects_more_background', array(
		"label" => "Все проекты фон",
		"section" => "projects",
		"settings" => 'projects_more_background',
		'descripton' => 'Фоновое изображение'
	)));

	$wp_customize->add_section('partners', array(
		'title' => 'Партнеры',
		'priority' => 12
	));

	$wp_customize->add_setting('parnters_howto_link', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parnters_howto_link', array(
		"label" => "Как стать п. ссылка",
		"section" => "partners",
		"settings" => 'parnters_howto_link',
		"type"=>"text"
	)));
	$wp_customize->add_setting('parnters_descr', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parnters_descr', array(
		"label" => "Подзаголовок",
		"section" => "partners",
		"settings" => 'parnters_descr',
		"type"=>"textarea"
	)));
	$wp_customize->add_section('customlogo', array(
		'title' => 'Логотип',
		'priority' => 9
	));
	$wp_customize->add_setting('customlogo_url', array(
		'default' => '',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customlogo_url', array(
		"label" => "Логотип",
		"section" => "customlogo",
		"settings" => 'customlogo_url',
		
	)));
}
add_action('customize_register', 'robotics_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function robotics_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function robotics_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function robotics_customize_preview_js()
{
	wp_enqueue_script('robotics-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'robotics_customize_preview_js');
