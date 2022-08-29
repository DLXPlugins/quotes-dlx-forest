<?php
/**
 * Initialization for the forest theme.
 *
 * @package quotes-dlx
 */

namespace MediaRonLLC\QuotesDLXThemes\ForestTheme;

use MediaRonLLC\QuotesDLX\Themes\Themes_Addon as Themes_Addon;

/**
 * Holds variables for the Forest theme.
 */
class Themes_Forest extends Themes_Addon {

	/**
	 * Contains an instance of this class, if available.
	 *
	 * @since  1.0.0
	 * @var    Themes_Forest $instance If available, contains an instance of this class
	 */
	private static $instance = null;

	/**
	 * Theme name.
	 *
	 * @var string $name The theme name.
	 */
	protected static $name = 'Forest';

	/**
	 * Slug for the theme.
	 *
	 * @var string $slug The theme slug.
	 */
	protected static $slug = 'forest';

	/**
	 * Category for the theme.
	 *
	 * @var string $category The theme category.
	 */
	protected static $category = 'core';

	/**
	 * Theme version.
	 *
	 * @var string $version The theme version.
	 */
	protected static $version = '1.0.0';

	/**
	 * Description for the theme.
	 *
	 * @var string $theme_description The theme description.
	 */
	protected static $theme_description;

	/**
	 * Author name.
	 *
	 * @var string $author_name The author of the theme.
	 */
	protected static $author_name = 'Ronald Huereca';

	/**
	 * Author URL.
	 *
	 * @var string $author_url URL for the author.
	 */
	protected static $author_url = 'https://mediaron.com';

	/**
	 * Large Image Width. Used for previews.
	 *
	 * @var int $full_width Image width of full-size image.
	 */
	protected static $full_width = 900;

	/**
	 * Large Image height. Used for previews.
	 *
	 * @var int $full_height Image height of full-size image.
	 */
	protected static $full_height = 500;

	/**
	 * Theme color or gradient.
	 *
	 * @var string $preview_color The theme preview color hexcode or gradient color.
	 */
	protected static $preview_gradient = 'linear-gradient(90deg, rgba(58,73,40,1) 14%, rgba(109,74,59,1) 85%);';

/**
 * Preview URL image for theme.
 *
 * @var string $preview_image_url The theme preview image URL.
 */
protected static $preview_image_url = '';


	/**
	 * Returns an instance of this class, and stores it in the $instance property.
	 *
	 * @since  1.0.0
	 *
	 * @return ThemesForest $instance An instance of the Themes_Light_Branded class
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {
			self::$instance = new Themes_Forest();
		}

		return self::$instance;
	}

	/**
	 * Get the name of the theme.
	 */
	protected static function get_name() {
		return _x( 'Forest', 'A lucious green forest theme to make your quotes stand out.', 'quotes-dlx' );
	}

	/**
	 * Get the slug of the theme.
	 */
	protected static function get_slug() {
		return self::$slug;
	}

	/**
	 * Get the preview gradient of the theme.
	 */
	protected static function get_preview_gradient() {
		return self::$preview_gradient;
	}

	/**
	 * Get the stylesheet URL.
	 */
	protected static function get_stylesheet_url() {
		return plugins_url( 'dist/theme-forest-css.css', dirname( __FILE__ ) );
	}

	/**
	 * Get the image preview URL.
	 */
	protected static function get_preview_image_url() {
		return plugins_url( 'images/forest-theme-preview.jpg', dirname( __FILE__ ) );
	}

	/**
	 * Get the category.
	 */
	protected static function get_category() {
		return self::$category;
	}

	/**
	 * Get the author.
	 *
	 * @return string author.
	 */
	protected static function get_author() {
		return self::$author_name;
	}

	/**
	 * Get the author url.
	 *
	 * @return string Author URL.
	 */
	protected static function get_author_url() {
		return self::$author_url;
	}

	/**
	 * Get the theme description.
	 *
	 * @return string Theme description.
	 */
	protected static function get_description() {
		self::$theme_description = __( 'A lucious green forest theme to make your quotes stand out. Works great on a dark or light background.', 'quotes-dlx' );
		return self::$theme_description;
	}

	/**
	 * Get the theme version.
	 *
	 * @return string Theme version.
	 */
	protected static function get_version() {
		return self::$version;
	}

	/**
	 * Get the theme image preview width.
	 *
	 * @return int Theme image width.
	 */
	protected static function get_image_width() {
		return self::$full_width;
	}

	/**
	 * Get the theme image preview height.
	 *
	 * @return int Theme image height.
	 */
	protected static function get_image_height() {
		return self::$full_height;
	}

	/**
	 * Get the colors of the theme.
	 *
	 * @return array $args {
	 *    @type string $name  Name of the color.
	 *    @type string $slug  Slug of the color.
	 *    @type string $color Hex code (including #) of the color.
	 * }
	 */
	protected static function get_colors() {
		return array(
			array(
				'name'  => __( 'Primary', 'quotes-dlx' ),
				'slug'  => 'primary',
				'color' => '#3A4928',
			),
			array(
				'name'  => __( 'Secondary', 'quotes-dlx' ),
				'slug'  => 'secondary',
				'color' => '#6d4a3b',
			),
			array(
				'name'  => __( 'Accent', 'quotes-dlx' ),
				'slug'  => 'accent',
				'color' => '#cc7000',
			),
			array(
				'name'  => __( 'Text Color', 'quotes-dlx' ),
				'slug'  => 'text-color',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Quotes Color', 'quotes-dlx' ),
				'slug'  => 'quotes-color',
				'color' => '#cebfb9',
			),
			array(
				'name'  => __( 'Border Color', 'quotes-dlx' ),
				'slug'  => 'border-color',
				'color' => '#685046',
			),
			array(
				'name'  => __( 'Inner Background Color', 'quotes-dlx' ),
				'slug'  => 'inner-background-color',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Buttons Primary Color', 'quotes-dlx' ),
				'slug'  => 'button-primary-color',
				'color' => '#6d4a3b',
			),
			array(
				'name'  => __( 'Buttons Secondary Color', 'quotes-dlx' ),
				'slug'  => 'button-secondary-color',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Button Primary Text Color', 'quotes-dlx' ),
				'slug'  => 'button-primary-text-color',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Button Secondary Text Color', 'quotes-dlx' ),
				'slug'  => 'button-secondary-text-color',
				'color' => '#6d4a3b',
			),
			array(
				'name'  => __( 'Button Border', 'quotes-dlx' ),
				'slug'  => 'button-primary-border-color',
				'color' => '#DDDDDD',
			),
			array(
				'name'  => __( 'Light', 'quotes-dlx' ),
				'slug'  => 'light',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Dark', 'quotes-dlx' ),
				'slug'  => 'dark',
				'color' => '#2B2B2B',
			),
		);
	}
}
