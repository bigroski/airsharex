<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;


class ContactMap extends Component

{
    use TukiComponents;
    public $componentName = 'Contact Map';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';
    public $fields = [
        'title' => [
            'label' => 'Block Title',
            'name' =>'title',
            'type' => 'text',
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'value' => ''
        ],
        'description' => [
            'label' => 'Block Description',
            'name' =>'description',
            'type' => 'textarea',
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'value' => ''
        ],
        'feature' => [
                "name" => 'feature',
                'label' => 'Feature',
                'type' => 'repeater',
                'value' => '',
                'fields' => [
                    'featured_image' => [
                        'label' => 'Image Upload',
                        'name' => 'featured_image',
                        'type' => 'file',
                        'value' => ''
                    ]
                ]
            ],
        'offices' => [
                "name" => 'offices',
                'label' => 'Offices',
                'type' => 'repeater',
                'value' => '',
                'fields' => [
                    'office_name' => [
                        'label' => 'Office Name',
                        'name' => 'office_name',
                        'type' => 'text',
                        'value' => ''
                    ],
                    'office_address' => [
                        'label' => 'Office Address',
                        'name' => 'office_address',
                        'type' => 'text',
                        'value' => ''
                    ],
                    'office_email' => [
                        'label' => 'Office Email',
                        'name' => 'office_email',
                        'type' => 'text',
                        'value' => ''
                    ],
                    'office_phone' => [
                        'label' => 'Office Phone',
                        'name' => 'office_phone',
                        'type' => 'text',
                        'value' => ''
                    ]
                ]
            ]
        // 'featured_image' => [
        //     'label' => 'Featured Image',
        //     'name' => 'featured_image',
        //     'type' => 'file',
        //     'value' => ''
        // ],
    ];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-blocks.contact-map')->with($this->getValues());
    }


}