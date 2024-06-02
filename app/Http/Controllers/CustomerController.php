<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Classes\Services\CustomerService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\CustomerDataTable;
class CustomerController extends Controller
{
    use HasUiTraits;

    public function __construct(protected CustomerService $customerService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'customer', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(CustomerDataTable $datatable)
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
        // $this->authorize('web.customer.index');
        $model = null;
        return $this->generateList(
            ['Customer', 'List of all Customer'],
            $this->customerService->getModelFields('customer'),
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
            $this->customerService->getModel('customer'),
            ['Customer', 'Create Customer'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Customer = $this->customerService->makeCustomer($request);

        $request->session()->flash('success', $Customer->id . ' has been created');

        return redirect()->route('web.customer.index');
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
        $customer = $this->customerService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $customer,
            ['Update Customer', 'Edit Customer'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->customerService->updateCustomer($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->customerService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.customer.index');
    }
}
