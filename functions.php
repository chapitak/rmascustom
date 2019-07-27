<?php
  function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
  //이하 커스텀 포스트 전멘에 표시 
  add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
	function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
	$query->set( 'post_type', array( 'post', 'book', 'video', 'album' ) );
	return $query;
	}
	function themeprefix_show_cpt_archives( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
	$query->set( 'post_type', array(
	'post', 'nav_menu_item', 'book', 'video', 'album' ));
	return $query;
	}
	}
	add_filter( 'pre_get_posts', 'themeprefix_show_cpt_archives' );
	// Source: WP Beaches
	add_action( 'pre_amp_render_post', function( $post_id ) {
	    global $post;
	    $post = get_post( $post_id );
	} );	
	function acme_login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : get_permalink();
	}
	add_filter( 'login_redirect', 'acme_login_redirect', 10, 3 );
?>

