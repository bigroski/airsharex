<?php

namespace App\View\Components\PageBlocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;
use App\Services\TestimonialService;
class AirshareTestimonial extends Component
{
    use TukiComponents;
    public $componentName = 'AirshareX Testimonial';
    // defines if this component is laravel component or tuki component
    public $container = 'laravel';

    public $fields = [
        'leading' => [
            'label' => 'Block leading',
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
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $testimonialService = app(TestimonialService::class);
        $homeTestimonial = $testimonialService->homeTestimonial();
        $data = $this->getValues();
        $data['testimonials'] = $homeTestimonial;
        return view('components.page-blocks.airshare-testimonial')->with($data);
    }
}
