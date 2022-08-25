<?php 
    $page_id = get_the_ID();
    $hero_tests = carbon_get_post_meta($page_id, 'hero_tests_list');
    $hero_bg = wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero_bg'), 'hero_bg');
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

            <section class="hero">
                <div class="hero-main">
                   <div class="container">
                       <div class="hero-main__cols">
                            <div class="hero-main__col">
                                <h1 class="hero-main__title section-title"><?php echo carbon_get_post_meta($page_id, 'hero_title')?></h1>
                            </div>
                            <div class="hero-main__col hero-main-tests">
                                <h3 class="hero-main-tests__title"><?php echo carbon_get_post_meta($page_id, 'hero_tests_list_title') ?> <span><?php echo carbon_get_post_meta($page_id, 'hero_tests_title_span') ?></span></h3>
                                <?php if(! empty($hero_tests)) : ?>
                                <ul class="hero-main-tests__list">
                                <?php foreach($hero_tests as $hero_test) : ?>
                                    <li class="hero-main-tests__item"><?php echo $hero_test['hero_test_item'] ?></li>
                                <?php endforeach ?>
                                </ul>
                                <?php endif ?>
                            </div>
                        </div>
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
                </div>
                <div class="hero-bottom" style="background-image: url(<?php echo $hero_bg ?>);">
                    <div class="container">
                        <h2 class="section-title section-title_light">
                            <?php echo carbon_get_post_meta($page_id, 'hero_bg_title')?>
                        </h2>
                        <button class="book book_light open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
                    </div>
                </div>     
            </section>