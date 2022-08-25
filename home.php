<?php

/**
 * Main loop template.
 */
?>
<?php get_header() ?>

<section class="blog_listing">
    <div class="container">
        <h1 class="blog_heading"><?php echo get_the_title(get_option('page_for_posts')) ?></h1>
        <div class="search">
            <form action="<?php bloginfo( 'url' ); ?>" method="get">
                <input type="search" name="s" maxlength="70" placeholder="Search" required/>
                <input type="submit" value="">
            </form>
        </div>
        <div class="tags">
            <?php
            $tags =  get_tags([
                'number'       => 0,
                'offset'       => 0,
                'orderby'      => 'id',
                'order'        => 'ASC',
                'hide_empty'   => false,
                'fields'       => 'all',
                'slug'         => '',
                'hierarchical' => true,
                'name__like'   => '',
                'pad_counts'   => false,
                'get'          => '',
                'child_of'     => 0,
                'parent'       => '',
            ]);
            foreach ($tags as $tag) { ?>
                <a href="<?php echo get_tag_link( $tag -> term_id ); ?>"><?php echo $tag -> name ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="blog_listing">
            <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/blog/list_item_post');
            } ?>
        </div>
    </div>
    <div class="pages">
        <?php get_template_part('template-parts/blog/block_pagination');
        } else {
            get_template_part('template-parts/blog/not_found');
        } ?></div>
</section>

<?php get_footer() ?>
