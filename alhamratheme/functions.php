<?php 

	require_once 'navwalker.php';
	
	function rc_theme_script_css(){
		wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');

		wp_enqueue_style('bootstrap');

		wp_register_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js');


		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs');
	}
	add_action('wp_enqueue_scripts','rc_theme_script_css');

	function rc_theme_initial(){

		add_theme_support('title-tagline');
		add_theme_support('custom-header');
		add_theme_support('custom-background');

		load_theme_textdomain('rctheme',get_template_directory_uri().'/languages');

		register_nav_menus(array(
			'main_menu' =>__('Main Menu','rctheme'),
			));
	}
	add_action('after_setup_theme','rc_theme_initial');

	function rc_theme_sidebars(){

		register_sidebar(array(

			'name'=>__('Left Sidebar','rctheme'),
			'id'=>'left_sidebar',
			'description'=>__('This is appear on default page template','rctheme'),
			'before_title'=>'<h3 class="title">',
			'after_title'=>'</h3>',
			'before_widget'=>'<div class="leftnav">',
			'after_widget'=>'</div>',
			));
	}
	add_action('widgets_init','rc_theme_sidebars');

	function details($n){

		$con = explode(" ", get_the_content());
		$lesscon = array_slice($con, 0,$n);
		echo implode(" ", $lesscon);

	}

 ?>