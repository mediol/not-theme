<?php
/*
Template Name: UA Support
*/
?>

<?php 
    $page_id = get_the_ID();
    $gallery_list = carbon_get_post_meta( $page_id, 'gallery_list' );
    $fonds_list = carbon_get_post_meta( $page_id, 'fonds_list' );
?>

<?php get_header(); ?>

    <section class="ua_support_page">
        <div class="section_left">
            <h1><?php echo the_title() ?></h1>
            <p><?php echo carbon_get_post_meta( $page_id, 'section_desc' ) ?></p>
        </div>
        <div class="section_right" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
    </section>
    <section class="ua_support_gallery">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/loc_fac_circle.svg" alt="" class="decor">
        <div class="container">
            <div class="section_left">
                <iframe src="https://www.youtube.com/embed/0Vv30JAFcx4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!--                --><?php
//                    $img = wp_get_attachment_image_src(carbon_get_post_meta( $page_id, 'support_gallery_single' ), 'thumbnail_978x659');
//                    $img_alt = get_post_meta( carbon_get_post_meta( $page_id, 'support_gallery_single' ), '_wp_attachment_image_alt', true );
//                ?>
<!--                <img src="--><?php //echo $img[0] ?><!--" alt="--><?php //echo $img_alt ?><!--" loading="lazy">-->
            </div>
            <div class="section_right">
                <?php if( ! empty( $gallery_list ) ) : ?>
                <ul class="gallery_list">
	                <?php foreach ( $gallery_list as $item ) : ?>
                    <li class="gallery_item">
	                    <?php echo wp_get_attachment_image( $item['gallery_item'], 'thumbnail_484x313' ) ?>
                    </li>
	                <?php endForeach ?>
                </ul>
	            <?php endif ?>
            </div>
        </div>
    </section>
    <section class="ua_support_content">
        <div class="container">
            <div class="section_title">
                <h2><?php echo carbon_get_post_meta( $page_id, 'content_title' ) ?></h2>
            </div>
            <div class="section_content">
	            <?php echo carbon_get_post_meta( $page_id, 'content_desc' ) ?>
            </div>
        </div>
    </section>
    <section class="ua_support_fonds">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/whyus_fac_circle.svg" alt="" class="decor">
        <div class="container">
	        <?php if( ! empty( $fonds_list ) ) : ?>
                <ul class="fonds_list">
			        <?php foreach ( $fonds_list as $item ) : ?>
                        <li class="fond_item">
                            <div class="fond_meta">
					            <?php echo wp_get_attachment_image( $item['fond_logo'], 'full' ) ?>
                                <h3><?php echo $item['fond_name'] ?></h3>
                            </div>
                            <p><?php echo $item['fond_desc'] ?></p>
                            <a href="<?php echo $item['fond_link'] ?>" class="fond_link" target="_blank" rel="nofollow">Donate Now</a>
                        </li>
			        <?php endForeach ?>
                </ul>
	        <?php endif ?>
        </div>
    </section>

<?php get_footer(); ?>