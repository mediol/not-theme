<?php 
    $page_id = get_the_ID();
    $hero_tests = carbon_get_post_meta($page_id, 'hero_tests_list');
?>

            <section class="hero">
                <div class="hero-main">
                    <div class="container">
                        <h1 class="hero-main__title loc_title">Reliable, Tests<br>for <span>your business <span class="grey">in <?php echo get_the_title() ?></span></span></h1>
                    </div>
                </div>
                <div class="hero-bottom loc-hero-bottom" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                    <div class="container">
                        <ul class="details__list">
                            <li class="details_item loc_shedule"><?php echo carbon_get_post_meta($page_id, 'loc_shedule') ?></li>
                            <li class="details_item loc_address"><?php echo carbon_get_post_meta($page_id, 'loc_address') ?></li>
                            <li class="details_item loc_phone"><a href="<?php echo carbon_get_post_meta($page_id, 'loc_phone_link') ?>"><?php echo carbon_get_post_meta($page_id, 'loc_phone') ?></a></li>
                        </ul>
                        <a href="#offers" class="book book_light"><?php echo $GLOBALS['not']['book_btn'] ?></a>
                    </div>
                </div>     
            </section>