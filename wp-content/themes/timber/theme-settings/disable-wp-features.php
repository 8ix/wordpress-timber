<?php
//Disable Guttenburg Editor
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}

//Disable Comments from Attachments
function filter_media_comment_status($open, $post_id)
{
    $post = get_post($post_id);
    if ($post->post_type == 'attachment') {
        return false;
    }
    return $open;
}
add_filter('comments_open', 'filter_media_comment_status', 10, 2);


// Removes from admin menu
add_action('admin_menu', 'my_remove_admin_menus');
function my_remove_admin_menus()
{
    remove_menu_page('edit-comments.php');
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support()
{
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}
// Removes from admin bar
function mytheme_admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'mytheme_admin_bar_render');


//Prevent Page Deletions of the core wordpress pages
function prevent_default_theme_deletion($allcaps, $caps, $args)
{
    $post_ids = [1];

    foreach ($post_ids as $post_id) {
        if (isset($args[0]) && isset($args[2]) && $args[2] == $post_id && $args[0] == 'delete_post') {
            $allcaps[$caps[0]] = false;
        }
    }
    return $allcaps;
}
add_filter('user_has_cap', 'prevent_default_theme_deletion', 10, 3);
