## A lightweight and privacy-friendly plugin to prevent spam comment in the *default commenting system* of WordPress.

##### Download https://wordpress.org/plugins/forget-spam-comment/

### Important
* No settings required. Please clear page cache after plugin activation or deactivation.

### How does it work? 
To prevent spam comments plugin blocks the default action path (wp-comments-post.php) for bots and make it accessible over unique hash query string when a visitor scroll to leave a comment. This way it prevents automated spam comment done by bots.

### Video Demonstration 

[![Forget Spam Comment](https://i.imgur.com/RhxL0Ba.png)](https://www.youtube.com/watch?v=uwIfk08GSwk)

### Quick Info 

- Join [GulshanForum](https://help.gulshankumar.net/) to get instant help for everything related to WordPress.
- [Donate](https://www.buymeacoffee.com/gulshan) or share this plugin with your friends.

### Installation 

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

### Frequently Asked Questions

#### How to test either this plugin is working or not? 
Go to any post where comment is enabled and try to post a comment. If comment is posted successfully means everything is working fine. If you see error 400, you just have forgot to clear page cache after plugin activation. If you are still unable to post a comment and page just reload to itself means your theme uses a different comment form ID that has not been included by this plugin. Please create a support topic with your site URL. I will take care of it.

####  What things are supported and not? 
This plugin is suppose to work only with Default Commenting System of WordPress. Any other commenting system like Disqus, JetPack Comment, wpDiscuz are not supported. 

####  How to get support for this plugin?
Allow me a chance to look into your problem by opening a support topic. I will reply in 24 hours.

#### Changelog

== Changelog ==

= 1.1.3 =
* Changed the method of key generation. Make sure to clear the cache for all pages.

= 1.1.2 =
* Tested with WordPress 6.4.1 and PHP 8.2.12
* Addressed referral handling for increased precision
* Improved code readability and consistency following WordPress coding standards

= 1.1.1 =
* Tested with WordPress 6.2 and PHP 8.2.4

= 1.1.0 =
* Tested with WordPress 6.1.1 and PHP 8.2.3
* Updated links

= 1.0.9 =
* Tested with WordPress 6.0

= 1.0.8 =
* Tested with WordPress 5.9.1 and PHP 8.1.3

= 1.0.7 =
* Tested with WordPress 5.8
* Enhanced compatibility

= 1.0.6 =
* Tested plugin up to 5.7

= 1.0.5 =
* Added hint for purging cache in the generated error page to assist first time plugin user.

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
