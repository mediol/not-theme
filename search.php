<?php
/**
 * Search template.
 *
 * @package base
 */
?>
<?php get_header() ?>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><?= __('Search page') ?></h2>
            </div>
        </div>
        <div class="blog_listing">
            <?php
            $args = array_merge( $wp_query->query, array( 'post_type' => "post") );
            query_posts($args);
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/blog/list_item_post');
                }
            }else{
                get_template_part('template-parts/blog/not_found');
            } ?>
        </div>
        <?php get_template_part('template-parts/blog/block_pagination'); ?>
    </section>

<?php get_footer() ?>