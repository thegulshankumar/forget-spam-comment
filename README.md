# Forget Spam Comment

#### A lightweight and privacy-friendly plugin to prevent spam comments in the *default commenting system* of WordPress.

![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dd/forget-spam-comment?&color=00796b&style=for-the-badge&labelColor=da3900&cacheSeconds=300) ![WordPress Plugin Active Installs](https://img.shields.io/wordpress/plugin/installs/forget-spam-comment?style=for-the-badge&labelColor=da3900&cacheSeconds=300&&color=00796b)

**Download:** [Forget Spam Comment](https://wordpress.org/plugins/forget-spam-comment/)

---

> [!TIP]
> No settings are required. Please clear your page cache after plugin activation or deactivation.

---

### How Does It Work?
To prevent spam comments, the plugin blocks the default action path (`wp-comments-post.php`) for bots and makes it accessible only through a unique hash query string when a visitor scrolls to leave a comment. This effectively prevents automated spam comments from being submitted by bots.

---

### Video Demonstration

<div align="center">
  <a href="https://www.youtube.com/watch?v=uwIfk08GSwk">
    <img src="https://i.imgur.com/RhxL0Ba.png" alt="Forget Spam Comment" />
  </a>
</div>

---

### Installation 

#### To Install This Plugin from the WordPress Dashboard:
1. Go to **Plugins** > **Add New**.
2. Search for **Forget Spam Comment**.
3. Activate the plugin through the **Plugins** menu in WordPress.
4. If you are using any page cache plugin, make sure to purge/clear the cache.

#### To Install This Plugin Manually:
1. Download the **Forget Spam Comment** plugin.
2. Upload `Forget Spam Comment` to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **Plugins** menu in WordPress.
4. If you are using any page cache plugin, make sure to purge/clear the cache.

---

### Frequently Asked Questions

#### How do I test if this plugin is working?
Go to any post where comments are enabled and try to post a comment. If the comment is posted successfully, everything is working fine. If you see error 400, you may have forgotten to clear the page cache after plugin activation. If you are still unable to post a comment and the page just reloads, it means your theme uses a different comment form ID that is not supported by this plugin. Please create a support topic with your site URL, and I will assist you.

#### What commenting systems are supported?
This plugin is designed to work only with the default commenting system of WordPress. Other commenting systems like Disqus, JetPack Comments, and wpDiscuz are not supported.

#### How can I get support for this plugin?
Please allow me a chance to look into your problem by [opening a support topic](https://wordpress.org/support/plugin/forget-spam-comment/). I will respond within 24 hours.
