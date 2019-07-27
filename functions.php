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
	function wti_loginout_menu_link( $items, $args ) {
		if ($args->theme_location == 'primary') {
		if (is_user_logged_in()) {
		$items .= '<li class="right"><a href="'. wp_logout_url( get_permalink() ) .'">Logout</a></li>'; // 로그아웃
		} else {
		$items .= '<li class="right"><a href="'. wp_login_url(get_permalink()) .'">Login</a></li>'; // 로그인
		}
		}
		return $items;
		}
?>

