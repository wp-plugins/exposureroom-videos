<?php

/*
Plugin Name: ExposureRoom Video Embed
Plugin URI: http://exposureroom.com/thirdparty/plugins/wordpress
Description: Allows the user to embed ExposureRoom videos using a shortcode ([xr_video]).
Author: Shiv Kumar
Version: 1.0
Author URI: http://exposureroom.com/
License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
*/

ini_set('extension', php_http.dll);

class exposureroom_video_embed {

    function shortcode($atts, $content=null) {
    
      extract(shortcode_atts(array(
			  'id' 	=> '',
			  'width' 	=> '646',
			  'height' 	=> '396',
		    ), $atts));

	    $attributes = '';
	    foreach ($atts as $k=>$v)
		    $attributes .= "$k=$v&";

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "http://exposureroom.com/WordPressShortCodeHandler.aspx?$attributes");
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $output = curl_exec($ch);
      curl_close($ch);
      return $output;      
    }
}

add_shortcode('xr_video', array('exposureroom_video_embed', 'shortcode'));

?>
