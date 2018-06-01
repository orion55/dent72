<?php
/**
 * Template part for posts pagination.
 *
 * @package Dentalcare
 */

the_posts_pagination(
	array(
		'prev_text' => sprintf( '%s %s', '<i class="nc-icon-mini arrows-1_minimal-left"></i>', esc_html__( 'PREV', 'dentalcare' ) ),
		'next_text' => sprintf( '%s %s', esc_html__( 'NEXT', 'dentalcare' ), '<i class="nc-icon-mini arrows-1_minimal-right"></i>' ),
	)
);
