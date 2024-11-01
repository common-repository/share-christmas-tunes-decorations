<?php


class WPCHTS_gky_public {

	private $plugin_name;

	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpchts_gky-load-style.min.css', array(), $this->version, 'all' );
		wp_register_style('xmas-decoration-style', plugins_url('css/additional.css', __FILE__));
		wp_enqueue_style('xmas-decoration-style');

	}
	public function enqueue_scripts() {


	wp_register_script('xmas-decoration-yuiloader', plugins_url('js/yuiloader-dom-event.js', __FILE__));
	wp_enqueue_script('xmas-decoration-yuiloader');

	wp_register_script('xmas-decoration-holiday-bells', plugins_url('js/holiday_bells.js', __FILE__));
	wp_enqueue_script('xmas-decoration-holiday-bells');
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpchts_gky.min.js', array( 'jquery' ), $this->version, false );
		add_action( 'wp_footer', function(){
			include('partials/wpchts_gky-load-public-display.php');
		}, 1005);
	}

}