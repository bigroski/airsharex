<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;
use App\Classes\Services\ServiceService;

class FeaturedService extends Component

{
    use TukiComponents;
    public $componentName = 'Featured Service';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';
        public $fields = [
        'leading' => [
            'label' => 'Block Title',
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
        
    ];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->serviceService = app(ServiceService::class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = $this->getValues();
        $featuredServices = $this->serviceService->getFeaturedService();
        $data['featuredServices'] = $featuredServices;
        return view('components.page-blocks.featured-service')->with($data);
    }


}