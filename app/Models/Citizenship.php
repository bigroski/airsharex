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
class Citizenship extends Model  implements HasMedia
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
    ];
    /**
     * Listable for index page
     * @var array
     */
    public $listable = [
        'name' => ['name' => 'Name'],
    ];
    /**
     * Form configuration
     * @var array
     */
    public $formConfig = [
        'create' => [
            'title' => 'Create Employee',
            'route' => 'web.citizenship.store',
            'method' => 'post'
        ],
        'update' => [
            'title' => 'Edit Employee',
            'route' => 'web.citizenship.update',
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
