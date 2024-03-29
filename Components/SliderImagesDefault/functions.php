<?php

namespace Flynt\Components\SliderImagesDefault;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=SliderImagesDefault', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'sliderImagesDefault',
        'label' => 'Block: Propel Slider',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'name' => 'images',
                'type' => 'gallery',
                'min' => 2,
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png, gif',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1
            ],
            [
                'label' => __('Images Mobile', 'flynt'),
                'name' => 'imagesMobile',
                'type' => 'gallery',
                'min' => 2,
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png, gif',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1
            ],
            [
                'label' => __('Project Info', 'flynt'),
                'name' => 'projectinfoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text'
            ],
            [
                'label' => __('Description', 'flynt'),
                'name' => 'descriptionHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
