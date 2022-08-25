<?php
/*
Template Name: Coming Soon
Template Post Type: location
*/
?>

<?php 
    $page_id = get_the_ID();
?>

<?php get_header('custom'); ?>

        <main>
            <section class="soon">
                <div class="container">
                    <div>
                        <div class="page_title">
                            <h1><?php the_title() ?></h1>
                        </div>
                        <div class="request">
                            <p><?php echo carbon_get_post_meta($page_id, 'coming_soon_text'); ?></p>
                            <button class="book book_light open-widget">Find location</button>
                        </div>
                    </div>
                    <ul class="details__list">
                        <li class="details_item loc_shedule"><?php echo carbon_get_post_meta($page_id, 'loc_shedule') ?></li>
                        <li class="details_item loc_address"><?php echo carbon_get_post_meta($page_id, 'loc_address') ?></li>
                        <li class="details_item loc_phone"><a href="<?php echo carbon_get_post_meta($page_id, 'loc_phone_link') ?>"><?php echo carbon_get_post_meta($page_id, 'loc_phone') ?></a></li>
                    </ul>
                </div>
            </section>
        </main>

        <?php get_template_part('template-parts/widget'); ?>

        <?php wp_footer(); ?>