<?php
/**
 * Plugin Name:       Forget Spam Comment
 * Plugin URI:        https://wordpress.org/plugins/forget-spam-comment/
 * Description:       The ultimate solution to stop spam comments in default commenting system of WordPress.
 * Author:            Gulshan Kumar
 * Author URI:        https://www.gulshankumar.net/
 * Version:           1.0.1
 * Text Domain:       forget-spam-comment
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
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
		echo "<script>\n";
		// Most popular IDs are listed here for compatibility with all popular themes
		echo "let commentForm = document.querySelector(\"#commentform, #ast-commentform, #ht-commentform\");\n";
		echo "document.onscroll = function () {\n";
		$forget_spam_comment_unique_key  = md5($_SERVER['DOCUMENT_ROOT']); // Generate unique query string for each site
		echo "commentForm.action = \"" . wp_make_link_relative(get_site_url()) . "/wp-comments-post.php?$forget_spam_comment_unique_key\";\n";
		echo "};\n";
		echo "</script>\n";
	}
}
add_action('wp_footer', 'forget_spam_comment_modify_action_url', 99);

// Step 3. Error message
function forget_spam_comment_block_response() {
	header('HTTP/1.1 400 Bad Request');
	header('Status: 400 Bad Request');
	header('Connection: Close');
	exit();
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
// Share your feedback at https://github.com/thegulshankumar/forget-spam-comment/