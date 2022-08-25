<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'crb') )
->add_tab( __('Global settings'), [
	Field::make( 'text', 'phone_link', 'Phone Link' )
                ->set_width(33.33)
                ->help_text('<b>Only numbers!</b> Example: +15854160088'),
	Field::make( 'text', 'phone_number', 'Phone Number' )
                ->set_width(33.33)
                ->help_text('You can use dashes, spaces or other symbols. Example: +1.585.416.0088'),
        Field::make( 'text', 'phone_text', 'Header Phone Text' )
                ->set_width(33.33),
        Field::make( 'text', 'book_btn', 'Buttons text' )
                ->set_width(33.33),
        Field::make( 'text', 'contact_btn', "Contact Button text" )
                ->set_width(33.33),
        Field::make( 'text', 'footer_email', "Пошта" )
                ->set_width(33.33),
        Field::make( 'text', 'address', 'Address' )
                ->set_width(33.33),
        Field::make( 'text', 'address_link', 'Address Link' )
                ->set_width(33.33),
        Field::make( 'text', 'footer_copy', "Copywrite text" )
                ->set_width(33.33),
        Field::make( 'complex', 'social_list', "Social networks" )
        ->set_collapsed(true)
        ->add_fields([
                Field::make( 'image', 'socials_img', "Картинка" )
                ->set_width(50)
                ->set_value_type('url'),
                Field::make( 'text', 'socials_link', "Посилання" )
                ->set_width(50),
        ]),
        Field::make( 'header_scripts', 'ga_analytics_script', 'Google Analytics Sript' )
        ->set_width(50),
        Field::make( 'header_scripts', 'other_analytics_script', 'Other Analytics Sript' )
        ->set_width(50),
])
->add_tab( __('Serve Section'), [
        Field::make('text', 'serve_title', 'Section Title')
        ->set_width(70),
        Field::make('image', 'serve_img', 'Section Right Background')
        ->set_width(30),
])
->add_tab( __('Companies'), [
        Field::make('text', 'companies_title', 'Section Title'),
        Field::make('complex', 'companies_slider', 'Slides')
        ->set_collapsed(true)
        ->add_fields([
                Field::make('text', 'companies_slider_date', 'Date')
                ->set_width(30),
                Field::make('text', 'companies_slider_name', 'Company name')
                ->set_width(70),
                Field::make('image', 'companies_slider_img', 'Company Logo')
                ->set_value_type('url')
                ->set_width(30),
                Field::make('rich_text', 'companies_slider_text', 'Company Description')
                ->set_width(70),
        ])
])
->add_tab( __('Partners'), [
        Field::make('complex', 'companies_list', 'Partner List')
        ->set_collapsed(true)
        ->add_fields(array(
                Field::make('image', 'companies_list_img', 'Logo img')
                ->set_value_type('url'),
        ))
])
->add_tab( __('Frequently Asked Questions'), [
        Field::make('text', 'faq_title', 'Section Title')
        ->set_width(30),
        Field::make('text', 'faq_subtitle', 'Subtitle')
        ->set_width(70),
        Field::make('complex', 'faq_list', 'FAQ List')
        ->set_collapsed(true)
        ->add_fields(array(
                Field::make('text', 'faq_list_question', 'Questions')
                ->set_width(40),
                Field::make('rich_text', 'faq_list_text', 'Answers')
                ->set_width(60),
        )),
])
->add_tab( __('Contact Section'), [
        Field::make('text', 'contact_title', 'Section Title')
        ->set_width(80),
        Field::make('image', 'contact_img', 'Image')
        ->set_value_type('url'),
])
->add_tab( __('Widget'), [
        Field::make('text', 'step_1_title', 'Step 1 Title')
        ->set_width(31),
        Field::make('text', 'step_2_title', 'Step 2 Title')
        ->set_width(31),
        Field::make('text', 'step_3_title', 'Step 3 Title')
        ->set_width(31),
]);