<?php
    $page_id = get_the_ID();
    $faq_list = $GLOBALS['not']['faq_list'];
?>
<section class="faq">
    <div class="container">
        <div class="faq__text wow animate__animated animate__fadeInLeft">
            <h2 class="section-title section-title_light"><?php echo $GLOBALS['not']['faq_title'] ?></h2>
            <p class="faq__subtitle"><?php echo $GLOBALS['not']['faq_subtitle'] ?></p>
            <button type="submit" class="book book_light open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
        </div>

        <?php if (!empty($faq_list)) : ?>
            <ul class="faq__list wow animate__animated animate__fadeInRight">
                <?php foreach ($faq_list as $faq_item) : ?>
                    <li class="faq-item spoiler">
                        <h3 class="faq-item__title spoiler__title"><?php echo $faq_item['faq_list_question'] ?></h3>
                        <p class="faq-item__text spoiler__content">
                            <?php echo $faq_item['faq_list_text'] ?>
                        </p>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
        <button type="submit" class="book book_light open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
    </div>
</section>