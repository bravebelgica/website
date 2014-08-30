<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the coc-config.php file. The coc-config.php
 * file will then load the coc-settings.php file, which
 * will then set up the COC environment.
 * @internal This file must be parsable by PHP4.
 *
 * @package COC
 */

/** Define ABSPATH as this file's directory */
define( 'CC_ABSPATH', dirname(__FILE__) . '/' );

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );


if ( file_exists( CC_ABSPATH . 'cc-config.php') ) {
	require_once( CC_ABSPATH . 'cc-config.php' );

} else {
	//TODO
}

