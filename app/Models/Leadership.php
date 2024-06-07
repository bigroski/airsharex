<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use Bigroski\Tukicms\App\Traits\HasListableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Leadership extends Model  implements HasMedia
{
    use HasFactory;
    use LogsActivity;
    // UI Trait for form creation
    use HasUiTraits;
    // Ui Trait for datatable
    use HasListableTrait;
    use InteractsWithMedia;


    // Activity Log as Per Spatie Activitylog
    protected static $logAttributes = ["*"];
    protected static $ignoreChangedAttributes = ['updated_at','created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'description'
    ];
    /**
     * Listable for index page
     * @var array
     */
    public $listable = [
        'featured_image' => [
            'label' => 'Featured Image',
            'type' => 'image'
        ],
        'name' => ['name' => 'Name'],
    ];
    /**
     * Form configuration
     * @var array
     */
    public $formConfig = [
        'create' => [
            'title' => 'Create Employee',
            'route' => 'web.leadership.store',
            'method' => 'post'
        ],
        'update' => [
            'title' => 'Edit Employee',
            'route' => 'web.leadership.update',
            'method' => 'put'
        ],
        /**
         * Reference for form config
         */
        // '<formName>' => [
        //     'title' => '<formLable>',
        //     'route' => '<route name for form handler>',
        //     'method' => 'post',
        //     'bindModel' => true
        // ]

    ];
    public $formFields = [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter Name',
            'type' => 'text',
            'span' => 'col-md-12',
            'required' => true,
        ],
        'position' => [
            'label' => 'Position',
            'placeholder' => 'Enter Position',
            'type' => 'text',
            'span' => 'col-md-12',
            'required' => true,
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter description',
            'type' => 'text',
            'span' => 'col-md-12',
            'required' => true,
        ],
        'featured_image' => [
            'label' => 'Featured Image',
            'type' => 'file',
            'placeholder' => 'Enter tag name',
            'required' => true,
            'span' => 'col-md-9'
        ],
    ];

    protected static function boot()
    {
        parent::boot();

        // static::addGlobalScope(new ScopeName);
    }

    
    public function getActivitylogOptions(): LogOptions
    {
        $logOption= new LogOptions();
        return $logOption->logAll();

    }

    public function getFeaturedImageAttribute(){
        $images = $this->getMedia('featured_image');
        if($images->count() > 0){

            return $images[0]->getFullUrl();
        }
        return '';
    }
}
