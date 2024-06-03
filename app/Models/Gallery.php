<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use Bigroski\Tukicms\App\Traits\HasListableTrait;

class Gallery extends Model
{
    use HasFactory;
    // UI Trait for form creation
    use HasUiTraits;
    // Ui Trait for datatable
    use HasListableTrait;
    use LogsActivity;

    // Activity Log as Per Spatie Activitylog
    protected static $logAttributes = ["*"];
    protected static $ignoreChangedAttributes = ['updated_at', 'created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'file_path',
        'upload_date',
        'tags',
        'photographer'
    ];

    protected $casts = [
        'id' => 'integer',
        'upload_date'=>'date',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
    /**
     * Listable for index page
     * @var array
     */
    public $listable = [
        'name' => ['name' => 'Name'],
        'description' => ['description' => 'Description'],
        'file_path' => ['file_path' => 'FilePath'],
        // 'upload_date' => ['upload_date' => 'UploadDate'],
        'tags' => ['tags' => 'Tags'],
        // 'photographer' => ['photographer' => 'Photographer']
    ];
    /**
     * Form configuration
     * @var array
     */
    public $formConfig = [
        'create' => [
            'title' => 'Create Gallery',
            'route' => 'web.gallery.store',
            'method' => 'post'
        ],
        'update' => [
            'title' => 'Edit Gallery',
            'route' => 'web.gallery.update',
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
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Enter Description',
            'type' => 'text',
            'span' => 'col-md-12',
            'required' => true,
        ],
        'file_path' => [
            'label' => 'FilePath',
            'placeholder' => 'Enter FilePath',
            'type' => 'text',
            'span' => 'col-md-12',
            'required' => true,
        ],
        'tags' => [
            'label' => 'tags',
            'placeholder' => 'Enter Tags',
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
        $logOption = new LogOptions();
        return $logOption->logAll();
    }
}
