<?php
/**
 * Template part for displaying post title.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalcare
 */

$utility          = dentalcare_utility()->utility;
$blog_layout_type = get_theme_mod( 'blog_layout_type', dentalcare_theme()->customizer->get_default( 'blog_layout_type' ) );

if ( is_single() ) :

	$title_html = '<h5 %1$s>%4$s</h5>';

elseif ( 'default-modern' === $blog_layout_type ) :

	$title_html = '<h5 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h5>';

else :

	$title_html = '<h5 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h5>';

endif;

$utility->attributes->get_title( array(
	'class' => 'entry-title',
	'html'  => $title_html,
	'echo'  => true,
) );
