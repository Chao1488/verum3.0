<?php

add_action('wp_enqueue_scripts', 'style_theme' );
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('wp_enqueue_scripts' , 'jquery_lib');
add_action('wp_enqueue_scripts', 'load_bootstrap');
add_action('wp_footer', 'footer_style');




function jquery_lib(){
  wp_deregister_script('jquery-core');
  wp_register_script('jquery-core' , 'https://code.jquery.com/jquery-3.3.1.min.js');
 	wp_enqueue_script( 'jquery');


    wp_register_script('TweenMax.min', 'https://tympanus.net/Development/ProximityFeedback/js/TweenMax.min.js', array('jquery'));
    wp_enqueue_script('TweenMax.min');

    wp_register_script('nearby','https://tympanus.net/Development/ProximityFeedback/js/nearby.js', array('jquery'));
    wp_enqueue_script('nearby');

    wp_register_script('charming.min','https://tympanus.net/Development/ProximityFeedback/js/charming.min.js', array('jquery'));
    wp_enqueue_script('charming.min');

    wp_register_script('bootstrap.min','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('bootstrap.min');

    wp_register_script('popper.min','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
    wp_enqueue_script('popper.min');

    wp_register_script('common', get_template_directory_uri() . '/assets/js/common.js', array('jquery'),null, true);
    wp_enqueue_script('common');


    wp_register_script('feedback-modal', get_template_directory_uri() . '/assets/js/feedback-modal.js', array('jquery'),null, true);
    wp_enqueue_script('feedback-modal');

    wp_register_script('investor-modal', get_template_directory_uri() . '/assets/js/investor-modal.js', array('jquery'),null, true);
    wp_enqueue_script('investor-modal');


    wp_register_script('infinite-decoration', get_template_directory_uri() . '/assets/js/infinite-decoration.js', array('jquery','TweenMaxMin'),null, true);
    wp_enqueue_script('infinite-decoration');


    wp_register_script('photo-video-modal', get_template_directory_uri() . '/assets/js/photo-video-modal.js', array('jquery'),null, true);
    wp_enqueue_script('photo-video-modal');

    wp_register_script('investor-modal-single', get_template_directory_uri() . '/assets/js/investor-modal-single.js', array('jquery','onclick'),null, false);
    wp_enqueue_script('investor-modal-single');

}

function theme_register_nav_menu(){
 register_nav_menu('top', 'Primary Menu');
}

function style_theme(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('material-design-iconic-font.min','https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css');
  wp_enqueue_style('hamburgers', get_template_directory_uri() . '/assets/css/hamburgers.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style('main.min', get_template_directory_uri() . '/assets/css/main.min.css'  );
}

function load_bootstrap(){
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
}


function footer_style(){
  wp_enqueue_style('main.min', get_template_directory_uri() . '/assets/css/main.min.css' );
}

/*
ACF

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c599114f2aa9',
	'title' => 'Marketing text',
	'fields' => array(
		array(
			'key' => 'field_5c599155cae67',
			'label' => 'Marketing',
			'name' => 'cm_mrk',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c5991bacae68',
			'label' => 'Text',
			'name' => 'cm_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c59949d28d83',
			'label' => 'Marketing1',
			'name' => 'marketing1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c5994bc28d84',
			'label' => 'Text1',
			'name' => 'text1',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c5994c828d85',
			'label' => 'Marketing2',
			'name' => 'marketing2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c5994da28d86',
			'label' => 'Text2',
			'name' => 'text2',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'marketing-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c59b04fcf559',
	'title' => 'Main_page',
	'fields' => array(
		array(
			'key' => 'field_5c59b058f32e0',
			'label' => 'Main_page',
			'name' => 'main_page',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c59b0b1f32e1',
			'label' => 'Mainpage text',
			'name' => 'mainpage_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c59b685754f3',
			'label' => 'Mainpage more',
			'name' => 'mainpage_more',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c646f44a1f8a',
			'label' => 'Mainpage scroll',
			'name' => 'mainpage_scroll',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c69a6f627e6e',
			'label' => 'Mainpage item-title',
			'name' => 'mainpage_item_title',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c69aafb6fed3',
			'label' => 'Mainpage row',
			'name' => 'mainpage_row',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'front-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>
