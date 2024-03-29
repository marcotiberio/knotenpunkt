<?php

namespace Flynt\Components\BlockScrollGallery;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockScrollGallery',
        'label' => 'Block: Playground Section',
        'sub_fields' => [
            [
                'label' => __('Desktop', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Boxes', 'flynt'),
                'name' => 'boxes',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Image', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image Desktop', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '20',
                        ]
                    ],
                    [
                        'label' => __('Image Mobile', 'flynt'),
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '20',
                        ]
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 0,
                        'wrapper' =>  [
                            'width' => '60',
                        ]
                    ],
                ],
            ],
        ]
    ];
}
