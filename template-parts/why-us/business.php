<?php 
    $page_id = get_the_ID();
    $section_desc = carbon_get_post_meta($page_id, 'business_desc');
    $business_option_list = carbon_get_post_meta($page_id, 'business_option_list');
?>

<section class="business">
    <div class="container">
        <div class="section__desc">
            <div class="title_wrap">
                <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'business_title') ?></h2>
                <button class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
            </div>
            <?php if(!empty($section_desc)) : 
                foreach ($section_desc as $desc_item) : ?>
                <p><?php echo $desc_item['desc_item'] ?></p>
            <?php endforeach;
            endif ?>
            <a href="<?php echo $loc_link; ?>" class="book"><?php echo $GLOBALS['not']['book_btn'] ?></a>
        </div>
        <?php if(!empty($business_option_list)) : ?>
        <ul class="business__option-list">
            <?php foreach ($business_option_list as $option_item) : ?>
                <li class="business__option-item">
                    <div class="title_wrap">
                        <p class="option_counter"><?php echo $option_item['option_counter'] ?></p>
                        <h3 class="option_title"><?php echo $option_item['option_title'] ?></h3>
                    </div>
                    <p class="option_desc"><?php echo $option_item['option_desc'] ?></p>
                </li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/loc_fac_circle.svg" alt="" class="decor">
    </div>
</section>