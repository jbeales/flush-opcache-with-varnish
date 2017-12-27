<?php

/*
Plugin Name: Flush Opcache with Varnish
Plugin URI: 
Description: Automatically flush the PHP opcache when you click the "Purge Cache" button created by Varnish HTTP Purge.
Version: 1.0
Author: John Beales
Author URI: http://johnbeales.com
License: http://www.apache.org/licenses/LICENSE-2.0
Text Domain: jb-fov


	Copyright 2017: John Beales


	This file is part of Flush Opcache with Varnish, a plugin for WordPress.

	Flush Opcache with Varnish is free software: you can redistribute it and/or modify
	it under the terms of the Apache License 2.0 license.

	Flush Opcache with Varnish is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.






	 .----------------.
	 ;----------------;
	 | ~~ .------.    |
	 |   /        \   |
	 |  /          \  |
	 |  |          |  |  ,----. 
	 |   \ ,    , /   | =|____|= 
	 '---,########,---'  (---(
	    /##'    '##\      )---)
	    |##,    ,##|     (---(
	     \'######'/       '---`
	      \`""""`/
	       |`""`|
	     .-|    |-.
	jgs /  '    '  \
	    '----------'

			|   |
			|   |
			|   |
			|   |
			|   |
			|   |
			|   |
			| o |
			| p |
			| c |
			| a |
			| c	|
			| h |
			| e |
			|   |
			|   |
			|   |
			|   |
			|   |
			|   |

			 💩


*/




function fov_do_opcache_flush() {

	if( function_exists('flush_opcache_reset') ) {
		flush_opcache_reset();
	} else {
		if( function_exists( 'opcache_reset' ) ) {
			opcache_reset();
		}
	}
}


function fov_admin_init() {

	if( 
		( isset( $_GET['vhp_flush_all'] ) && check_admin_referer( 'vhp-flush-all' ) ) 
		|| ( isset( $_GET['vhp_flush_do'] ) && check_admin_referer( 'vhp-flush-do' ) && $_GET['vhp_flush_do'] == 'all' )
	) {

		// Priority 9 so that the opcache is flushed before Varnish. Hopefully this will avoid re-caching the wrong thing in Varnish
		// if a request were to come in after the Varnish flush is complete but before the Opcache flush, (if we did Varnish first).
		add_action( 'shutdown', 'fov_do_opcache_flush', 9 );
	}
}
add_action( 'admin_init', 'fov_admin_init' );


