<?php
/*
Template Name: Find Location
*/
?>

<?php 
    $page_id = get_the_ID();
    $loc_cat_args = [
        'taxonomy'     => 'location-categories',
        'type'         => 'location',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => 1,
        'exclude'      => '',
        'include'      => '',
        'number'       => 0,
        'pad_counts'   => false,
    ];
    $loc_categories = get_categories($loc_cat_args);
?>

<?php get_header(); ?>

        <main class="main">

            <section class="find-location">
                <div class="container">
                    <div class="loc__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.5589593765326!2d-80.40321689999999!3d25.685911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9c0fbb439b96b%3A0x112f586410d502a8!2zMTMwMjcgU1cgODh0aCBTdCwgTWlhbWksIEZMIDMzMTg2LCDQodC_0L7Qu9GD0YfQtdC90ZYg0KjRgtCw0YLQuCDQkNC80LXRgNC40LrQuA!5e0!3m2!1suk!2sua!4v1650983945937!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="loc__select">
                        <h1 class="section-title">Find your nearby <span>location</span></h1>
                        <form action="#" class="hero-main__form">
                            <select class="state">
                                <?php foreach( $loc_categories as $single_cat ) : ?>
                                    <option value="<?php echo $single_cat -> term_id ?>"><?php echo $single_cat -> name ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="locations_by_cats">
                                <?php foreach( $loc_categories as $single_cat ) :
                                    $cat_id = $single_cat->term_id;
                                ?>
                                <select class="cat_locations" id="loc_cat_<?php echo $cat_id ?>">
                                    <?php
                                        $args = [
                                            'post_type' => 'location',
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'location-categories',
                                                    'field' => 'id',
                                                    'terms' => $cat_id,
                                                ]
                                            ],
                                        ];
                                        $query = new WP_Query;
                                        $locations = $query->query($args);
                                        foreach( $locations as $loc ) : ?>
                                        <option value="<?php echo get_permalink( $loc -> ID ) ?>"><?php echo $loc -> post_title ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?php endforeach ?>
                            </div>
                            <a href="" class="book loc_link">Find Location</a>
                        </form>
                    </div>
                </div>
            </section>
            
        </main>

<?php get_footer(); ?>