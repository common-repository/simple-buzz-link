<?php
/*
Plugin Name: Simple Buzz Link
Plugin URI: http://www.artiss.co.uk/simple-buzz-link
Description: Creates a link to Google Buzz for each post or page
Version: 1.0
Author: David Artiss
Author URI: http://www.artiss.co.uk
*/
function simple_buzz_link($url="") {
    // Get the URL
    if ($url=="") {$url=get_permalink($post->ID);}
    // Output the resultant Google Buzz link
    echo "http://www.google.com/reader/link?url=".$url."&amp;title=".urlencode(html_entity_decode(get_the_title($post->ID),ENT_QUOTES,'UTF-8'));
    return;
}
?>