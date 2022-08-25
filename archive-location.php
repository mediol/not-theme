<?php 
    $page_id = get_the_ID();
    $locations = get_posts([
        'post_type' => 'location',
        'category'  =>  '$cat_id',
        'orderby'   => 'name',
        'order'     => 'ASC',
    ]);
?>

<?php get_header(); ?>

        <main class="main">
            <section class="locations-archive">
                <div class="container">
                    <?php if(!empty($locations)) : ?>
                        <?php foreach($locations as $loc) : ?>
                            <h2><a href="<?php echo get_permalink($loc -> term_id) ?>"><?php echo $loc -> post_title ?></a></h2>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </section>
        </main>

<?php get_footer(); ?>