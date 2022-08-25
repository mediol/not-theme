<?php
$page_id = get_the_ID();
$companies_list = $GLOBALS['not']['companies_list'];
?>

<section class="partners">
    <div class="container">
        <?php if (!empty($companies_list)) : ?>
        <ul class="companies__list">
            <?php foreach ($companies_list as $companies_item) : ?>
            <li class="companies__item">
                <a href="<?php echo $companies_item['companies__list_link'] ?>" class="companies__link">
                    <img src="<?php echo $companies_item['companies_list_img'] ?>" alt="">
                </a>
            </li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
    </div>
</section>