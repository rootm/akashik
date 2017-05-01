<?php

/* Adding admin page function*/
$page_title='Akashik Admin';

function add_adminPage(){
	add_menu_page( $page_title, 'Admin', 'manage_options', 'akashik-admin', 'akashik_createPage', '', 110 );
}

add_action( 'admin_menu', 'add_adminPage');

function add_adminPage(){
	
}