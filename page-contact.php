<?php
/*
Template Name: Contact Us
*/
?>

<?php 
    $page_id = get_the_ID();
    $social_list = $GLOBALS['not']['social_list'];
?>

<?php get_header(); ?>

        <main class="main">

            <section class="page-contact">
                <div class="container">
                    <h1>Contact with us <span>for personal offer</span></h1>
                    <div class="contact__form">
                        <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]') ?>
                    </div>
                    <div class="contact__details">
                        <a href="mailto:<?php echo carbon_get_theme_option('footer_email') ?>" class="footer-link footer__mail">
                            <span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg" alt="">
                            </span>
                            <?php echo carbon_get_theme_option('footer_email') ?>
                        </a>
                        <a href="tel:<?php echo carbon_get_theme_option('phone_link') ?>" class="footer-link footer__phone">
                            <span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/grey_phone.svg" alt="">
                            </span>
                            <?php echo carbon_get_theme_option('phone_number') ?>
                        </a>
                        <a href="<?php echo carbon_get_theme_option('address_link') ?>" target="_blank" class="footer-link footer__address">
                            <span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/grey_marker.svg" alt="">
                            </span>
                            <?php echo carbon_get_theme_option('address') ?>
                        </a>
                        <ul class="footer-socials">
                        <?php foreach ($social_list as $social_item) : ?>
                                <?php if ( !empty( $social_item['socials_link'] ) && !empty( $social_item['socials_img'] ) ) : ?>
                                <li class="footer-socials__item">
                                    <a href="<?php echo $social_item['socials_link'] ?>" class="footer-socials__link">
                                        <img src="<?php echo $social_item['socials_img'] ?>" class="footer-socials__img">
                                    </a>
                                </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </section>
            
        </main>

<?php get_footer(); ?>
