<?php
    $page_id = get_the_ID();
    $serve_list = carbon_get_post_meta($page_id, 'serve_list');
    $query = new WP_Query;
    $locations = $query->query('post_type=location');
?>


<section class="serve">
    <div class="serve__columns">
        <div class="serve__img">
            <?php echo wp_get_attachment_image(carbon_get_theme_option('serve_img'), 'thumbnail_978x659') ?>
        </div>
        <div class="serve__text">
            <h2 class="serve__title section-title"><?php echo $GLOBALS['not']['serve_title'] ?></h2>
            <ul class="serve__list">    
                <?php foreach( $locations as $loc ) : ?>
                <li class="serve__item">
                    <a href="<?php echo get_permalink( $loc ) ?>"><?php echo $loc -> post_title ?></a>    
                </li>
                <?php endforeach ?>
            </ul>
            <button class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
        </div>
    </div>
</section>