<?php

add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'builder-block',
                'title' => 'Builder Blocks',
            ),
        )
    );
}, 10, 2 );

add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
      // register a process block
      acf_register_block(
          array(
              'name' => 'process',
              'title' => __('process'),
              'description' => __('process with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('processcontent', 'quote'),
          )
      );
      // register a process block
      acf_register_block(
          array(
              'name' => 'about',
              'title' => __('about'),
              'description' => __('about with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('aboutcontent', 'quote'),
          )
      );
      // register a process block
      acf_register_block(
          array(
              'name' => 'testimonials',
              'title' => __('testimonials'),
              'description' => __('testimonials with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('testimonialscontent', 'quote'),
          )
      );
      // register a process block
      acf_register_block(
          array(
              'name' => 'footer',
              'title' => __('footer'),
              'description' => __('footer with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('footerscontent', 'quote'),
          )
      );
      // register a contact us block
      acf_register_block(
          array(
              'name' => 'contactus',
              'title' => __('contactus'),
              'description' => __('contactus with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('contactuscontent', 'quote'),
          )
      );
      // register a new gallery block
      acf_register_block(
          array(
              'name' => 'new-gallery',
              'title' => __('newgallery'),
              'description' => __('new gallery with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('new gallery content', 'quote'),
          )
      );
      // register a by numbers block
      acf_register_block(
          array(
              'name' => 'by-numbers',
              'title' => __('by numbers'),
              'description' => __('by numbers with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('newslidercontent', 'quote'),
          )
      );
      // register a by numbers block
      acf_register_block(
          array(
              'name' => 'certificates',
              'title' => __('certificates'),
              'description' => __('certificates with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('newslidercontent', 'quote'),
          )
      );
      // register a new slider block
      acf_register_block(
          array(
              'name' => 'new-slider',
              'title' => __('new slider'),
              'description' => __('new slider with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('newslidercontent', 'quote'),
          )
      );
      // register a recycling-army block
      acf_register_block(
          array(
              'name' => 'recycling-army',
              'title' => __('recycling army'),
              'description' => __('recycling army with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('recyclingarmycontent', 'quote'),
          )
      );
      // register a social links block
      acf_register_block(
          array(
              'name' => 'social-links',
              'title' => __('social links'),
              'description' => __('social links with description'),
              'render_callback' => 'my_acf_block_render_callback',
              'category' => 'builder-block',
              'icon' => 'format-gallery',
              'keywords' => array('sociallinkscontent', 'quote'),
          )
      );
        // register a Block Image With Content
        acf_register_block(
            array(
                'name' => 'blockimagewithcontent',
                'title' => __('Image & Content'),
                'description' => __('Block Image With Title and Description'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'format-gallery',
                'keywords' => array('blockimagewithcontent', 'quote'),
            )
        );

        // register a Block Slider
        acf_register_block(
          array(
            'name'				=> 'latest-news',
            'title'				=> __('Latest News'),
            'description'		=> __('Block Image With Title and Description'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'c95-block',
            'icon'				=> 'admin-site-alt',
            'keywords'			=> array( 'News', 'Latest' ),
          )
        );

        // register a Block Slider
        acf_register_block(
            array(
                'name' => 'slider',
                'title' => __('Block Slider'),
                'description' => __('Block slider images'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'images-alt2',
                'keywords' => array('slider', 'quote'),
            )
        );

        // register a Block Qoute
        acf_register_block(
            array(
                'name' => 'blockqoute',
                'title' => __('Block Qoute'),
                'description' => __('Block qoute'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'format-quote',
                'keywords' => array('blockqoute', 'quote'),
            )
        );

        // register a Block Grid
        acf_register_block(
            array(
                'name' => 'grid',
                'title' => __('Block Grid'),
                'description' => __('Block Grid'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'tagcloud',
                'keywords' => array('grid', 'quote'),
            )
        );

        // register a Block Gallery
        acf_register_block(
            array(
                'name' => 'gallery',
                'title' => __('Block Gallery'),
                'description' => __('Block Gallery'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'format-gallery',
                'keywords' => array('gallery', 'quote'),
            )
        );

        // register a Block Gallery
        acf_register_block(
            array(
                'name' => 'content',
                'title' => __('Block Content'),
                'description' => __('Block Content'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'editor-aligncenter',
                'keywords' => array('content', 'quote'),
            )
        );

        // register a Block Slider Grid
        acf_register_block(
            array(
                'name' => 'slider-grid',
                'title' => __('Slider Grid'),
                'description' => __('Slider Grid in Home top'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'slides',
                'keywords' => array('slider', 'gallery'),
            )
        );
        // register a Block Subscribe
        acf_register_block(
            array(
                'name' => 'subscribe',
                'title' => __('Block Subscribe'),
                'description' => __('Subscribe in Home Bottom'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'builder-block',
                'icon' => 'megaphone',
                'keywords' => array('subscribe', 'gallery'),
            )
        );
    }
}

function my_acf_block_render_callback($block)
{

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if (is_admin()) {
        if (file_exists(get_template_directory() . "/views/builder/backend/block-{$slug}.php")) {
            include get_template_directory() . "/views/builder/backend/block-{$slug}.php";
        }
    } else {
        if (file_exists(get_template_directory() . "/views/builder/frontend/block-{$slug}.php")) {
            include get_template_directory() . "/views/builder/frontend/block-{$slug}.php";
        }
    }
}
