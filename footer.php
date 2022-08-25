        <?php
            $social_list = $GLOBALS['not']['social_list'];
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
            $loc_categories = get_categories( $loc_cat_args );
        ?>
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-top_wrap">
                        <button type="submit" class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
                        <a href="<?php echo get_home_url(null, 'contacts') ?>" type="submit" class="book book_light"><?php echo $GLOBALS['not']['contact_btn'] ?></a>
                        <a href="mailto:<?php echo $GLOBALS['not']['footer_email'] ?>" class="footer-link footer__mail">
                            <span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg" alt="">
                            </span>
                            <?php echo $GLOBALS['not']['footer_email'] ?>
                        </a>
                        <a href="tel:<?php echo $GLOBALS['not']['phone_link'] ?>" class="footer-link footer__phone">
                            <span>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/grey_phone.svg" alt="">
                            </span>
                            <?php echo $GLOBALS['not']['phone_number'] ?>
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
                    <a href="#header" class="footer__scroll-btn"></a>
                </div>
                <div class="footer-main">
                    <?php foreach($loc_categories as $category) : ?>
                        <div class="location-widget">
                            <h3><?php echo $category -> name ?></h3>
                            <ul class="location__list">
                            <?php 
                                $cat_id = $category -> term_id;
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
                                <li><a href="<?php echo get_permalink($loc) ?>"><?php echo $loc -> post_title ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="footer__mobile-btns">
                    <button class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
                    <a href="<?php echo get_home_url(null, 'contacts') ?>" class="book book_light"><?php echo $GLOBALS['not']['contact_btn'] ?></a>
                </div>
                <div class="footer-bottom">
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'foot_menu',
                            'container'       => null,
                            'menu_class'      => 'foot_menu',
                        ] );
                    ?>
                    <div class="footer-bottom-wrap">
                        <p class="footer-bottom__copy">&copy; <?php echo carbon_get_theme_option('footer_copy')?></p>
                        <a href="#" class="footer-bottom__company">
                            <span>Designed and maintained by</span>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ursa-logo.svg" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        </div>

        <?php get_template_part('template-parts/widget'); ?>

        <?php wp_footer(); ?>

        </body>

        </html>