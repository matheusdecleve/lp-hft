<?php
class Pizzani
{
	function activation()
	{
	}

	function deactivation()
	{
		unregister_nav_menu('main-menu');
	}

	static function init()
	{
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('comment_text_rss', 'wp_staticize_emoji');
		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

		add_theme_support('post-thumbnails');

		add_action('wp_enqueue_scripts', array('Pizzani', 'custom_scripts'));

		// add_filter('show_admin_bar', '__return_false');
		add_filter('body_class', array('Pizzani', 'my_body_classes'));
		add_filter('admin_footer_text', array('Pizzani', 'remove_footer_admin'));
		add_filter('login_headerurl', array('Pizzani', 'my_login_logo_url'));
		add_filter('login_headertext', array('Pizzani', 'my_login_logo_url_title'));
		add_filter('excerpt_length', array('Pizzani', 'custom_excerpt_length'), 10);
		add_filter('excerpt_more', array('Pizzani', 'custom_excerpt_more'), 10);
	}

	static function custom_scripts()
	{
		wp_register_style('bootstrap', THEME_URL . 'assets/css/bootstrap.css', null, null, 'all');
		wp_register_style('owlcarousel', THEME_URL . 'assets/css/owlcarousel/owl.carousel.min.css', null, null, 'all');
		wp_register_style('owlcarouseltheme', THEME_URL . 'assets/css/owlcarousel/owl.theme.default.min.css', null, null, 'all');
		wp_register_style('styles', THEME_URL . 'assets/css/styles.css', null, null, 'all');		
		wp_register_style('animate', THEME_URL . 'assets/css/animate.min.css', null, null, 'all');		

		wp_enqueue_style('bootstrap');
		wp_enqueue_style('owlcarousel');
		wp_enqueue_style('owlcarouseltheme');
		wp_enqueue_style('styles');
		wp_enqueue_style('animate');

		wp_register_script('bootstrapbundle', THEME_URL . 'assets/js/bootstrap.bundle.min.js', array(), '0.1.', true);
		wp_register_script('popper', THEME_URL . 'assets/js/popper.js', array(), '0.1.', true);
		wp_register_script('bootstrap', THEME_URL . 'assets/js/bootstrap.min.js', array(), '0.1.', true);
		wp_register_script('jquery', THEME_URL . 'assets/js/jquery.min.js', array(), '0.1', true);
		wp_register_script('owl', THEME_URL . 'assets/js/owl.carousel.min.js', array(), '0.1', true);
		wp_register_script('wow', THEME_URL . 'assets/js/wow.min.js',null, null, 'all');
		wp_register_script('main', THEME_URL . 'assets/js/main.js',null, null, 'all');

		wp_enqueue_script('bootstrapbundle');
		wp_enqueue_script('popper');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('jquery');
		wp_enqueue_script('owl');
		wp_enqueue_script('wow');
		wp_enqueue_script('main');
		
		wp_localize_script('functions', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));		
	}

	static function custom_cpts()
	{		
		$attr = array(
			'public'        => true,
			'show_in_admin_bar'   => true,
			'show_ui' => true,
			'menu_position'       => 21,
			'menu_icon'           => 'dashicons-table-row-after',
			'has_archive'   => false,
			'rewrite'		=> array('slug' => 'telhas', 'with_front' => false),
			'supports'      => array('title', 'editor', 'custom-fields', 'thumbnail'),
			'labels'        => array(
				'name'                  => 'Telhas',
				'add_new'               => 'Adicionar Telha',
				'add_new_item'          => 'Adicionar nova Telha',
				'edit_item'             => 'Editar Telha',
				'new_item'              => 'Nova Telha',
				'view_item'             => 'Visualizar Telhas',
				'search_items'          => 'Pesquisar Telhas',
				'not_found'             => 'Nenhuma Telha foi encontrado',
				'not_found_in_trash'    => 'Nenhuma Telha foi encontrado na lixeira',
				'all_items'             => 'Todas as Telhas'
			)
		);
		register_post_type('telhas', $attr);

		$attr = array(
			'public'        => true,
			'show_in_admin_bar'   => true,
			'show_ui' => true,
			'menu_position'       => 21,
			'menu_icon'           => 'dashicons-table-row-after',
			'has_archive'   => false,
			'rewrite'		=> array('slug' => 'perfis', 'with_front' => false),
			'supports'      => array('title', 'editor', 'custom-fields', 'thumbnail'),
			'labels'        => array(
				'name'                  => 'Perfis',
				'add_new'               => 'Adicionar Perfis',
				'add_new_item'          => 'Adicionar novo Perfis',
				'edit_item'             => 'Editar Perfis',
				'new_item'              => 'Novo Perfis',
				'view_item'             => 'Visualizar Perfis',
				'search_items'          => 'Pesquisar Perfis',
				'not_found'             => 'Nenhum Perfis foi encontrado',
				'not_found_in_trash'    => 'Nenhum Perfis foi encontrado na lixeira',
				'all_items'             => 'Todos os Perfis'
			)
		);
		register_post_type('perfis', $attr);
	}


	static function my_body_classes($classes)
	{
		global $post;
		$page_name = '';

		if (!empty($post)) {
			$page_name = "pg-" . $post->post_name;
		}

		if (is_front_page()) {
			$classes[] = 'home';
		}

		if (is_page('buscar')) {
			$classes[] = 'search-results';
		}

		$classes[] = $page_name;
		return $classes;
	}

	static function remove_footer_admin()
	{
		echo "Pizzani Marketing";
	}

	static function my_login_logo_url()
	{
		return SITE_URL;
	}

	static function my_login_logo_url_title()
	{
		return SITE_NAME . " - Clique para voltar ao site";
	}


	static function custom_excerpt_length($length)
	{
		return 20;
	}

	static function custom_excerpt_more($more)
	{
		return ' ...';
	}

}

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Gerenciador de conteúdos do site',
		'menu_title'	=> 'Gerenciador de conteúdos',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

register_activation_hook(__FILE__, array('Pizzani', 'activation'));
register_deactivation_hook(__FILE__, array('Pizzani', 'deactivation'));

add_action('init', array('Pizzani', 'custom_cpts'));
add_action('after_setup_theme', array('Pizzani', 'init'));

define('SITE_URL', get_home_url() . '/');
define('THEME_URL', get_bloginfo('template_url') . '/');
define('SITE_NAME', get_bloginfo('name'));
define('SITE_DESC', get_bloginfo('description'));