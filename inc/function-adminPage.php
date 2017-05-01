<?php

/* Adding admin page function*/
$page_title='Akashik Admin';

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
	register_setting( 'theme-settings', 'main_title');
	register_setting( 'theme-settings', 'sub_title');
	register_setting( 'theme-settings', 'video1');
	register_setting( 'theme-settings', 'video2');
	register_setting( 'theme-settings', 'video3');

	add_settings_section( 'main-settings', 'Main Settings', 'mainSettings', 'akashik-admin' );

	add_settings_field( 'site-name', 'Main Title', 'set_MainTitle', 'akashik-admin','main-settings' );
	add_settings_field( 'site-subTitle', 'Sub Title', 'set_subTitle', 'akashik-admin','main-settings' );
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