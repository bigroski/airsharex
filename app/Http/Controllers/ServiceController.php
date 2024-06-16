<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Classes\Services\ServiceService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\ServiceDataTable;
class ServiceController extends Controller
{
    use HasUiTraits;

    public function __construct(protected ServiceService $serviceService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'service', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceDataTable $datatable)
    {
        //
                // ---------------------------------------------
        // Set these lines to make the list as datatable
        // ---------------------------------------------
        $this->setTableAdapter('datatable');
        $this->setDatatable($datatable);
        // ---------------------------------------------
        // End of Datatable Adapter
        // ---------------------------------------------
        // Permission authorization;
        // $this->authorize('web.service.index');
        $model = null;
        return $this->generateList(
            ['Service', 'List of all Service'],
            $this->serviceService->getModelFields('service'),
            $model
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return $this->renderCreateForm(
            $this->serviceService->getModel('service'),
            ['Service', 'Create Service'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Service = $this->serviceService->makeService($request);

        $request->session()->flash('success', $Service->id . ' has been created');

        return redirect()->route('web.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = $this->serviceService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $service,
            ['Update Service', 'Edit Service'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->serviceService->updateService($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->serviceService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.service.index');
    }
}
