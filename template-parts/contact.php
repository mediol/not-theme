<?php
    $page_id = get_the_ID();
?>
<section class="contact">
    <div class="container">
        <div class="contact__img wow animate__animated animate__fadeInRight">
            <img src="<?php echo $GLOBALS['not']['contact_img'] ?>" alt="">
        </div>
        <div class="contact__text wow animate__animated animate__fadeInLeft">
            <h2 class="section-title">
                <?php echo $GLOBALS['not']['contact_title'] ?>
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]') ?>
        </div>
    </div>
</section>