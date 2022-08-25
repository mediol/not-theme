<?php get_header(); ?>

<main>
    <div class="container">
        <?php the_post(); ?>
        <h1 class="page__title"><?php the_title() ?></h1>
        <div class="page__content">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>