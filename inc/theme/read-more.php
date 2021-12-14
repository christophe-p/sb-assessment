<?php

// Replace the excerpt default "more" text with a custom link
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> Read more <i class="fas fa-arrow-right"></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
