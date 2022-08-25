<?php
/*
Template Name: Why Us
*/
?>

<?php 
    $page_id = get_the_ID();
?>

<?php get_header(); ?>

        <main class="main">

            <!-- HERO -->
            <?php get_template_part( 'template-parts/why-us/whyus-hero' ); ?>
            <!-- PARTNERS -->
            <?php get_template_part( 'template-parts/partners' ); ?>
            <!-- BUSINESS -->
            <?php get_template_part( 'template-parts/why-us/business' ); ?>
            <!-- COMPANIES -->
            <?php get_template_part( 'template-parts/companies' ); ?>
            <!-- FAQ -->
            <?php get_template_part( 'template-parts/faq' ); ?>
            <!-- SERVE -->
            <?php get_template_part( 'template-parts/serve' ); ?>
            <!-- CONTACT -->
            <?php get_template_part( 'template-parts/contact' ); ?>
            
        </main>

<?php get_footer(); ?>
