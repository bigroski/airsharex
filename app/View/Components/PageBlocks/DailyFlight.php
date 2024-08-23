<?php

namespace App\View\Components\PageBlocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;
use App\Services\ApiService;

class DailyFlight extends Component

{
    use TukiComponents;
    public $componentName = 'Daily Flights';
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
        'sub_title' => [
            'label' => 'Block Description',
            'name' =>'sub_title',
            'type' => 'textarea',
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            // 'placeHolder' => 'Enter your Hero title',
            'value' => ''
        ],
        'featured_image' => [
            'label' => 'Featured Image',
            'name' => 'featured_image',
            'type' => 'file',
            'value' => ''
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
        $apiService = app(ApiService::class);
        $popular = $apiService->getPopularTrips();
        // dd($popular);
        return view('components.page-blocks.daily-flight', compact('popular'))->with($this->getValues());
    }


}