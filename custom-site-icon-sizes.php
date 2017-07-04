<?php
defined( 'ABSPATH' ) or die( "Nothing to see!" );
/**
 * Plugin Name:       Custom site icon sizes
 * Description:       Adds custom site icon sizes of 57px, 60px, 72px, 76px, 114px, 120px, 144px, 152px, 96px, and 16px.
 * Version:           1.0.1
 * Author:            Florian Brinkmann
 * Author URI:        http://florianbrinkmann.de
 * Plugin URI:        https://github.com/FlorianBrinkmann/custom-site-icon-sizes
 * GitHub Plugin URI: https://github.com/FlorianBrinkmann/custom-site-icon-sizes
 */
function csiz_custom_site_icon_size( $sizes ) {

	array_push( $sizes, 57, 60, 72, 76, 114, 120, 144, 152, 96, 16 );

	return $sizes;
}
add_filter( 'site_icon_image_sizes', 'csiz_custom_site_icon_size' );

function csiz_custom_site_icon_tag( $meta_tags ) {
	array_push( $meta_tags,
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="57x57" />', esc_url( get_site_icon_url( 57 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="60x60" />', esc_url( get_site_icon_url( 60 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="72x72" />', esc_url( get_site_icon_url( 72 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="76x76" />', esc_url( get_site_icon_url( 76 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="114x114" />', esc_url( get_site_icon_url( 114 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="120x120" />', esc_url( get_site_icon_url( 120 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="144x144" />', esc_url( get_site_icon_url( 144 ) ) ),
		sprintf( '<link rel="apple-touch-icon" href="%s" sizes="152x152" />', esc_url( get_site_icon_url( 152 ) ) ),
		sprintf( '<link rel="icon" href="%s" sizes="96x96" />', esc_url( get_site_icon_url( 96 ) ) ),
		sprintf( '<link rel="icon" href="%s" sizes="16x16" />', esc_url( get_site_icon_url( 16 ) ) )
	);

	return $meta_tags;
}
add_filter( 'site_icon_meta_tags', 'csiz_custom_site_icon_tag' );
