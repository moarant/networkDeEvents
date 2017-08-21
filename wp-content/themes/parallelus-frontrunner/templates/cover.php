<?php
/**
 * Template Name: Cover
 *
 * The template for displaying full background cover pages.
 *
 * Cover templates must be registered with the filter 'rf_is_cover_template'
 * See the example in functions.php or search the template files.
 */

// Disable default content containers.
add_filter('theme_template_has_layout', function(){ return true; });

get_header();

get_footer();