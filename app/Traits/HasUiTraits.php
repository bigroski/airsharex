<?php

namespace App\Traits;
use Illuminate\Support\Arr;
trait HasUiTraits
{

    public $parentModel = null;

    public $buttons = [];
    public $adapter = 'simpleTable';

    protected function fillBoolean(&$request, $model){
        $casts = $model->getCasts();
        foreach ($casts as $item => $value) {
            if($value == 'boolean'){
                if(!$request->has($item)){
                    $request->request->add([$item => false]);
                }
                $request->$item = $request->has($item);
            }
        }
    }

    /**
     * Set list of routes to be useds
     * @param array $routes   list of routes
     * @param string $resource Case Sensetive Resource name
     * @param string $prefix   Prefix for the web
     */
    function setRoutes($routes, $resource, $prefix = null, $parentModel = null){
        $e = 'route';
        $pre = '';
        foreach($routes as $route){
            $routeName = $e.ucfirst($route);
            if($prefix != null){
                $pre = $prefix.".";
            }
            $x = $pre.$resource.'.'.$route;
            $this->$routeName = $x;
        }

        if($parentModel){
            $this->parentModel = $parentModel;
        }
    }


    function setPageTitles($pageTitle = '', $pageSubtitle = '')
    {
        return ['page_title' => $pageTitle, 'page_subtitle' => $pageSubtitle];
    }



    /**
     * Generate Simple List page
     * @param  array $pageAttributes array with page title and page subtitle
     * @param  array $columns         List of columns
     * @param  array $rows         Rows of the table
     * @return View                 Generated View
     */
    public function generateList($pageAttributes, $columns, $values, $buttons = [], $except = null){

        // dd($this->generateTableButtons($buttons, $except));
        if($this->adapter == 'simpleTable'){


            return view('tukicms::layouts.list')->with([
                'headerButtons' => $this->generateToolbarButtons($this->buttons),
                'tableFields' => $columns,
                'tableValues' => $values,
                'pageParams' => $this->setPageTitles(
                                    array_key_exists(0, $pageAttributes)?$pageAttributes[0]:'',
                                    array_key_exists(1, $pageAttributes)?$pageAttributes[1]: ''
                                ),
                'tableButtons' => $this->generateTableButtons($buttons, $except)

            ]);
        }elseif($this->adapter == 'datatable'){
            return $this->datatable->with([
                    'actionButtons' => $this->generateTableButtons($buttons, $except),
                    'fields' => $columns,
                ])
                ->render('tukicms::layouts.datatable-list', [
                    'headerButtons' => $this->generateToolbarButtons($this->buttons),
                    'tableValues' => $values,
                    'pageParams' => $this->setPageTitles(
                                        array_key_exists(0, $pageAttributes)?$pageAttributes[0]:'',
                                        array_key_exists(1, $pageAttributes)?$pageAttributes[1]: ''
                                    ),
                ]);
        }

    }
    public function setTableAdapter($adapter = 'simpleTable'){
        $this->adapter = $adapter;
    }
    public function setDatatable($datatable){
        $this->datatable = $datatable;
    }




    function renderCreateForm($model, $pageAttributes, $additionals = []){
        return $this->renderForm($model, 'create', $pageAttributes, 'formFields', $additionals);
    }
    function renderUpdateForm($model , $pageAttributes, $additionals = [] ){
        return $this->renderForm($model, 'update', $pageAttributes, 'formFields', $additionals);
    }
    /**
     * [renderForm description]
     * @param  [type] $class          Model to use for this form
     * @param  [type] $type           Form Config
     * @param  [type] $pageAttributes Page heading and descriptions
     * @param  string $formFields     Name of the form field config
     * @param  array  $additionals    Additional Data to pas to views
     * @return [type]                 [description]
     */
    function renderForm($class, $type, $pageAttributes, $formFields = 'formFields', $additionals = [])
    {
        $obj = $class;
        // dump($obj);
        // Used to get parent Model Specific for controllers which is nested resource
        $formRequireAttributes['parent'] = $this->parentModel;
        $formRequireAttributes['model'] = $obj;
        $formRequireAttributes['formElements'] = $obj->$formFields;
        $formRequireAttributes['formConfig'] = $obj->formConfig[$type];
        $formRequireAttributes['formType'] = $type;
        // Pass extra data view parameters to be accepted by partials
        $formRequireAttributes['extras'] = $additionals;
        // $formRequireAttributes;
        // $formRequireAttributes = array_merge($formRequireAttributes, $additionals);
        $formData = [
            'formElement' => $formRequireAttributes,
            'pageParams'=> $this->setPageTitles(
                                array_key_exists(0, $pageAttributes)?$pageAttributes[0]:'',
                                array_key_exists(1, $pageAttributes)?$pageAttributes[1]: ''
                            )
        ];
        return view('tukicms::layouts.create')->with($formData);

    }

    function addPageButtons($buttons){

        $this->buttons[] = $buttons;
    }
    function removeButton($buttonName){
        $this->unset[] = $buttonName;
    }
    public $unset;
    function generateToolbarButtons($buttons = []){
        $element = Arr::flatten($this->buttons, 1);
        // dd($element);
        $defaultButtons = [
            'hasCreate' => [
                'name' => 'Create',
                'title' => 'Create',
                'class' => 'btn-primary',
                'icon' => 'fas fa-receipt',
                'routeName' => route($this->routeCreate, $this->parentModel),
                'routeId' => 'false'
            ]
        ];
        $allButtons = array_merge($defaultButtons, $element);
        if($this->unset){
            foreach($this->unset as $unset){
                unset($allButtons[$unset]);
            }
        }
        return $allButtons;
        // return
    }
    function generateTableButtons($buttons = [], $except = null){
        $defaultButtons = [
            'update' => [
                'name' => 'Update',
                'icon' => 'flaticon2-pen',
                'class' => 'btn-secondary',
                'routeName' => $this->routeEdit,
                'parent' => $this->parentModel,
                'routeId' => 'true'
            ],
            // 'delete' => [
            //     'name' => 'Delete',
            //     'icon' => 'flaticon2-trash',
            //     'class' => 'btn-danger',
            //     'routeName' => $this->routeDestroy,
            //     'parent' => $this->parentModel,
            //     'routeId' => 'true'
            // ]
        ];

        if($except != null){
            foreach($except as $unset){
                if(array_key_exists($unset, $defaultButtons)){


                    unset($defaultButtons[$unset]);
                }
            }
        }

        return array_merge($defaultButtons, $buttons);

    }

}
