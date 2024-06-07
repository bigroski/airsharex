<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;


class ScheduleFlight extends Component

{
    use TukiComponents;
    public $componentName = 'Schedule Flights';
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
        'locations' => [
            'label' => 'Locations',
            'name' => 'locations',
            // 'value' => '',
            'type' => 'repeater',
            'fields' => [
                'title' => [
                    'label' => 'Title',
                    'name' =>'title',
                    'type' => 'text',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'placeHolder' => 'Enter Section title',
                    'value' => ''
                ],
                'url' => [
                    'label' => 'Redirect url',
                    'name' =>'url',
                    'type' => 'text',
                    'default' => 'https://localhost:800',
                    'placeHolder' => 'Enter redirect url',
                    'value' => ''
                ],
                'featured_image' => [
                    'label' => 'Image Upload',
                    'name' => 'featured_image',
                    'type' => 'file',
                    'value' => ''
                ]
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
        return view('components.page-blocks.schedule-flight')->with($this->getValues());
    }


}