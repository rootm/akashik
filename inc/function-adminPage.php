<?php

/* Adding admin page function*/
$page_title='Akashik Admin';

function load_adminScript(){
	wp_register_script( 'akashik-adminScipt', get_template_directory_uri().'/js/admin.js', array('jquery'), '1.0.6', true );
	wp_enqueue_script( 'akashik-adminScipt');
	wp_enqueue_media();
}

add_action( 'admin_enqueue_scripts', 'load_adminScript' );


function add_adminPage(){
	add_menu_page( $page_title, 'Akashik', 'manage_options', 'akashik-admin', 'akashik_createPage', '', 110 );

	add_submenu_page( 'akashik-admin', $page_title, 'Settings', 'manage_options', 'akashik-admin', 'akashik_settingsPage' );

	//custom settings
	add_action( 'admin_init', 'customSettings');

}

add_action( 'admin_menu', 'add_adminPage');

function akashik_createPage(){
	require_once(get_template_directory().'/inc/template/admin-template.php');
}

function akashik_settingsPage(){

}

function customSettings(){
	//registeing need settings
	register_setting( 'theme-settings', 'main_title');
	register_setting( 'theme-settings', 'sub_title');
	register_setting( 'theme-settings', 'video1');
	register_setting( 'theme-settings', 'video2');
	register_setting( 'theme-settings', 'video3');
	register_setting( 'theme-settings', 'pic');
	//add settings section
	add_settings_section( 'main-settings', 'Main Settings', 'mainSettings', 'akashik-admin' );
	add_settings_section( 'video-settings', 'Video Settings', 'mainSettings', 'akashik-admin' );
	//adding settings
	add_settings_field( 'site-name', 'Main Title', 'set_MainTitle', 'akashik-admin','main-settings' );
	add_settings_field( 'site-subTitle', 'Sub Title', 'set_subTitle', 'akashik-admin','main-settings' );
	add_settings_field( 'profile-pic', 'Profile Picture', 'set_pic', 'akashik-admin','main-settings' );
	//adding video settings
	add_settings_field( 'site-video1', 'Popular Questions', 'set_video1', 'akashik-admin','video-settings' );
	add_settings_field( 'site-video2', 'Client Story', 'set_video2', 'akashik-admin','video-settings' );
	add_settings_field( 'site-video3', 'Crystal Singing Bowl', 'set_video3', 'akashik-admin','video-settings' );

}

function mainSettings(){

}


function set_MainTitle(){
	$mainTitle=esc_attr(get_option( 'main_title' ) );
	echo '<input type="text" name="main_title" value="'.$mainTitle.'" placeholder="Web site title"/>';

}

function set_subTitle(){
	$subTitle=esc_attr(get_option( 'sub_title' ) );
	echo '<input type="text" name="sub_title" value="'.$subTitle.'" placeholder="Tagline"/>';

}

function set_video1(){
	$video1=esc_attr(get_option( 'video1' ) );
	echo '<input type="text" name="video1" value="'.$video1.'" placeholder="URL"/>';

}

function set_video2(){
	$video2=esc_attr(get_option( 'video2' ) );
	echo '<input type="text" name="video2" value="'.$video2.'" placeholder="URL"/>';
}

function set_video3(){
	$video3=esc_attr(get_option( 'video3' ) );
	echo '<input type="text" name="video3" value="'.$video3.'" placeholder="URL"/>';

}

function set_pic(){
	$pic=(get_option( 'pic' ) );
	echo '<div id="pic-container" style="background-image:url('.$pic.');height:200px;width:200px;background-size:contain;background-position: center;"></div><br><input type="button" class="button button_secondary"  value="Upload Image" id="upload-button"/><input type="hidden" name="pic" value="'.$pic.'" id="picval"/> ';
}