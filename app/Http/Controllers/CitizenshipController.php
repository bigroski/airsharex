<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citizenship;
use App\Classes\Services\CitizenshipService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\CitizenshipDataTable;
class CitizenshipController extends Controller
{
    use HasUiTraits;

    public function __construct(protected CitizenshipService $citizenshipService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'citizenship', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(CitizenshipDataTable $datatable)
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
        // $this->authorize('web.citizenship.index');
        $model = null;
        return $this->generateList(
            ['Citizenship', 'List of all Citizenship'],
            $this->citizenshipService->getModelFields('citizenship'),
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
            $this->citizenshipService->getModel('citizenship'),
            ['Citizenship', 'Create Citizenship'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Citizenship = $this->citizenshipService->makeCitizenship($request);

        $request->session()->flash('success', $Citizenship->id . ' has been created');

        return redirect()->route('web.citizenship.index');
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
        $citizenship = $this->citizenshipService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $citizenship,
            ['Update Citizenship', 'Edit Citizenship'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->citizenshipService->updateCitizenship($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.citizenship.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->citizenshipService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.citizenship.index');
    }
}
