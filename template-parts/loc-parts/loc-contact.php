<?php
    $page_id = get_the_ID();
    $hiw_steps = carbon_get_post_meta($page_id, 'hiw_steps');
?>
<section class="contact">
    <div class="container">
        <div class="hiw-steps wow animate__animated animate__fadeInRight" data-wow-delay="300ms" data-wow-duration="1.5s">
            <h3 class="hiw-steps__title"><?php echo carbon_get_post_meta($page_id, 'hiw_steps_title')?></h3> 
            <?php if(! empty($hiw_steps)) : ?>
            <ul class="hiw-steps__list">
                <?php foreach($hiw_steps as $step_id => $step) : ?>
                <li class="hiw-steps__item">
                    <span>0<?php echo $step_id+1 ?></span>
                    <p><?php echo $step['hiw_step_text']?></p>
                </li>
                <?php endforeach ?>
            </ul>
            <?php endif ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/loc_circle.svg" alt="">
        </div>
        <div class="contact__text wow animate__animated animate__fadeInLeft">
            <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'loc_contact_title') ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]') ?>
        </div>
    </div>
</section>