<?php

// Filter adding
function wporg_filter_title($title)
{
    if (is_admin()) {
        return $title . ' :-: was filtered';
    }
    return $title;
}
// add_filter( 'the_title', 'wporg_filter_title' );

add_filter('the_title', function ($title) {
    return $title . apply_filters('example_filter', '');
});


// Filter priority
function mytheme_custom_excerpt_length($t1)
{
    return $t1 . ' one ';
}
add_filter('example_filter', 'mytheme_custom_excerpt_length', 91);

function mytheme_custom_excerpt_length1($title)
{
    return $title . ' two ';
}
add_filter('example_filter', 'mytheme_custom_excerpt_length1', 92);
