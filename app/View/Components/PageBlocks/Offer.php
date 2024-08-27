<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;
use App\Services\ApiService;

class Offer extends Component

{
    use TukiComponents;
    public $componentName = 'Offers';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';
        public $fields = [
        'title' => [
            'label' => 'Block Title',
            'name' =>'title',
            'type' => 'text',
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'value' => ''
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
        $apiService = app(ApiService::class);
        $offers = $apiService->getOffers();
        // dump($offers);
        return view('components.page-blocks.offer', compact('offers'))->with($this->getValues());
    }


}