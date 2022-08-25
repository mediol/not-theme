<?php
/*
Template Name: Ready location
Template Post Type: location
*/

    $page_id = get_the_ID();
?>

<?php get_header(); ?>

        <main class="main">

            <!-- HERO -->
            <?php get_template_part( 'template-parts/loc-parts/loc-hero' ); ?>
            <!-- OFFERS -->
            <?php get_template_part( 'template-parts/loc-parts/loc-offers' ); ?>
            <!-- CONTACT -->
            <?php get_template_part( 'template-parts/loc-parts/loc-contact' ); ?>
            <!-- COMPANIES -->
            <?php get_template_part( 'template-parts/companies' ); ?>
            <!-- FAQ -->
            <?php get_template_part( 'template-parts/faq' ); ?>
            
        </main>

<?php get_footer(); ?>