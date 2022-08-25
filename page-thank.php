<?php
/*
Template Name: Thank page
*/
?>

<?php 
    $page_id = get_the_ID();
?>

<?php get_header('custom'); ?>

        <main>
            <section class="thank">
                <div class="container">
                    <div class="page_title">
                        <h1><?php the_title() ?></h1>
                        <p class="subtitle">for booking with <?php echo get_bloginfo('name'); ?></p>
                    </div>
                    <div class="request">
                        <h2>Required next step</h2>
                        <p><?php echo carbon_get_post_meta($page_id, 'request_text'); ?></p>
                        <button class="book book_light open-widget"><?php echo carbon_get_post_meta($page_id, 'thank_btn_text'); ?></button>
                    </div>
                    <div class="details">
                        <p>Your appoinment is booked at the following COVID clinic:</p>
                        <a href="<?php echo carbon_get_theme_option('address_link') ?>" target="_blank" class="footer-link footer__address">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/map-mark.svg" alt="">
                            <?php echo carbon_get_theme_option('address') ?>
                        </a>
                        <a href="tel:<?php echo carbon_get_theme_option('phone_link') ?>" class="footer-link footer__phone">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/phone_footer.svg" alt="">
                            <?php echo carbon_get_theme_option('phone_number') ?>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <?php get_template_part('template-parts/widget'); ?>

<?php wp_footer(); ?>