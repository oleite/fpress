<?php
/*
	===================
		ADMIN PAGE
	===================
*/

function fpress_add_admin_page(){

	//Gera a página de administração 'FPress Theme'
	add_menu_page('Opções do tema FPress', 'FPress Theme', 'manage_options', 'fpress_admin', 'fpress_theme_create_page', 'dashicons-admin-customizer', 110);

	//Gera as subpáginas de administração
	add_submenu_page('fpress_admin', 'Opções do tema FPress', 'Configurações', 'manage_options', 'fpress_admin', 'fpress_theme_settings_page');
	add_submenu_page('fpress_admin', 'Opções CSS FPress', 'CSS customizável', 'manage_options', 'fpress_admin_css', 'fpress_theme_settings_page');

	//Ativar configurações customizadas
	add_action('admin_init', 'fpress_custom_settings');

}
add_action('admin_menu', 'fpress_add_admin_page');

function fpress_custom_settings(){
	register_setting('fpress-settings-group', 'cor_base');
	add_settings_section('fpress-scheme-options', 'Scheme Options', 'fpress_scheme_options', 'fpress_admin');
	add_settings_field('cor-base', 'Cor Base', 'cor_base', 'fpress_admin', 'fpress-scheme-options');
}

function fpress_scheme_options(){
	echo 'Customize o esquema de cores';
}

function cor_base(){
	$corBase = esc_attr( get_option('cor_base') );
	echo '<input type="text" name="cor_base" value="'.$corBase.'" placeholder="ex.: #333333" />'.' <b style="background-color: '.$corBase.'; color: transparent">current</b>';
}


function fpress_theme_create_page(){
	require_once(get_template_directory() . '/inc/templates/fpress-admin.php');
}

function fpress_theme_settings_page(){
	
}