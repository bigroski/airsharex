<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Classes\Services\DeviceService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\DeviceDataTable;
class DeviceController extends Controller
{
    use HasUiTraits;

    public function __construct(protected DeviceService $deviceService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'device', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(DeviceDataTable $datatable)
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
        // $this->authorize('web.device.index');
        $model = null;
        return $this->generateList(
            ['Device', 'List of all Device'],
            $this->deviceService->getModelFields('device'),
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
            $this->deviceService->getModel('device'),
            ['Device', 'Create Device'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Device = $this->deviceService->makeDevice($request);

        $request->session()->flash('success', $Device->id . ' has been created');

        return redirect()->route('web.device.index');
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
        $device = $this->deviceService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $device,
            ['Update Device', 'Edit Device'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->deviceService->updateDevice($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.device.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->deviceService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.device.index');
    }
}
