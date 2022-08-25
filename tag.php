<?php

/**
 * Main loop template.
 */
?>
<?php get_header() ?>

    <section class="blog_listing">
        <div class="container">
            <div class="row title_row">
                <h2><?php echo wp_title() ?></h2>
                <a href="<?php echo get_site_url( 'blog' ) ?>" class="back"><img src="<?php echo get_template_directory_uri() ?>/_slicing/assets/img/learn_more.svg" alt="">Back</a>
            </div>
            <div class="blog_listing">
                <?php
                if( is_tag() ){
                    $this_tag = $wp_query->queried_object->slug;
                    $tags_posts = get_posts( array ('numberposts' => 6, 'tag' => $this_tag) );
                    foreach( $tags_posts as $post ){
                        setup_postdata($post);
                        get_template_part('template-parts/blog/list_item_post');
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
        <div class="pages">
            <?php get_template_part('template-parts/blog/block_pagination'); ?>
        </div>
    </section>

<?php get_footer() ?>