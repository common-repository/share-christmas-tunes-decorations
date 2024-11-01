<?php

class WPCHTS_gky_Christmas {

	
	protected $loader;
	protected $plugin_name;
	protected $version;

	public function __construct() {

		$this->plugin_name = 'WP_Christmas';
		$this->version = '1.0.0';
		$this->load_dependencies();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/wpchts_gky-load.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/wpchts_gky-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/wpchts_gky-load-public.php';

		$this->loader = new WPCHTS_gky_Christmas_Load();

	}

	private function define_admin_hooks() {

		$plugin_admin = new WPCHTS_gky_Christmas_admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	private function define_public_hooks() {

		$plugin_public = new WPCHTS_gky_public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	public function run() {
		$this->loader->run();
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}

	public function get_loader() {
		return $this->loader;
	}

	public function get_version() {
		return $this->version;
	}

}
