<?php
/*
	Plugin Name: FlashFreeze
	Plugin URI: http://blogs.wcnickerson.ca/WordPress/Plugins/FlashFreeze/
	Description: A simple plug in that disables the Flash media uploader.  Enable or disable the plugin to turn the Flash uploader off or on.
	Version: 1.0
	Author: William Charles Nickerson (LoneWolf)
	Author URI: http://blogs.wcnickerson.ca
*/

/*  
	Copyright 2009  William Charles Nickerson  (email : bill@wcnickerson.ca)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
 * FlashFreeze will disable the use of the Flash media uploader.  This will allow the
 * browser uploader to be used as the default.
 *
 * NOTE: These are features that would be nice to have.
 *	1) Option to turn flash off/on rather than having to disable and enable the plugin.
 *	2) Allow flash option to be visible while browser option is default.
 */
function FlashFreeze ($flash) {
	$flash = false;
	return ($flash);
}

add_filter ('flash_uploader', 'FlashFreeze', 99, 1);

?>