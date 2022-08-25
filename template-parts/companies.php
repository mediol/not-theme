<?php
    $page_id = get_the_ID();
    $companies_slider = carbon_get_post_meta($page_id, 'companies_slider');
    $companies_slider = $GLOBALS['not']['companies_slider'];
?>

<section class="companies">
    <div class="container">
        <h2 class="section-title wow animate__animated animate__fadeInLeft">
            <?php echo $GLOBALS['not']['companies_title'] ?>
        </h2>
        <?php if (!empty($companies_slider)) : ?>
            <div class="companies__slider wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s">
                <?php foreach ($companies_slider as $company_slide) : ?>
                    <div class="company-item">
                        <div class="company-item__info">
                            <img src="<?php echo $company_slide['companies_slider_img'] ?>" class="company-item__img">
                            <div class="company-item__info-right">
                                <p class="company-item__date"><?php echo $company_slide['companies_slider_date'] ?></p>
                                <h3 class="company-item__title"><?php echo $company_slide['companies_slider_name'] ?></h3>
                            </div>
                        </div>
                        <p class="company-item__text">
                            <?php echo $company_slide['companies_slider_text'] ?>
                        </p>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <button class="book open-widget wow animate__animated animate__fadeInLeft"><?php echo $GLOBALS['not']['book_btn'] ?></button>
    </div>
</section>