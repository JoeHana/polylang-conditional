# Polylang Conditional
This plugin is an extension to Polylang (for WordPress) and adds a conditional function and conditional shortcode to check against the current active language

## Installation ##
Simply download the ZIP, unpack it and upload its contents via FTP

## Options ##
This plugin does not have any options. After activation all features are useable

### Conditional Tag ###
is_language( $lang )

This can be used like any other conditional tag from wordpress.

Variables
$lang (string) - Define the language slug. If you want to use this to display content only for the german version of your site then you provide 'de'.

### Shortcode ###

Example:
[is_language lang="de"]CONTENT[/is_language]

