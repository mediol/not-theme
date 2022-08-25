<?php 
    $page_id = get_the_ID();
    $hero_tests = carbon_get_post_meta($page_id, 'hero_tests_list');
    $hero_bg = wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero_bg'), 'hero_bg');
    $offer_list = carbon_get_post_meta($page_id, 'offer_list');
	$checkbox = carbon_get_post_meta( $page_id, 'crb_show_section' );
?>

            <?php if ( $checkbox ) : ?>
            <section class="offers" id="offers">
                <div class="container">
                    <?php if(!empty( carbon_get_post_meta($page_id, 'offer_title') )) : ?>
                        <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'offer_title') ?></h2>
                    <?php endif ?>
                    <?php if(!empty( $offer_list )) : ?>
                    <ul class="offer__list">
                        <?php foreach( $offer_list as $offer ) : ?>
                        <li class="offer__item">
                            <a href="<?php echo $offer['offer_btn_link'] ?>" target="_blank">
                                <div class="offer_img">
                                        <img src="<?php echo wp_get_attachment_image_url($offer['offer_img']) ?>" alt="">
                                </div>
                            </a>
                            <div class="offer_text">
                                <h3><?php echo $offer['offer_name'] ?></h3>
                                <p><?php echo $offer['offer_desc'] ?></p>
                                <a href="<?php echo $offer['offer_btn_link'] ?>" class="book book_light">Book test now</a>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                    <?php endif ?>
                </div>
            </section>
            <?php endif ?>