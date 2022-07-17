<?php 
if( function_exists('acf_add_options_page') ) {
acf_add_options_page(array(
'page_title'  => 'Website Details',
'menu_title'  => 'Website Details',
'menu_slug'   => 'actuallandscaping-user-settings',
'capability'  => 'edit_posts',
'redirect'    => true
));

acf_add_options_sub_page(array(
'page_title'  => 'Contact Info',
'menu_title'  => 'Contact Info',
'parent_slug' => 'actuallandscaping-user-settings',
)); 
}
?>
<?php
register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'Knee Joint Clinic' ),
				'footer'  => __( 'Secondary menu', 'Knee Joint Clinic' ),
			)
		);
?>
<?php add_theme_support( 'post-thumbnails' ); ?>