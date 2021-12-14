<?php

// Create a custom block category
function azarahealthcare_block_categories( $categories, $post ) {
    //if ( $post->post_type !== 'post' ) {
      //  return $categories;
    //}
    return array_merge(
        array(
            array(
                'slug' => 'azarahealthcare',
                'title' => __( 'Azara Healthcare', 'azarahealthcare' ),
                //'icon'  => 'wordpress',
            ),
        ),
        $categories
    );
}
add_filter( 'block_categories', 'azarahealthcare_block_categories', 10, 2 );

// Create custom blocks
add_action('acf/init', 'azarahealthcare_acf_init_block_types');
function azarahealthcare_acf_init_block_types() {

    // Check if function exists
    if( function_exists('acf_register_block_type') ) {

        // Register FAQ block
        acf_register_block_type( array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'description'       => __('A custom FAQ block.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/faq.php',
            'category'          => 'azarahealthcare',
            'icon'              => 'editor-help',
            'keywords'          => array( 'faq', 'frequently asked questions' ),
        ) );

        // Register CTA block
        acf_register_block_type( array(
            'name'              => 'CTA',
            'title'             => __('CTA'),
            'description'       => __('A custom CTA block.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/cta.php',
            'category'          => 'azarahealthcare',
            'icon'              => 'megaphone',
            'keywords'          => array( 'cta', 'call to action' ),
            // Set block alignment to full-width by default
            'align'             => 'full',
            'supports' => array(
              // Limit block alignment options to full-width
              'align' => array( 'full' ),
            ),
        ) );

    }
}
