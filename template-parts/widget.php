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

<div class="widget_wrap">
    <div class="widget">
        <div class="widget_top">
            <div class="logo_wrap">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/widget_back_arrow.svg" alt="" class="back">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="" class="logo">
            </div>
            <div class="close_btn">
                <span></span>
            </div>
        </div>
        <div class="widget_body">
            <div class="widget_head">
                <div class="step_pointers">
                    <div class="point active"><span></span></div>
                    <div class="point"><span></span></div>
                    <div class="point"><span></span></div>
                </div>
                <div class="step_title_wrap">
                    <h2 class="step_title active"><?php echo $GLOBALS['not']['step_1_title'] ?></h2>
                    <h2 class="step_title"><?php echo $GLOBALS['not']['step_2_title'] ?></h2>
                    <h2 class="step_title"><?php echo $GLOBALS['not']['step_3_title'] ?></h2>
                    <!-- <form action="">
                        <input type="search" name="" id="" placeholder="Find by ZIP">
                        <input type="submit" value="">
                    </form> -->
                </div>
            </div>
            <!-- step 1 -->
            <ul class="states active">
                <?php foreach( $loc_categories as $single_cat ) : ?>
                    <li
                        class="state_item <?php echo $single_cat -> slug ?>-state"
                        data-state="loc_cat_<?php echo $single_cat -> term_id ?>">
                        <?php echo $single_cat -> name ?>
                    </li>
                <?php endforeach ?>
            </ul>

            <!-- step 2 -->
            <?php foreach( $loc_categories as $single_cat ) : ?><?php
                $cat_id = $single_cat->term_id;
            ?>
            <ul class="locations" id="loc_cat_<?php echo $cat_id ?>">
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
                    <li class="location_item">
                        <h2><?php echo $loc -> post_title ?></h2>

                        <!-- step 3 -->
                        <ul class="loc_offers">
                        <?php 
                            $loc_offers = carbon_get_post_meta($loc -> ID, 'offer_list');
                            foreach($loc_offers as $offer) : ?>
                            <a href="<?php echo $offer['offer_btn_link'] ?>" class="offer_link">
                                <li class="offer_item">
                                    <div class="offer_img">
                                        <?php echo wp_get_attachment_image( $offer['offer_img'], 'thumbnail_177x115' ) ?>
                                    </div>
                                    <div class="offer_desc">
                                        <h3><?php echo $offer['offer_name'] ?></h3>
                                        <div class="offer_details">
                                            <?php if (! empty($offer['offer_price'])) : ?>
                                                <p class="price">&#36;<?php echo $offer['offer_price'] ?></p>
                                            <?php endif ?>
                                            <div class="timing"><?php echo $offer['offer_timing'] ?></div>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        <?php endforeach ?>
                        </ul>
                    </li>
                <?php endforeach ?>
            </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>