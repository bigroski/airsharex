<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use Bigroski\Tukicms\App\Traits\HasListableTrait;

class Pen extends Model
{
    use HasFactory;
    // UI Trait for form creation
    use HasUiTraits;
    // Ui Trait for datatable
    use HasListableTrait;
    use LogsActivity;

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
        'type',
        'company_name',
        'price',
        'shop',
    ];
    /**
     * Listable for index page
     * @var array
     */
    public $listable = [
        'name' => ['name' => 'Name'],
        'type' => ['name' => 'type'],
        'company_name' => ['name' => 'company_name'],
        'price' => ['name' => 'Price'],
        'shop' => ['name' => 'Shop Name'],
    ];
    /**
     * Form configuration
     * @var array
     */
    public $formConfig = [
        'create' => [
            'title' => 'Create Employee',
            'route' => 'web.pen.store',
            'method' => 'post'
        ],
        'update' => [
            'title' => 'Edit Employee',
            'route' => 'web.pen.update',
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
        'type' => ['label' => 'type',
            'type' => 'text',
            'span' => 'col-md-12',
            'placeholder' => 'Enter Value',
            'required' => true
        ],
        'company_name' => ['label' => 'company_name',
            'type' => 'text',
            'span' => 'col-md-12',
            'placeholder' => 'Enter Value',
            'required' => false
        ],
        'price' => ['label' => 'Price',
            'type' => 'text',
            'span' => 'col-md-12',
            'placeholder' => 'Enter Value',
            'required' => true
        ],
        'shop' => ['label' => 'Shop Name',
            'type' => 'text',
            'span' => 'col-md-12',
            'placeholder' => 'Enter Value',
            'required' => false
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

}
