=== Plugin Name ===
Contributors: stewarty, poweredbycoffee
Donate link: http://poweredbycoffee.co.uk
Tags: wp-admin, colour
Requires at least: 3.5.0
Tested up to: 4.5.3
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Change The Colour Scheme of wp-admin based on your enviroment.



== Description ==

Every get mixed up which WordPress enviroment you're using?.  Staging? production? local? QA? Every done loads of work in the 
wrong enviroment that you then need to redo?  

No More!

The plugin makes the wp-admin show as a different colour scheme depending on which enviroment you are using at the time. While falling back to the user selected colour scheme in `producion`

The enviroment is controlled the the constant `WP_ENV` which you cand efine anyway you want.  You can work it out from the url,
maybe you use different files config files for differnt enviroments?  Maybe you love ENVARS.  Whatever works for you.

== Installation ==

## Installation

**From Github**
https://github.com/pbc-web/env_switch
Clone the directory into your mu-plugins.  The plugin will be active automatically and start compressing new images as they are uploaded.  

**From WordPress.org**

1. Upload `env_swicth.php` to the `/wp-content/env_switch/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the WP_ENV constant to your wp-config.php with one of "local", "staging" or "production"



== Frequently Asked Questions ==

= Can I Change the colours?  =

Yes! the filter `wp_env_colours` will let you change which colour scheme is used.

= Can I add Extra enviroments?  =

Yes! the filter `wp_env_colours` will let you add new enviroments

== Screenshots ==

This plugin has no UI.  It runs quietly in the background doing its thing.

== Changelog ==

= 0.1 =
* Initial Release
