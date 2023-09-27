<?php
/*
 * Plugin Name: yt輪播輔助
 * Description: yt輪播輔助
 * Author: nekoto
 * Plugin URI:https://nekoto-technique.com/
 * Version:1.0
 */
if(!defined('NVC_DIR')){
    define('NVC_DIR', dirname(__FILE__));
}

define('NVC_URL', plugin_dir_url(__FILE__));

function LoadNVC_Class(){
    include NVC_DIR.'/includes/class_video-carousel-shortcode.php';
    $GLOBALS['NVCShortcode']=NVCShortcode();
}
function NVCShortcode(){
    return NVC_Shortcode::instance();
}

add_action('plugins_loaded', 'LoadNVC_Class');
?>