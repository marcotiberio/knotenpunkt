<?php

function theme_add_color_palette()
{

    add_theme_support(
        'editor-color-palette',
        '#fff',
        '#000',
        '#C0FF00',
        '#153436',
        '#A3DD94',
        '#FF4400',
        '#5DCFD0',
        '#FCFAF0',
    );
}
add_action('init', 'theme_add_color_palette');
