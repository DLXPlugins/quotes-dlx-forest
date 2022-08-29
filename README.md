# QuotesDLX Forest theme
A green and brown theme for QuotesDLX.

## Forest - a Sample Theme

![qdlx-forest-theme-preview](https://user-images.githubusercontent.com/636521/187117527-8303c4b7-3acf-4b5c-abd4-7362c8c23272.jpg)

The Forest theme is a green and brown theme that users can install and customize.

This theme is a separate plugin from QuotesDLX and must be installed/activated.

## Theme Creators

You can fork this repository to create your own theme. Most use-cases are covered and the build scripts are easy to setup (and optional).

For creating a theme, please see <a href="https://docs.dlxplugins.com/v/quotes-dlx/themes/creating-your-own-theme">the documentation on creating your own theme.

You can also check out a <a href="https://docs.dlxplugins.com/v/quotes-dlx/themes/themes-overview">theme overview of how QuotesDLX handles its themes</a>.

## Developers

### Build Scripts

The plugin uses Webpack 5 to compile the SASS scripts. This is optional if you'd rather just use plain CSS.

To run the build scripts:

1. Clone the repo
2. Navigate to the repo in terminal
3. Run `composer install`
4. Run `npm install`

Finally, you can use the following to watch for style changes.

1. `npm run start` will create a dev version of the CSS files needed.
2. `npm run build` will create a production version of the CSS files.

If you need help with your build scripts, <a href="https://dlxplugins.com/support/">please get in touch</a>.

### Folder Structure

The main plugin file is named `quotes-dlx-forest-theme.php` and is at the root of the plugin.

The heavy lifting is done by this section:

```php
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
add_filter( 'quotes_dlx_pre_themes_loaded', __NAMESPACE__ . '\theme_registration_init' );
```

The theme is initialized by reading in the `Themes_Forest` class in this file:

```ascii
quotes-dlx-forest-theme           
├─ ForestTheme                    
│  └─ Themes_Forest.php   
```

For more information on this file, please see <a href="https://docs.dlxplugins.com/v/quotes-dlx/themes/creating-your-own-theme">the documentation on creating your own theme.

You can create your own subdirectories and initialization files if you should choose to have more than one theme in your custom plugin.

Here's an abbreviated folder structure that lays out all the major pieces of the plugin.

```ascii
quotes-dlx-forest-theme           
├─ ForestTheme                    
│  └─ Themes_Forest.php           
├─ images                         
│  └─ forest-theme-preview.jpg    
├─ lib                                      
│  └─ autoload.php                
├─ src                            
│  └─ scss                        
│     ├─ breakpoints-mixin.scss   
│     └─ forest-theme.scss                                          
├─ quotes-dlx-forest-theme.php    

```
