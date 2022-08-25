<?php 
    $page_id = get_the_ID();
    $what_steps = carbon_get_post_meta($page_id, 'what_steps');
    $what_list = carbon_get_post_meta($page_id, 'what_list')
?>

            <section class="what" id="what">
                <div class="container">

                    <div class="what__columns">
                        <div class="what-text  wow animate__animated animate__fadeInLeft">
                            <h2 class="section-title">
                              <?php echo carbon_get_post_meta($page_id, 'what_title')?><span><?php echo carbon_get_post_meta($page_id, 'what_title_span')?></span>
                            </h2>
                            <p class="what-text__subtitle"><?php echo carbon_get_post_meta($page_id, 'what_subtitle')?></p>
                            <button type="submit" class="book open-widget"><?php echo $GLOBALS['not']['book_btn'] ?></button>
                        </div>
                        <div class="hiw-steps  wow animate__animated animate__fadeInRight" data-wow-delay="300ms"
                            data-wow-duration="1.5s">
                            <h3 class="hiw-steps__title">
                             <?php echo carbon_get_post_meta($page_id, 'what_steps_title')?>
                            </h3> 
                            <?php if(! empty($what_steps)) : ?>
                                <ul class="hiw-steps__list">
                                <?php foreach($what_steps as $step_id => $step) : ?>
                                <li class="hiw-steps__item">
                                    <span>0<?php echo $step_id+1 ?></span>
                                    <p><?php echo $step['what_steps_text']?></p>
                                </li>
                                <?php endforeach ?>
                                </ul>
                            <?php endif ?>
                        </div>
                        <svg class="what-decor" width="544" height="671" viewBox="0 0 544 671" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="333.376" cy="336.121" rx="225.03" ry="226.416" stroke="#282828"
                                stroke-opacity="0.1" stroke-width="2" />
                            <path class="animated animated_2"
                                d="M476.902 161.737C441.041 131.857 396.851 113.905 350.423 110.356C303.995 106.807 257.617 117.835 217.681 141.922C177.744 166.008 146.217 201.965 127.445 244.838C108.673 287.71 103.58 335.385 112.869 381.291"
                                stroke="#E91D1F" stroke-width="5" />
                            <circle class="animated animated_circle animated_circle_5" cx="476.5" cy="161.5" r="7.5"
                                fill="#E91D1F" />
                            <circle class="animated animated_circle animated_circle_6" cx="476.5" cy="161.5" r="13"
                                stroke="#E91D1F" />
                            <ellipse cx="333.746" cy="336.121" rx="103.563" ry="104.578" stroke="#282828"
                                stroke-opacity="0.1" stroke-width="2" />
                            <ellipse cx="333.726" cy="336.025" rx="330.986" ry="333.025" stroke="#282828"
                                stroke-opacity="0.1" stroke-width="2" />
                            <path class="animated animated_1"
                                d="M620.368 169.512C597.360 129.429 566.315 94.6094 529.193 67.2756C492.07 39.9419 449.692 20.6941 404.763 10.7604C359.834 0.826756 313.34 0.425267 268.248 9.5816C223.156 18.7379 180.456 37.251 142.873 63.9396C105.289 90.6282 73.6476 124.906 49.9667 164.587C26.2857 204.267 11.0855 248.479 5.33581 294.4C-0.413853 340.322 3.41331 386.945 16.5731 431.295C29.7329 475.645 51.9363 516.748 81.7668 551.982"
                                stroke="#E91D1F" stroke-width="5" />
                            <circle class="animated animated_circle animated_circle_1" cx="84.1326" cy="553.248" r="17.5"
                                transform="rotate(30.892 84.1326 553.248)" stroke="#E91D1F" stroke-width="5" />
                            <circle class="animated animated_circle animated_circle_2" cx="84.1324" cy="553.248" r="32.5"
                                transform="rotate(30.892 84.1324 553.248)" stroke="#E91D1F" stroke-width="5" />
                            <circle class="animated animated_circle animated_circle_3" cx="84.1313" cy="553.248" r="44"
                                transform="rotate(30.892 84.1313 553.248)" stroke="#E91D1F" stroke-width="2" />
                            <circle class="animated animated_circle animated_circle_4" cx="84.2729" cy="553.724" r="7.5"
                                transform="rotate(30.892 84.2729 553.724)" fill="#E91D1F" />
                        </svg>
                    </div>
                    <div class="what-bottom">
                        <h3 class="what-bottom__title wow animate__animated animate__fadeInLeft">
                         <?php echo carbon_get_post_meta($page_id, 'what_bottom_title')?><span><?php echo carbon_get_post_meta($page_id, 'what_bottom_title_span')?></span>
                        </h3>
                        <?php if(! empty($what_list)) : ?>
                            <?php $time = 400?>
                                <ul class="what-bottom__list">
                                <?php foreach($what_list as $item) : ?>
                                    <?php $time+=350?>
                                    <li class="what-bottom__item  wow animate__animated animate__fadeInLeft"
                                    data-wow-delay="<?php echo $time?>ms">
                                       <?php echo $item['what_list_text']?>
                                    </li>
                                <?php endforeach ?>
                                </ul>
                            <?php endif ?>
                    </div>
                </div>

            </section>