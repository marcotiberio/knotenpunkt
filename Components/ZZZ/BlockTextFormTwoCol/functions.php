<?php

namespace Flynt\Components\BlockTextFormTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockTextFormTwoCol',
        'label' => 'Block: Text/Form Two Columns',
        'sub_fields' => [
            [
                'label' => __('Column Text', 'flynt'),
                'name' => 'columnTextTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'text',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Column Form', 'flynt'),
                'name' => 'columnImageTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Form', 'flynt'),
                'name' => 'formForm',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
        ]
    ];
}
