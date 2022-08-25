<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make('post_meta', __('Hero'))
   ->show_on_template('front-page.php')
   ->add_fields([
   Field::make('text', 'hero_title', 'Section Title')
      ->help_text( 'Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
   Field::make('text', 'hero_tests_list_title', 'Test list title'),
   Field::make('complex', 'hero_tests_list', 'Test ')
      ->set_collapsed(true)
      ->set_max(3)
      ->add_fields(array(
         Field::make('text', 'hero_test_item', 'Test'),
      )),
   Field::make('image', 'hero_bg', 'Background')
      ->set_width(20),
   Field::make('text', 'hero_bg_title', 'Background Title')
      ->set_width(80)
      ->help_text( 'Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
]);

// WHY US PAGE
Container::make('post_meta', __('Whyus Hero'))
   ->show_on_template('page-whyus.php')
   ->set_priority( 'high' )
   ->add_fields([
   Field::make('text', 'whyus_hero_title', 'Section Title')
   ->set_width(40)
   ->help_text( '<b>Use &lt;span&gt;</b>around text<b>&lt;/span&gt; to make his color light</b>' ),
   Field::make('text', 'whyus_hero_subtitle', 'Subtitle')
   ->set_width(60)
   ->help_text( '<b>Use &lt;span&gt;</b>around text<b>&lt;/span&gt; to make his color light</b>' ),
   Field::make('image', 'whyus_hero_img', 'Image')
   ->set_width(70),
]);

// WHY US PAGE
Container::make('post_meta', __('Business'))
   ->show_on_template('page-whyus.php')
   ->add_fields([
   Field::make('text', 'business_title', 'Section Title'),
   Field::make('complex', 'business_desc', 'Section Description')
      ->set_collapsed(true)
      ->set_max(3)
      ->add_fields([
         Field::make('rich_text', 'desc_item', 'Description Item')
   ]),
   Field::make('complex', 'business_option_list', 'Business options')
      ->set_collapsed(true)
      ->add_fields(array(
         Field::make('text', 'option_counter', 'Option Counter')
         ->set_width(15),
         Field::make('text', 'option_title', 'Option Title')
         ->set_width(25),
         Field::make('rich_text', 'option_desc', 'Option Description')
         ->set_width(60),
   )),
]);

Container::make('post_meta', __('What'))
   ->show_on_template('front-page.php')
   ->add_fields([
   Field::make('text', 'what_title', 'Section Title'),
   Field::make('text', 'what_subtitle', 'Subtitle'),
   Field::make('text', 'what_steps_title', 'Steps Title'),
   Field::make('complex', 'what_steps', 'Steps')
      ->set_collapsed(true)
      ->set_max(3)
      ->add_fields(array(
         Field::make('text', 'what_steps_text', 'Step Text'),
      )),
   Field::make('text', 'what_bottom_title', 'We become better Title'),
   Field::make('complex', 'what_list', 'We become better List')
      ->set_collapsed(true)
      ->set_max(3)
      ->add_fields(array(
         Field::make('text', 'what_list_text', 'We become better Item'),
      )),
]);



// LOCATION PAGE

Container::make('post_meta', __('Coming soon'))
->where( 'post_type', '=', 'location' )
->hide_on_template('single-location.php')
->add_fields([
   Field::make('rich_text', 'coming_soon_text', 'Coming Soon Text'),
]);

Container::make('post_meta', __('Details'))
   ->where( 'post_type', '=', 'location' )
   // ->hide_on_template('page-soon.php')
   ->add_fields([
   Field::make('text', 'loc_shedule', 'Loc shedule')
      ->set_width(20),
   Field::make('text', 'loc_address', 'Loc Address')
      ->set_width(20),
   Field::make('text', 'loc_phone_link', 'Loc Phone link')
      ->set_width(25)
      ->help_text( 'Example: 3054242429' ),
   Field::make('text', 'loc_phone', 'Loc Phone')
      ->set_width(25)
      ->help_text( 'Example: (305) 424-2429' ),
]);

Container::make('post_meta', __('Offers'))
   ->where( 'post_type', '=', 'location' )
   ->hide_on_template('page-soon.php')
   ->add_fields([
   Field::make('text', 'offer_title', 'Section Title')
   ->help_text( '<b>Use &lt;span&gt;</b>around text<b>&lt;/span&gt; to make his color light</b>' ),
   Field::make('complex', 'offer_list', 'Offer list')
      ->set_collapsed(true)
      ->add_fields([
      Field::make('text', 'offer_name', 'Offer Name')
         ->set_width(33.33),
      Field::make('text', 'offer_desc', 'Offer Description')
         ->set_width(33.33),
      Field::make('text', 'offer_btn_link', 'Offer Button Link')
         ->set_width(33.33),
      Field::make('image', 'offer_img', 'Offer Image')
      ->set_width(33.33),
      Field::make('text', 'offer_price', 'Offer Price')
      ->set_width(33.33),
      Field::make('text', 'offer_timing', 'Offer Timing')
      ->set_width(33.33),
   ]),
   Field::make( 'checkbox', 'crb_show_section', 'Show section' ),
]);

Container::make('post_meta', __('Contact'))
   ->where( 'post_type', '=', 'location' )
   ->hide_on_template('page-soon.php')
   ->add_fields([
      Field::make('text', 'loc_contact_title', 'Section Title')
         ->set_width(50),
      Field::make('text', 'hiw_steps_title', 'How it work Title')
         ->set_width(50),
      Field::make('complex', 'hiw_steps', 'How it work Steps')
         ->set_collapsed(true)
         ->set_max(3)
         ->add_fields([
            Field::make('text', 'hiw_step_text', 'How it work Element'),
         ]),
]);

// ====== THANK ======
Container::make( 'post_meta', __( 'Thank section' ) )
->show_on_template('page-thank.php')
->add_fields([
   Field::make( 'text', 'request_text', 'Request text' )
   ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make <b>bold</b> text' ),
   Field::make( 'text', 'thank_btn_link', 'Thank btn link' )
   ->set_width(50),
   Field::make( 'text', 'thank_btn_text', 'Thank btn text' )
   ->set_width(50),
   Field::make( 'text', 'book_details', 'Book details' )
   ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make <b>bold</b> text' ),
]);

// ====== UA-SUPPORT ======
Container::make( 'post_meta', __( 'UA Support section' ) )
         ->show_on_template('page-ua-support.php')
         ->add_fields([
	         Field::make( 'textarea', 'section_desc', 'Section Description' ),
]);

// ====== UA-GALLERY ======
Container::make( 'post_meta', __( 'UA Gallery section' ) )
         ->show_on_template('page-ua-support.php')
         ->add_fields([
	     Field::make( 'image', 'support_gallery_single', 'Single Image' ),
	     Field::make('complex', 'gallery_list', 'Gallery')
	          ->set_collapsed(true)
	          ->set_max(9)
	          ->add_fields([
		      Field::make('image', 'gallery_item', 'Gallery Item'),
	     ]),
]);

// ====== UA-CONTENT ======
Container::make( 'post_meta', __( 'UA Content section' ) )
         ->show_on_template('page-ua-support.php')
         ->add_fields([
	         Field::make( 'text', 'content_title', 'Section Title' )
	         ->set_width(30),
	         Field::make( 'textarea', 'content_desc', 'Section Desription' )
	         ->set_width(70),
]);

// ====== UA-GALLERY ======
Container::make( 'post_meta', __( 'UA Fonds section' ) )
         ->show_on_template('page-ua-support.php')
         ->add_fields([
	     Field::make('complex', 'fonds_list', 'Fonds')
	         ->set_collapsed(true)
	         ->add_fields([
		          Field::make('image', 'fond_logo', 'Fond Logo')
		               ->set_width(15),
		          Field::make('text', 'fond_name', 'Fond Name')
		               ->set_width(20),
		          Field::make('textarea', 'fond_desc', 'Fond Description')
		               ->set_width(40),
		          Field::make('text', 'fond_link', 'Fond Link')
		               ->set_width(25),
	     ]),
]);