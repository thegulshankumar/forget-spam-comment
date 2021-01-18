<?php
/**
 * Plugin Name:       Forget Spam Comment
 * Plugin URI:        https://wordpress.org/plugins/forget-spam-comment/
 * Description:       The ultimate solution to stop spam comments in default commenting system of WordPress.
 * Author:            Gulshan Kumar
 * Author URI:        https://www.gulshankumar.net/
 * Version:           1.0.3
 * Text Domain:       forget-spam-comment
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
defined('ABSPATH') OR die();

/* Register activation hook. */
register_activation_hook( __FILE__, 'forget_spam_comment_activation_hook' );
 
/**
 * Runs only when the plugin is activated.
 * @since 1.0.2
 */
function forget_spam_comment_activation_hook() {
 
/* Create transient data */
    set_transient( 'forget-spam-comment-activation-notice', true, 5 );
}
 
/* Add admin notice */
add_action( 'admin_notices', 'forget_spam_comment_notice' );

 
/**
 * Admin Notice on Activation.
 * @since 1.0.2
 */
function forget_spam_comment_notice(){
 
    /* Check transient, if available display notice */
    if( get_transient( 'forget-spam-comment-activation-notice' ) ){
        ?><style>div#message.updated{ display: none; }</style>
        <div class="updated notice is-dismissible">
          <p><?php _e( 'Thank you for using Forget Spam Comment. 😎 <strong>Please clear Page Cache</strong>', 'forget-spam-comment' ); ?></p>
        </div>
        <?php
        /* Delete transient, only display this notice once. */
        delete_transient( 'forget-spam-comment-activation-notice' );
    }
}

// Support links
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'forget_spam_comment_add_action_links');
function forget_spam_comment_add_action_links($links) {
    $plugin_shortcuts = array(
        '<a rel="noopener" href="https://help.gulshankumar.net" target="_blank">' . __('Ask a Question', 'forget-spam-comment') . '</a>',
        '<a rel="noopener" href="https://www.buymeacoffee.com/gulshan" target="_blank" style="color:#080;">' . __('Buy developer a coffee', 'forget-spam-comment') . ' ☕' .'</a>'
    );
    return array_merge($links, $plugin_shortcuts);
}

// Step 1. Firstly, remove the Comment Action URL from HTML Document to prevent bot comments
add_filter( 'comment_form_defaults', 'forget_spam_comment_remove_comment_action_url');
function forget_spam_comment_remove_comment_action_url( $defaults ) {
	$defaults['action'] = '';
	return $defaults;
}

// Step 2. As visitor scroll the web page, fix the broken action URL including md5 hash as Query String Parameter
function forget_spam_comment_modify_action_url() {
	if (is_singular() && comments_open()) {
		echo "\n<script>";
		// Most popular IDs are listed here for compatibility with all popular themes
		echo "let commentForm = document.querySelector(\"#commentform, #ast-commentform, #ht-commentform\");";
		echo "document.onscroll = function () {";
		$forget_spam_comment_unique_key  = md5($_SERVER['DOCUMENT_ROOT']); // Generate unique query string for each site
		echo "commentForm.action = \"" . wp_make_link_relative(get_site_url()) . "/wp-comments-post.php?$forget_spam_comment_unique_key\";";
		echo "};";
		echo "</script>\n";
	}
}
add_action('wp_footer', 'forget_spam_comment_modify_action_url', 99);

// Step 3. Error message
function forget_spam_comment_block_response() {
	header('HTTP/1.1 400 Bad Request');
	header('Status: 400 Bad Request');
	header('Connection: Close');
	die();
}

// Step 4. Allow POST request for comment if md5 hash matches in Request Header as Query String Parameter
$forget_spam_comment_request = "wp-comments-post.php";
$forget_spam_comment_requested_uri = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
$forget_spam_comment_post_request_received = isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" ? true : false;
$forget_spam_comment_request_recieved = (strpos($forget_spam_comment_requested_uri, $forget_spam_comment_request) !== false) ? true : false;
$forget_spam_comment_query_list = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : false;
$forget_spam_forget_spam_comment_requested_key = md5($_SERVER['DOCUMENT_ROOT']); // Check Request Header against Unique Key
$forget_spam_comment_request_contain_key = $forget_spam_comment_query_list == $forget_spam_forget_spam_comment_requested_key ? true : false;
if ($forget_spam_comment_post_request_received) {
	if ($forget_spam_comment_request_recieved && !$forget_spam_comment_request_contain_key) {
		forget_spam_comment_block_response();
	}
}
// Share your feedback at https://wordpress.org/support/plugin/forget-spam-comment/reviews/#new-post
