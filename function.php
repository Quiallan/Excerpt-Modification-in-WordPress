//code displays fully on this page. I need identify the post type to apply to entire site. 
function full_post_excerpt($content) {
    global $post;
    $current_url = home_url( add_query_arg( null, null ) );
    if ($current_url === 'https://partnersforsight.org/?newsletters_method=newsletter&id=193') {
        $content = apply_filters('the_content', $post->post_content);
    }
    return $content;
}
add_filter('get_the_excerpt', 'full_post_excerpt', 9999);




function full_post_excerpt($content) {
    global $post;
    $current_url = home_url(add_query_arg(null, null));
    
    $allowed_urls = array(
        'https://partnersforsight.org/?newsletters_method=newsletter&id=196',
        'https://partnersforsight.org/?newsletters_method=newsletter&id=197',
		'https://partnersforsight.org/?p=4183',
    );

    if (in_array($current_url, $allowed_urls)) {
        $content = apply_filters('the_content', $post->post_content);
    }
    return $content;
}
add_filter('get_the_excerpt', 'full_post_excerpt', 9999);
