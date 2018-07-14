<?php
	if( ! function_exists( 'wpblog_setup' ) ) :

		function wpblog_setup(){

			load_theme_textdomain( 'wp-blog' );

			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );

			/*register thumnail post image*/
			add_theme_support( 'post-thumbnails' );

			/*croping images*/
			set_post_thumbnail_size( 825, 510, true);

			register_nav_menus( array(
				'primary' 	=> __( 'Menu Atas', 'wp-blog' ),
				'social'	=> __( 'Menu Sosial Media', 'wp-blog' )
			) );

			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list',
				'gallery', 'caption'
			) );

			add_theme_support( 'post-formats', array(
				'aside', 'image', 'video', 'quote', 'link',
				'gallery', 'status', 'audio', 'chat'
			) );

			add_theme_support( 'custom-logo', array(
				'height'		=> 20,
				'width'			=> 50,
				'flex-height'	=> true
			) );

		}

	endif;
	add_action( 'after_setup_theme', 'wpblog_setup' );

	/*membuat widget sidebar kanan*/
	function wpblog_widgets_init() {
		register_sidebar( array(
			'name'			=> __( ' Sidebar Kanan ', 'wp-blog' ),
			'id'			=> 'sidebar-1',
			'description'	=> __( 'Tambahkan widget disini untuk menampilkannya di sebelah kanan', 'wp-blog' ),
			'before_widget'	=> '<div class="panel panel-primary sidebar">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="panel-heading"><h3 class="panel-title">',
			'after_title'	=> '</h3></div>'
		) );
	}
	add_action( 'widgets_init', 'wpblog_widgets_init' );

	/*memanggil file javascript*/
	function wpblog_enqueue(){
		wp_enqueue_script( 'bootstrap', 
			get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') , '3.2', true );

		wp_enqueue_script( 'jquerys' , get_template_directory_uri() . '/js/jquery.min.js', array() , 'v1.11.2', true);
	}
	add_action( 'wp_footer', 'wpblog_enqueue' );

?>