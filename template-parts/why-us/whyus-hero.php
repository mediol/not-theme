<?php
    $page_id = get_the_ID();
    $all_categories = get_categories($loc_cat_args);
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

<section class="whyus__hero">
    <div class="whyus__hero-img">
        <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'whyus_hero_img'), 'full') ?>" alt="">
    </div>
    <div class="whyus__hero-text">
        <h1 class="section-title"><?php echo carbon_get_post_meta($page_id, 'whyus_hero_title') ?></h1>
        <p class="subtitle"><?php echo carbon_get_post_meta($page_id, 'whyus_hero_subtitle') ?></p>
        <form class="hero-main__form">
            <select class="state">
                <?php foreach( $loc_categories as $single_cat ) : ?>
                    <option value="<?php echo $single_cat -> term_id ?>"><?php echo $single_cat -> name ?></option>
                <?php endforeach ?>
            </select>
            <div class="locations_by_cats">
                <?php foreach( $loc_categories as $single_cat ) :
                    $cat_id = $single_cat->term_id;
                ?>
                <select class="cat_locations loc_cat_<?php echo $cat_id ?>" id="loc_cat_<?php echo $cat_id ?>">
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
            <a href="" class="book loc_link"><?php echo $GLOBALS['not']['book_btn'] ?></a>
        </form>
    </div>
</section>