<?php

namespace App\View\Components\PageBlocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;

class AirshareTestimonial extends Component
{
    use TukiComponents;
    public $componentName = 'AirshareX Testimonial';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';

    public $fields = [
        'slider' => [
            "name" => 'slider',
            'label' => 'Slider',
            'type' => 'repeater',
            'value' => '',
            'fields' => [
                'title' => [
                    'label' => 'New Fancy Title',
                    'name' =>'title',
                    'type' => 'text',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'placeHolder' => 'Enter Section title',
                    'value' => ''
                ],
                'description' => [
                    'label' => 'Description',
                    'name' =>'description',
                    'type' => 'textarea',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'placeHolder' => 'Enter description',
                    'value' => ''
                ],
                'featured_image' => [
                    'label' => 'Image Upload',
                    'name' => 'featured_image',
                    'type' => 'file',
                    'value' => ''
                ]
            ]




            
        ]
        
        
        
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
        return view('components.page-blocks.airshare-testimonial');
    }
}
