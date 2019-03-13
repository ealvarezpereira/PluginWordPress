<?php
/*
Plugin Name: LePague Plugin
Plugin URI:  http://www.lepague.com
Description: Este es un plugin desarrollado por LePague Inc.
Version:     1.0
Author:      Quique 
Author URI:  http://twitter.com/Kyque_
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/


function twitter_shortcodes_init(){
  function twitter_shortcode($atts){
    
    // Attributes
	  $atts = shortcode_atts(
		array(
			'url' => 'google.es',
		),
		$atts
	  );
    
    
    // do something to $content
    $content = "
    <blockquote class=\"twitter-tweet\" data-lang=\"es\">
    <a href= ".$atts['url'].">Esto es una referencia a twitter</a>
    </blockquote>
	<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
";

    return $content;
  }
  add_shortcode('tweet', 'twitter_shortcode');
}
add_action('init', 'twitter_shortcodes_init');
?>