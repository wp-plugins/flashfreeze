=== FlashFreeze ===
Contributors: LoneWolfMuskoka
Donate link: http://blogs.wcnickerson.ca/wordpress
Tags: blocks flash uploader
Requires at least: 2.7.0 is all that I've tested -- not sure if Flash uploader was even available before that
Tested up to: 2.7.0
Stable tag: 1.0

This plugin simply blocks the Flash media uploader and allows you to use the Browser media uploader by default.

== Description ==

For many people, the *Flash* media uploader does not work properly.  I found it frustrating that this was the
default option, requiring an extra step to get to the *Browser* media uploader.

This plugin works by hooking into the 'flash_updater' filter and setting the variable to false.  This makes
it seem to WordPress that the browser doesn't support flash.  Because of this, the option to switch to the
flash version isn't shown.  Future versions may work around this if there is a need for it, but I would imagine
that if you don't want flash, you don't want it at all.

There are also no setup options in this version.  It is turned on by activating the plugin and turned off by
deactivating it.  Easy, peasy!

== Installation ==
The current version is pretty basic.  It starts working as soon as it is activated and stops when deactivated.

1. Extract the zip archive to the `/wp-content/plugins/` directory.  This should create a *flash-freeze* subdirectory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= What settings do I use to run FlashFreeze? =

Currently, there are no settings.  To turn it off, deactivate the plugin.

= What if I want to use the Flash uploader sometimes? =

Currently, the plugin makes it look as though Flash is not available.  A future version may be able to get around this
and allow the Browser uploader to be default with the Flash uploader as an option.

== Screenshots ==

No screenshots since this runs in the background.