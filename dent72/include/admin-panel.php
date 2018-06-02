<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Опции темы', 'crb'))
        ->set_icon('dashicons-businessman')
        ->set_page_menu_title('МЕДИКА')
        ->add_fields(array(
            Field::make('text', 'crb_phone1', 'Телефон')
                ->set_attribute('placeholder', '+7(****)**-**-**'),
            Field::make('text', 'crb_address', 'Адрес')
                ->set_help_text('Адрес стоматологии')
        ));
}