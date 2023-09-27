<?php
if(!class_exists('NVC_Shortcode')):
class NVC_Shortcode{

	public static $_instance=NULL;

	function __construct() {
		add_shortcode('nvc-temp', array($this, 'NVCShortCode'));
	}


	public function NVCShortCode($args){
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap_script', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js");
		wp_enqueue_script('bootstrap_script');
		wp_register_style('bootstrap_style',"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css");
		wp_enqueue_style('bootstrap_style');
		wp_register_style('fontawesome_style',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
		wp_enqueue_style('fontawesome_style');

		ob_start();

		$this->output_temp();
		
		$output =ob_get_clean();
		return $output;
	}

	function output_temp(){
		include NVC_DIR.'/templates/video-temp.php';
	}

	public static function instance(){
		if(is_null(self::$_instance))self::$_instance=new self();
		return self::$_instance;
	}
}
endif;