=== Jetpack Post Statistics Link ===
Contributors: John Crawford
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=R5UGFDVS7RBV6
Tags: Jetpack, Stats, Statistics, Post Statistics
Requires at least: WordPress 3.2.1 and JetPack Version 1.2.4
Latest Revision Tested: JetPack 4.3.1 / Wordpress 4.6.1  
Stable tag: 1.3.1

Adds a custom column to the "Posts" and "Pages" Administration pages that provides a link to the JetPack Statistics for post/page on your blog.

== Description ==

Adds a custom column to the "Posts" and "Pages" Administration pages that provides a link to the JetPack Statistics for post/page on your blog.

Pre-Requisite:

*   You must have Jetpack installed and active on your wordpress blog.
*   First released against Jetpack version 1.2.4. 
*   Tested to work with JetPack 4.3.1 / Wordpress 4.6.1 (Sep 2016)

== Installation ==
Manual Installation

1. Download the zip from http://www.homedev.com.au/WordPress/JetPackPostStatsLink
1. Extract to the `/wp-content/plugins/` directory, the zip will create the homedev_jetpack_post_stats directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where are your FAQ's =

Ask me a question ;-)


== Screenshots ==

1. Post Admin Page with Jetpack Post Statistics Link

== Changelog ==
= 1.3.1 =
* Tested against Wordpress 4.6.1 / JetPack 4.3.1
* Updated as it has been working so well for over 2 years without needing to update that it dropped out of the plugin directory

= 1.3.0 =
* Added the ability to show the statistics link on the Pages administation page
* Tested against Wordpress 3.6.1 / JetPack 2.4.2

= 1.2.0 =
* Update to handle support issue, see final posts. (http://wordpress.org/support/topic/plugin-jetpack-post-statistics-link-you-do-not-have-sufficient-privileges-to-access-this-page)
* Plugin now generates the full path to your wordpress site to handle situations where people have non-standard wordpress installations.
* Tested against Wordpress 3.5.1 / JetPack 2.1.1

= 1.1.0 =
* Update to remove the &blog=nnnn parameter.
* removes the need to access the database so will remove any performance hit
* Tested against Wordpress 3.3.1 / JetPack 1.2.4

= 1.0.0 =
* First Release as for version 3.2.1 - JetPack 1.2.?


== Upgrade Notice ==
= 1.2.0=
Dynamically generate the website URL for the link to handle non-standard wordpress installations.

= 1.1.0 =
Remove the &blog=nnnn parameter from the generated link as it is no longer required, and removes a database read so improves performance

= 1.0.0 = 
First release 

