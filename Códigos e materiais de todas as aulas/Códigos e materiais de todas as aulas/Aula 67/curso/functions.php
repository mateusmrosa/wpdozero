<?php 

// Incluindo os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function wpcurso_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Main Menu', 'wpcurso' ),
			'footer_menu' => __( 'Footer Menu', 'wpcurso' )
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );

	// Habilitando suporte à tradução
	$textdomain = 'wpcurso';
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

	// Suporte ao Gutenberg
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'wpcurso_config', 0 );

// Registrando Sidebars
add_action( 'widgets_init', 'wpcurso_sidebars' );
function wpcurso_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'wpcurso' ),
			'id' => 'sidebar-1',
			'description' => __( 'Sidebar to be used on Home Page', 'wpcurso'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Blog Sidebar', 'wpcurso'),
			'id' => 'sidebar-2',
			'description' => __( 'Sidebar to be used on Blog Page', 'wpcurso'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 1', 'wpcurso' ),
			'id' => 'services-1',
			'description' => __( 'First Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 2', 'wpcurso' ),
			'id' => 'services-2',
			'description' => __( 'Second Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 3', 'wpcurso' ),
			'id' => 'services-3',
			'description' => __( 'Third Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
	register_sidebar(
		array(
			'name' => __( 'Social Icons', 'wpcurso' ),
			'id' => 'social-media',
			'description' => __( 'Place your media icons here', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);					
}


