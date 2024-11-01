=== Simple Buzz Link ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: Google, Buzz, Social, Link
Requires at least: 2.0.0
Tested up to: 3.0.1
Stable tag: 1.0

Simple Buzz Link displays a link allowing people to bookmark a post/page on Google Buzz.

== Description ==

The code for Simple Buzz Link should be added to the bottom of appropriate post/page templates within your theme (and in the case of posts, within the loop).

Simple Buzz Link simply returns a URL - this URL is a link to Google Reader with your post/page URL within it - assuming the user has Google Reader linked to Buzz (which it does by default), it will appear.

Here's an example of how to implement it...

`<a href="<?php simple_buzz_link(''); ?>">Send to Google Buzz</a>`

This will display the text "Send to Google Buzz" on your page/post. When clicked, it will take you to Google Reader.

The only parameter is a URL - however, if this is left blank the current URL will automatically be used.

The following is an example of how it could be used, with a `function_exists` check so that it doesn't cause problems if the plugin is not active...

`<?php if (function_exists('simple_buzz_link')) : ?>`
`<a href="<?php simple_buzz_link(''); ?>">Send to Google Buzz</a>`
`<?php endif; ?>`

== Installation ==

1. Upload the entire `simple-buzz-link` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. There is no options screen - configuration is done in your code.

== Frequently Asked Questions ==

= How can I get help or request possible changes =

Feel free to report any problems, or suggestions for enhancements, to me either via [my contact form](http://www.artiss.co.uk/contact "Contact Me") or by [the plugins' homepage](http://www.artiss.co.uk/simple-buzz-link "Simple Buzz Link").

== Changelog ==  
  
= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release