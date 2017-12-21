=== Flush Opcache with Varnish ===
Contributors: johnnyb
Tags: varnish, opcache, cache
Requires at least: 3.0.1
Tested up to: 4.9.1
Requires PHP: 5.5.0
Stable tag: 1.0
License: Apache 2.0
License URI: http://www.apache.org/licenses/LICENSE-2.0
 
Flush the PHP Opcache when Varnish HTTP Cache's "Purge Cache" button is clicked.
 
== Description ==
 
Flush Opcache with Varnish automatically flushes the PHP Opcache when the "Purge Cache" button that Mika Epstein's excellent [Varnish HTTP Cache](https://wordpress.org/plugins/varnish-http-purge/) creates is clicked.

If the [WP Opcache](https://wordpress.org/plugins/flush-opcache/) plugin is installed it is used to flush the opcache to let the opcache be re-warmed according to your WP Opcache settings, (and you can turn off WP Opcache's "Flush PHP Opcache" button from the Admin toolbar).

 
== Installation ==
 
This section describes how to install the plugin and get it working.

1. Install Flush Opcache with Varnish from the WordPress plugin repository
2. Activate the plugin through the 'Plugins' menu in WordPress, (or just click the "Activate" button after installing).
3. That's it. There are no settings or anything. If the plugin is active it flushes the opcache when the "Purge Cache" button is clicked.
 
== Frequently Asked Questions ==
 
= Does the _Varnish HTTP Cache_ plugin Need to be installed to use this plugin?  =

Either [Varnish HTTP Cache](https://wordpress.org/plugins/varnish-http-purge/) or a plugin that's based on in, and doesn't change much, needs to be installed.
 
= Does the _WP Opcache_ plugin need to be installed to use this plugin? =
 
No. 

_If_ [WP Opcache](https://wordpress.org/plugins/flush-opcache/) is installed it will handle the actual flushing.
 
== Screenshots ==
 
1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Contributing ==

Please submit issues and Pull Requests to [the Github repository](https://github.com/jbeales/flush-opcache-with-varnish/issues).
 
== Changelog ==
 
= 1.0 =
* First release version of Flush Opcache with Varnish.
