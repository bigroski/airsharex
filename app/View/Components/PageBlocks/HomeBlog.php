<?php

namespace App\View\Components\PageBlocks;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Bigroski\Tukicms\App\Traits\TukiComponents;
use Bigroski\Tukicms\App\Classes\Services\PostService;

class HomeBlog extends Component

{
    private PostService $postService;
    use TukiComponents;
    public $componentName = 'HomeBlog';
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
        $this->postService = app(PostService::class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $data = $this->getValues();
        $data['posts'] = $this->postService->getLatestArticles(5);
        return view('components.page-blocks.home-blog')->with($data);
    }


}