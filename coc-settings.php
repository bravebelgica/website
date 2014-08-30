<?php
/**
 * Used to set up and fix common variables and include
 * the CoC procedural and class library.
 *
 * Allows for some configuration in coc-config.php (see default-constants.php)
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package COC
 */

/**
 * Stores the location of the CoC directory of functions, classes, and core content.
 *
 * @since 0.2.0
 */
define( 'COCINC', 'coc-includes' );

// Include files required for initialization.
#require( ABSPATH . COCINC . '/load.php' );
#require( ABSPATH . COCINC . '/default-constants.php' );

/*
 * These can't be directly globalized in version.php. When updating,
 * we're including version.php from another install and don't want
 * these values to be overridden if already set.
 */
global $coc_version, $coc_db_version, $tinymce_version, $required_php_version, $required_mysql_version;
require( ABSPATH . COCINC . '/version.php' );

// Set initial default constants including coc_MEMORY_LIMIT, coc_MAX_MEMORY_LIMIT, coc_DEBUG, coc_CONTENT_DIR and coc_CACHE.
coc_initial_constants();

// Check for the required PHP version and for the MySQL extension or a database drop-in.
coc_check_php_mysql_versions();

// Disable magic quotes at runtime. Magic quotes are added using  later in coc-settings.php.
@ini_set( 'magic_quotes_runtime', 0 );
@ini_set( 'magic_quotes_sybase',  0 );

// calculates offsets from UTC.
date_default_timezone_set( 'UTC' );

// Turn register_globals off.
coc_unregister_GLOBALS();

// Standardize $_SERVER variables across setups.
coc_fix_server_vars();

// Check if we have received a request due to missing favicon.ico
coc_favicon_request();

// Check if we're in maintenance mode.
coc_maintenance();

// Start loading timer.
timer_start();

// Check if we're in coc_DEBUG mode.
coc_debug_mode();

// For an advanced caching plugin to use. Uses a static drop-in because you would only want one.
if ( COC_CACHE )
	COC_DEBUG ? include( COC_CONTENT_DIR . '/advanced-cache.php' ) : @include( COC_CONTENT_DIR . '/advanced-cache.php' );

// Define coc_LANG_DIR if not set.
coc_set_lang_dir();

// Load early WordPress files.
require( ABSPATH . COCINC . '/compat.php' );
require( ABSPATH . COCINC . '/functions.php' );
require( ABSPATH . COCINC . '/class-wp.php' );
require( ABSPATH . COCINC . '/class-wp-error.php' );
require( ABSPATH . COCINC . '/plugin.php' );
require( ABSPATH . COCINC . '/pomo/mo.php' );

// Include the wpdb class and, if present, a db.php database drop-in.
require_coc_db();

// Set the database table prefix and the format specifiers for database table columns.
$GLOBALS['table_prefix'] = $table_prefix;
coc_set_cocdb_vars();

// Start the WordPress object cache, or an external object cache if the drop-in is present.
coc_start_object_cache();

// Attach the default filters.
require( ABSPATH . COCINC . '/default-filters.php' );

// Initialize multisite if enabled.
if ( is_multisite() ) {
	require( ABSPATH . COCINC . '/ms-blogs.php' );
	require( ABSPATH . COCINC . '/ms-settings.php' );
} elseif ( ! defined( 'MULTISITE' ) ) {
	define( 'MULTISITE', false );
}

register_shutdown_function( 'shutdown_action_hook' );

// Stop most of WordPress from being loaded if we just want the basics.
if ( SHORTINIT )
	return false;

// Load the L10n library.
require_once( ABSPATH . COCINC . '/l10n.php' );

// Run the installer if WordPress is not installed.
coc_not_installed();

// Load most of WordPress.
require( ABSPATH . COCINC . '/class-wp-walker.php' );
require( ABSPATH . COCINC . '/class-wp-ajax-response.php' );
require( ABSPATH . COCINC . '/formatting.php' );
require( ABSPATH . COCINC . '/capabilities.php' );
require( ABSPATH . COCINC . '/query.php' );
require( ABSPATH . COCINC . '/date.php' );
require( ABSPATH . COCINC . '/theme.php' );
require( ABSPATH . COCINC . '/class-wp-theme.php' );
require( ABSPATH . COCINC . '/template.php' );
require( ABSPATH . COCINC . '/user.php' );
require( ABSPATH . COCINC . '/meta.php' );
require( ABSPATH . COCINC . '/general-template.php' );
require( ABSPATH . COCINC . '/link-template.php' );
require( ABSPATH . COCINC . '/author-template.php' );
require( ABSPATH . COCINC . '/post.php' );
require( ABSPATH . COCINC . '/post-template.php' );
require( ABSPATH . COCINC . '/revision.php' );
require( ABSPATH . COCINC . '/post-formats.php' );
require( ABSPATH . COCINC . '/post-thumbnail-template.php' );
require( ABSPATH . COCINC . '/category.php' );
require( ABSPATH . COCINC . '/category-template.php' );
require( ABSPATH . COCINC . '/comment.php' );
require( ABSPATH . COCINC . '/comment-template.php' );
require( ABSPATH . COCINC . '/rewrite.php' );
require( ABSPATH . COCINC . '/feed.php' );
require( ABSPATH . COCINC . '/bookmark.php' );
require( ABSPATH . COCINC . '/bookmark-template.php' );
require( ABSPATH . COCINC . '/kses.php' );
require( ABSPATH . COCINC . '/cron.php' );
require( ABSPATH . COCINC . '/deprecated.php' );
require( ABSPATH . COCINC . '/script-loader.php' );
require( ABSPATH . COCINC . '/taxonomy.php' );
require( ABSPATH . COCINC . '/update.php' );
require( ABSPATH . COCINC . '/canonical.php' );
require( ABSPATH . COCINC . '/shortcodes.php' );
require( ABSPATH . COCINC . '/class-wp-embed.php' );
require( ABSPATH . COCINC . '/media.php' );
require( ABSPATH . COCINC . '/http.php' );
require( ABSPATH . COCINC . '/class-http.php' );
require( ABSPATH . COCINC . '/widgets.php' );
require( ABSPATH . COCINC . '/nav-menu.php' );
require( ABSPATH . COCINC . '/nav-menu-template.php' );
require( ABSPATH . COCINC . '/admin-bar.php' );

// Load multisite-specific files.
if ( is_multisite() ) {
	require( ABSPATH . COCINC . '/ms-functions.php' );
	require( ABSPATH . COCINC . '/ms-default-filters.php' );
	require( ABSPATH . COCINC . '/ms-deprecated.php' );
}

// Define constants that rely on the API to obtain the default value.
// Define must-use plugin directory constants, which may be overridden in the sunrise.php drop-in.
coc_plugin_directory_constants();

$GLOBALS['coc_plugin_paths'] = array();

// Load must-use plugins.
foreach ( coc_get_mu_plugins() as $mu_plugin ) {
	include_once( $mu_plugin );
}
unset( $mu_plugin );

// Load network activated plugins.
if ( is_multisite() ) {
	foreach( coc_get_active_network_plugins() as $network_plugin ) {
		coc_register_plugin_realpath( $network_plugin );
		include_once( $network_plugin );
	}
	unset( $network_plugin );
}

/**
 * Fires once all must-use and network-activated plugins have loaded.
 *
 * @since 2.8.0
 */
do_action( 'muplugins_loaded' );

if ( is_multisite() )
	ms_cookie_constants(  );

// Define constants after multisite is loaded. Cookie-related constants may be overridden in ms_network_cookies().
coc_cookie_constants();

// Define and enforce our SSL constants
coc_ssl_constants();

// Create common globals.
require( ABSPATH . COCINC . '/vars.php' );

// Make taxonomies and posts available to plugins and themes.
// @plugin authors: warning: these get registered again on the init hook.
create_initial_taxonomies();
create_initial_post_types();

// Register the default theme directory root
register_theme_directory( get_theme_root() );

// Load active plugins.
foreach ( coc_get_active_and_valid_plugins() as $plugin ) {
	coc_register_plugin_realpath( $plugin );
	include_once( $plugin );
}
unset( $plugin );

// Load pluggable functions.
require( ABSPATH . COCINC . '/pluggable.php' );
require( ABSPATH . COCINC . '/pluggable-deprecated.php' );

// Set internal encoding.
coc_set_internal_encoding();

// Run coc_cache_postload() if object cache is enabled and the function exists.
if ( coc_CACHE && function_exists( 'coc_cache_postload' ) )
	coc_cache_postload();

/**
 * Fires once activated plugins have loaded.
 *
 * Pluggable functions are also available at this point in the loading order.
 *
 * @since 1.5.0
 */
do_action( 'plugins_loaded' );

// Define constants which affect functionality if not already defined.
coc_functionality_constants();

// Add magic quotes and set up $_REQUEST ( $_GET + $_POST )
coc_magic_quotes();

/**
 * Fires when comment cookies are sanitized.
 *
 * @since 2.0.11
 */
do_action( 'sanitize_comment_cookies' );

/**
 * WordPress Query object
 * @global object $coc_the_query
 * @since 2.0.0
 */
$GLOBALS['coc_the_query'] = new COC_Query();

/**
 * Holds the reference to @see $coc_the_query
 * Use this global for WordPress queries
 * @global object $coc_query
 * @since 1.5.0
 */
$GLOBALS['coc_query'] = $GLOBALS['coc_the_query'];

/**
 * Holds the WordPress Rewrite object for creating pretty URLs
 * @global object $coc_rewrite
 * @since 1.5.0
 */
$GLOBALS['coc_rewrite'] = new COC_Rewrite();

/**
 * WordPress Object
 * @global object $wp
 * @since 2.0.0
 */
$GLOBALS['wp'] = new WP();

/**
 * WordPress Widget Factory Object
 * @global object $coc_widget_factory
 * @since 2.8.0
 */
$GLOBALS['coc_widget_factory'] = new COC_Widget_Factory();

/**
 * WordPress User Roles
 * @global object $coc_roles
 * @since 2.0.0
 */
$GLOBALS['coc_roles'] = new COC_Roles();

/**
 * Fires before the theme is loaded.
 *
 * @since 2.6.0
 */
do_action( 'setup_theme' );

// Define the template related constants.
coc_templating_constants(  );

// Load the default text localization domain.
load_default_textdomain();

$locale = get_locale();
$locale_file = coc_LANG_DIR . "/$locale.php";
if ( ( 0 === validate_file( $locale ) ) && is_readable( $locale_file ) )
	require( $locale_file );
unset( $locale_file );

// Pull in locale data after loading text domain.
require_once( ABSPATH . COCINC . '/locale.php' );

/**
 * WordPress Locale object for loading locale domain date and various strings.
 * @global object $coc_locale
 * @since 2.1.0
 */
$GLOBALS['coc_locale'] = new COC_Locale();

// Load the functions for the active theme, for both parent and child theme if applicable.
if ( ! defined( 'COC_INSTALLING' ) || 'wp-activate.php' === $pagenow ) {
	if ( TEMPLATEPATH !== STYLESHEETPATH && file_exists( STYLESHEETPATH . '/functions.php' ) )
		include( STYLESHEETPATH . '/functions.php' );
	if ( file_exists( TEMPLATEPATH . '/functions.php' ) )
		include( TEMPLATEPATH . '/functions.php' );
}

/**
 * Fires after the theme is loaded.
 *
 * @since 3.0.0
 */
do_action( 'after_setup_theme' );

// Set up current user.
$GLOBALS['wp']->init();

/**
 * Fires after WordPress has finished loading but before any headers are sent.
 *
 * Most of WP is loaded at this stage, and the user is authenticated. WP continues
 * to load on the init hook that follows (e.g. widgets), and many plugins instantiate
 * themselves on it for all sorts of reasons (e.g. they need a user, a taxonomy, etc.).
 *
 * If you wish to plug an action once WP is loaded, use the coc_loaded hook below.
 *
 * @since 1.5.0
 */
do_action( 'init' );

// Check site status
if ( is_multisite() ) {
	if ( true !== ( $file = ms_site_check() ) ) {
		require( $file );
		die();
	}
	unset($file);
}

/**
 * This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.
 *
 * AJAX requests should use wp-admin/admin-ajax.php. admin-ajax.php can handle requests for
 * users not logged in.
 *
 * @link http://codex.wordpress.org/AJAX_in_Plugins
 *
 * @since 3.0.0
 */
do_action( 'coc_loaded' );
