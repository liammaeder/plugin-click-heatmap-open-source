<?php
/**
 * Click Heatmap 辅助工具函数。
 *
 * @package Click_Heatmap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function click_heatmap_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
