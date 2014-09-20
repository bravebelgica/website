<?php
/**
 * Loads the CC environment and template.
 *
 * @package CC
 */

if ( !isset($cc_did_header) ) {

	$cc_did_header = true;

	require_once( dirname(__FILE__) . '/cc-load.php' );

	#coc();
	#require_once( ABSPATH . WPINC . '/template-loader.php' );

}
$content = $_REQUEST['content'];
if ($content == '')  $content = 'mainview';


require_once( dirname(__FILE__) . '/cc_header.php' );
require_once( dirname(__FILE__) . '/cc_login.php' );

require_once( dirname(__FILE__) . '/cc_sidebar.php' );
require_once( dirname(__FILE__) . '/cc_' . $content . '.php' );

require_once( dirname(__FILE__) . '/cc_footer.php' );

