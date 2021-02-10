=== Forget Spam Comment ===
Contributors: thegulshankumar
Donate link: https://www.buymeacoffee.com/gulshan
Tags: comments, spam, anti spam, stop spam, security, gdpr, firewall
Requires at least: 4.5
Tested up to: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The ultimate solution to stop spam comments in the default commenting system of WordPress

== Description ==

The fastest and GDPR compliant Anti-Spam plugin to prevent bot spam in the **Default Commenting System** of WordPress.

= Features  =
* 100% effective.
* Captcha-Free solution.
* No settings are required.
* Automatic. No need of false-positive comment moderation.
* GDPR Compliant.
* Fastest ever. A tiny inline JavaScript in just ~200 bytes does all magic.
* Compatible with all page caching and performance optimization plugins.

== Important ==
* Please clear page cache after plugin activation or deactivation.
* Only for default commenting system. Not for AMP. Please read FAQs.

= How does it work? =
To prevent spam comments plugin blocks the default action path (wp-comments-post.php) for bots and make it accessible over unique hash query string when a visitor scroll to leave a comment. This way it prevents automated spam comment done by bots.

**Video Demonstration**

[youtube https://www.youtube.com/watch?v=uwIfk08GSwk]
Watch on [YouTube](https://www.youtube.com/watch?v=uwIfk08GSwk)

== Let's connect ==

- Join [GulshanForum](https://help.gulshankumar.net/) to get instant help for everything related to WordPress.
- Follow on [Twitter](https://twitter.com/TheGulshanKumar) to stay in touch.

== Installation ==

To install this plugin from WordPress Dashboard

1. Go to Plugins menu > Add new
1. Search for Forget Spam Comment
1. Activate the plugin through the 'Plugins' menu in WordPress
1. If you are using any page cache plugin, make sure to purge/clear the cache.

To install this plugin manually

1. Download the Forget Spam Comment Plugin
1. Upload `Forget Spam Comment` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. If you are using any page cache plugin, make sure to purge/clear the cache.

== Frequently Asked Questions ==

= How to test whether this plugin is working or not? =
Go to any post where comment is enabled and try to post a comment. If comment is posted successfully means everything is working fine. If you see error 400, you just have forgot to clear page cache after plugin activation. If you are still unable to post a comment and page just reload to itself means your theme uses a different comment form ID that has not been included by this plugin. Please create a support topic with your site URL. I will take care of it.

= Which commenting system is supported by this plugin? =
Only Default Commenting System of WordPress. Any other commenting system like AMP, Disqus, JetPack Comment, wpDiscuz are not supported.

= How to get technical assistance for this plugin? =
Allow me a chance to look into your problem by opening a support topic. I will reply in 24 hours.

== Changelog ==

= 1.0.4 =
* Minor tweaks

= 1.0.3 =
* Minified inline JS for better performance
* Translation made available for Hindi, Bengali, English (United States), English (UK).
* Minor tweaks 

= 1.0.2 =
* Added hint for purging cache upon plugin activation
* Added support links

= 1.0.1 =
* Performance optimization

= 1.0.0 =
* Initial release
