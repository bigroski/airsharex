<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;


class FloatingImage extends Component

{
    use TukiComponents;
    public $componentName = 'About Airshare';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';
    public $fields = [
        'leading' => [
            'label' => 'Leading Text',
            'name' =>'leading',
            'type' => 'text',
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'value' => ''
        ],
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
            // 'placeHolder' => 'Enter your Hero title',
            'value' => ''
        ],
        'featured_image' => [
            'label' => 'Image Upload',
            'name' => 'featured_image',
            'type' => 'file',
            'value' => ''
        ],
        'second_featured_image' => [
            'label' => 'Upload second image',
            'name' => 'second_featured_image',
            'type' => 'file',
            'value' => ''
        ],
        'counters' => [
                "name" => 'counters',
                'label' => 'Counters',
                'type' => 'repeater',
                'value' => '',
                'fields' => [
                    'title' => [
                        'label' => 'Title',
                        'name' =>'title',
                        'type' => 'text',
                        'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'placeHolder' => 'Enter Section title',
                        'value' => ''
                    ],
                    'number' => [
                        'label' => 'Number',
                        'name' =>'url',
                        'type' => 'text',
                        'default' => '',
                        'placeHolder' => 'Enter Number',
                        'value' => ''
                    ],
                ]
        ],
        
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
        return view('components.page-blocks.floating-image')->with($this->getValues());
    }


}