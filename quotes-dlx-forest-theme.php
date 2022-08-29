<?php
/**
 * Plugin Name:       QuotesDLX Forest Theme
 * Plugin URI:        https://dlxplugins.com/plugins/quotesdlx/
 * Description:       Green forest theme for QuotesDLX.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            MediaRon LLC
 * Author URI:        https://mediaron.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quotes-dlx
 * Domain Path:       /languages
 *
 * @package QuotesDLX
 */

namespace MediaRonLLC\QuotesDLXThemes;

// Support for site-level autoloading.
if ( file_exists( __DIR__ . '/lib/autoload.php' ) ) {
	require_once __DIR__ . '/lib/autoload.php';
}

/**
 * Add your own theme to QuotesDLX.
 *
 * @param array $themes Existing themes that are to be registered.
 */
function add_themes( $themes ) {
	$themes[] = __NAMESPACE__ . '\ForestTheme\Themes_Forest';
	return $themes;
}

/**
 * Theme initialization has begun.
 */
function theme_registration_init() {

	// Init filter to add a theme to the defaults.
	add_filter( 'quotes_dlx_themes', __NAMESPACE__ . '\add_themes' );
}
add_action( 'quotes_dlx_pre_themes_loaded', __NAMESPACE__ . '\theme_registration_init' );
