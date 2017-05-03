<?php
/**
 * Plugin Name: Shortcode Login Form
 * Plugin URI:
 * Description: Create shortcode for add login form in pages
 * Author: leobaiano
 * Author URI: http://leobaiano.com.br
 * Version: 1.0.0
 * License: GPLv2 or later
 * Text Domain: lb-slf
 * Domain Path: /languages/
 */
function lb_shortcode_login_form( $atts ) {
	global $current_user;
	wp_get_current_user();
	$defaults = array(
		'message_logged'	=> __( 'Logged in!', 'lb-slf' ),
		'label_username'	=> __( 'Username', 'lb-slf' ),
		'label_password'	=> __( 'Password', 'lb-slf' ),
		'label_remember'	=> __( 'Remember Me', 'lb-slf' ),
		'label_log_in'		=> __( 'Log In', 'lb-slf' ),
	);
	$atts = shortcode_atts( $defaults, $atts, 'lb-login-form' );
	$atts['echo'] = true;

	if ( is_user_logged_in() )
	return '<p>' . get_avatar( $current_user->ID, 26 ) . ' <span>' . $current_user->display_name . '</span> <a href="' . wp_logout_url(get_permalink()) . '">Logout</a></p>';
	else
	return wp_login_form( $atts );
}
add_shortcode( 'lb-login-form', 'lb_shortcode_login_form' );