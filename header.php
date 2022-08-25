
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php echo wp_site_icon(); ?>
    <?php wp_head(); ?>
</head>

<?php
    $social_list = $GLOBALS['not']['social_list'];
?>

<body <?php body_class()?>>
    <?php wp_body_open() ?>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="container">
                    <?php echo get_custom_logo(); ?>
                    <div class="header__wrap">
                        <div class="menu-sidebar">
                            <div class="sidebar-wrap">
                                <?php
                                    wp_nav_menu( [
                                        'theme_location'  => 'header_menu',
                                        'container'       => 'nav',
                                        'menu_class'      => 'menu__list',
                                    ] );
                                ?>
                                <div class="menu-contacts">
                                    <button type="submit" class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
                                    <a href="<?php echo get_home_url(null, 'contacts') ?>" type="submit" class="book book_light"><?php echo $GLOBALS['not']['contact_btn'] ?></a>
                                    <ul class="footer-socials">
                                        <?php foreach ($social_list as $social_item) : ?>
                                            <?php if ( !empty( $social_item['footer_socials_link'] ) && !empty( $social_item['footer_socials_img'] ) ) : ?>
                                            <li class="footer-socials__item">
                                                <a href="<?php echo $social_item['footer_socials_link'] ?>" class="footer-socials__link">
                                                    <img src="<?php echo $social_item['footer_socials_img'] ?>" class="footer-socials__img">
                                                </a>
                                            </li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header__phone">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/phone.svg" alt="">
                            <a href="tel:<?php echo $GLOBALS['not']['phone_link'] ?>" class="header__phone-link">
                                <span><?php echo $GLOBALS['not']['phone_number'] ?></span>
                                <span><?php echo $GLOBALS['not']['phone_text'] ?></span>
                            </a>
                        </div>
                        <a class="menu-btn">
                            <span></span>
                        </a>
                    </div>
            </div>
        </header>