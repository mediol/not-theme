<div <?php post_class('not_listing_box') ?>>
    <div class="not_listing_img"><?php
        $img         = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail_942x750' );
        $image_alt   = get_post_meta($img, '_wp_attachment_image_alt', true);
        $image_alt   = ( $image_alt ? $image_alt : get_the_title() );
        $src         = ( isset( $img[0] ) ?$img[0] :get_template_directory_uri() . '/assets/img/noimage.png' ); ?>
        <a href="<?php the_permalink() ?>">
            <img src="<?php echo( $img[0] ?? esc_url( get_template_directory_uri() ) . '/assets/img/noimage.png' ) ?>" alt="<?php echo esc_attr( $image_alt ) ?>">
        </a>
        <div class="post_tags">
		    <?php echo the_tags('', '') ?>
        </div>
    </div>
    <div class="not_listing_item">
        <div class="not_listing_item_wrap">
            <div class="post_details">
                <p class="post_date"><?php echo get_the_date( 'd.m.Y' ) ?></p>
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                    </a>
                </h2>
            </div>
            <div class="excerpt"><?php the_excerpt() ?></div>
            <a href="<?php echo the_permalink() ?>" class="learn_more"><span>Learn more</span></a>
            <a href="<?php echo the_permalink() ?>" class="dots"><span>...</span></a>
        </div>
    </div>
</div>