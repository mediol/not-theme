<?php
/*
Template Name: Home page
*/
?>

<?php 
    $page_id = get_the_ID();
?>

<?php get_header(); ?>

        <main class="main">

            <!-- HERO -->
            <?php get_template_part( 'template-parts/hero' ); ?>
            <!-- WHAT -->
            <?php get_template_part( 'template-parts/what' ); ?>
            <!-- SERVE -->
            <?php get_template_part( 'template-parts/serve' ); ?>
            <!-- COMPANIES -->
            <?php get_template_part( 'template-parts/companies' ); ?>
            <!-- PARTNERS -->
            <?php get_template_part( 'template-parts/partners' ); ?>
            <!-- FAQ -->
            <?php get_template_part( 'template-parts/faq' ); ?>
            <!-- CONTACT -->
            <?php get_template_part( 'template-parts/contact' ); ?>
            
        </main>

<?php get_footer(); ?>
