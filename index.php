
<?php
/**
 * Loads the COC environment and template.
 *
 * @package COC
 */

if ( !isset($coc_did_header) ) {

	$coc_did_header = true;

	require_once( dirname(__FILE__) . '/coc-load.php' );

	#coc();
	#require_once( ABSPATH . WPINC . '/template-loader.php' );

}

require_once( dirname(__FILE__) . '/main.php' );
