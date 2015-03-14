<?php
/**
 * @package bootville
 */
 
if ( ! function_exists('bvwp_option') ) {
	function bvwp_option($id, $fallback = false, $param = false ) {
		global $bvwp_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($bvwp_options[$id]) && $bvwp_options[$id] !== '' ) ? $bvwp_options[$id] : $fallback;
		if ( !empty($bvwp_options[$id]) && $param ) {
			$output = $bvwp_options[$id][$param];
		}
		return $output;
	}
}