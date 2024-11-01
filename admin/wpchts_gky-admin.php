<?php

class WPCHTS_gky_Christmas_admin {

	private $plugin_name;

	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->initialise();
	}

	public function initialise(){
		add_action('admin_menu', function(){
			add_menu_page( 'Share Christmas', 'Share Christmas', 'manage_options', 'wpchts_gky_christmas_admin', array($this, 'options'), 'dashicons-star-filled' );
		});

	}

	public function options(){

		if(!empty($_POST)){

		$music_sg =	sanitize_text_field(esc_html( $_POST['music'] ));
		$image_fr =	sanitize_text_field(!empty($_POST['image_frame']));
		$chrm_ft =	sanitize_text_field(!empty( $_POST['font']));
		$decor_tp =	sanitize_text_field(esc_html($_POST['decoration_type']));



			update_option( 'wpchts_gky_music', 				!empty($music_sg) 												? 		 $music_sg 				  : 0 );
			update_option( 'wpchts_gky_image_frame',		$image_fr										? (int)$image_fr		  : 0 );
			update_option( 'wpchts_gky_font',					!empty($chrm_ft)													? (int)$chrm_ft					  : 0 );
			update_option( 'decoration_type', 				!empty($decor_tp) 												? 		 $decor_tp 				  : 0 );

		}

		include('partials/wpchts_gky-admin-display.php');
	}
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpchts_gky-admin.css', array(), $this->version, 'all' );
	}
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpchts_gky-admin.js', array( 'jquery' ), $this->version, false );
	}

}