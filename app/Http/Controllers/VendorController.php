<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasUiTraits;
use App\DataTables\VendorDataTable;
use App\Services\VendorService;
use Ramsey\Uuid\Type\Integer;

class VendorController extends Controller
{
    use HasUiTraits;

    public function __Construct(private VendorService $vendorService){
        $this->setRoutes(['create', 'edit', 'destroy'], 'vendors', 'web');

    }
    /**
     * Display a listing of the resource.
     */
    public function index(VendorDataTable $vendorDataTable)
    {
        $this->setTableAdapter('datatable');
        $this->setDatatable($vendorDataTable);
        // $this->authorize('web.vendors.index');
        $vendors = $this->vendorService->paginate();
        return $this->generateList(
            ['vendors', 'List of all vendors'],
            $this->vendorService->getModelFields('vendor'),
            $vendors
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->renderCreateForm(
            $this->vendorService->getModel('vendor'),
            ['Vendor', 'Create Vendor'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $vendor = $this->vendorService->create($request);

        $request->session()->flash('success', $vendor->name . ' has been created');

        return redirect()->route('web.vendors.index');
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
    public function edit(Integer $id)
    {
        $vendor = $this->vendorService->findById($id);
        return $this->renderUpdateForm(
            $vendor,
            ['Update Vendor', 'Edit Vendor'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integer $id)
    {
        $this->vendorService->update($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Integer $id)
    {
        $this->vendorService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.vendors.index');
    }
}
