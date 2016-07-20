<?php

Class WP_ENV_COLOR_SWITCH{
	

	var $env_colours = array(
		"dev" => "coffee",
		"staging" => "ectoplasm",
	);

	public function __construct(){
		if( !defined('WP_ENV') ){
			$this->admin_error();
			return $this;
		}


		add_filter('get_user_option_admin_color', [$this, 'change_admin_color'] );
		
	}


	private function admin_error(){
		add_action( 'admin_notices', array($this, 'error_wp_env_not_defined') );
	}


	public function error_wp_env_not_defined() {
	    ?>
	    <div class="notice notice-error is-dismissible">
	        <p><?php _e( 'WP_ENV is not defined', 'sample-text-domain' ); ?></p>
	    </div>
	    <?php
	}

	public function change_admin_color($result) {

		$this->env_colours = apply_filters( 'wp_env_colours', $this->env_colours );

		// skip on change, leave it upto the user
		if(WP_ENV == "production"){
			return false;
		}

		return $this->env_colours[WP_ENV];
	}


}


$wpenv_cs = new WP_ENV_COLOR_SWITCH();