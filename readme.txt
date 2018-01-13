=== Flush Opcache with Varnish ===
Contributors: johnnyb
Tags: varnish, opcache, cache
Requires at least: 3.0.1
Tested up to: 4.9.1
Requires PHP: 5.5.0
Stable tag: 1.1.1
License: Apache 2.0
License URI: http://www.apache.org/licenses/LICENSE-2.0
 
Flush the PHP Opcache when one of Varnish HTTP Cache's "Empty Cache" buttons is clicked. Also clears the WP Super Cache cache if it exists.

== Description ==

Flush Opcache with Varnish automatically flushes the PHP Opcache when one of the "Empty Cache" buttons that Mika Epstein's excellent [Varnish HTTP Cache](https://wordpress.org/plugins/varnish-http-purge/) creates are clicked.

If the [WP Opcache](https://wordpress.org/plugins/flush-opcache/) plugin is installed it is used to flush the opcache to let the opcache be re-warmed according to your WP Opcache settings, (and you can turn off WP Opcache's "Flush PHP Opcache" button from the Admin toolbar).

If [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) is installed then the WP Super Cache cache will be cleared as well.

== Installation ==

This section describes how to install the plugin and get it working.

1. Install Flush Opcache with Varnish from the WordPress plugin repository
2. Activate the plugin through the 'Plugins' menu in WordPress, (or just click the "Activate" button after installing).
3. That's it. There are no settings or anything. If the plugin is active it flushes the opcache when an "Empty Cache" button is clicked.

== Frequently Asked Questions ==

= Does the _Varnish HTTP Cache_ plugin Need to be installed to use this plugin?  =

Either [Varnish HTTP Cache](https://wordpress.org/plugins/varnish-http-purge/) or a plugin that's based on in, and doesn't change much, needs to be installed.

= Does the _WP Opcache_ plugin need to be installed to use this plugin? =

No. 

_If_ [WP Opcache](https://wordpress.org/plugins/flush-opcache/) is installed it will handle the actual flushing.

= Does the _WP Super Cache_ plugin need to be installed to use this plugin? =

No.

_If_ [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) is instlled and active its cache will be cleared in addition to the Varnish and Opcode caches.

== Support ==

Please request support in [this plugin's support forum](https://wordpress.org/support/plugin/flush-opcache-with-varnish) on wordpress.org. This way there is a public record of solutions that work for people.

== Contributing ==

Please submit issues and Pull Requests to [the Github repository](https://github.com/jbeales/flush-opcache-with-varnish/issues).

== Changelog ==

= 1.1.1 =
* Released January 13, 2018
* Updated Readme files to correct display issues.

= 1.1 =
* Released January 11, 2018
* Added clearing the WP Super Cache cache, if it exists.

= 1.0 =
* First release version of Flush Opcache with Varnish.

== Upgrade Notice ==

= 1.1 =
Now you can clear the WP Super Cache cache at the same time as the Varnish and Opcode caches.