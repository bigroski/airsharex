<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;


class AirshareHistory extends Component

{
    use TukiComponents;
    public $componentName = 'Our History';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';
    public $fields = [
        'leading' => [
            'label' => 'Leading Note',
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
        'counters' => [
            "name" => 'counters',
            'label' => 'Counters',
            'type' => 'repeater',
            'value' => '',
            'fields' => [
                'year' => [
                    'label' => 'Year',
                    'name' =>'year',
                    'type' => 'text',
                    'default' => '2024',
                    'placeHolder' => 'Enter Section title',
                    'value' => ''
                ],
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
                    'type' => 'textarea',
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
        return view('components.page-blocks.airshare-history')->with($this->getValues());
    }


}