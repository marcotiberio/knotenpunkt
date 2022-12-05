<?php

namespace Flynt\Components\BlockShortcode;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockShortcode',
        'label' => 'Block: Shortcode',
        'sub_fields' => [
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcode',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
