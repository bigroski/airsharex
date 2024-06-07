<?php

namespace Bigroski\Tukicms\App\Http\Controllers\Web\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anu;
use App\Classes\Services\AnuService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\AnuDataTable;
class AnuController extends Controller
{
    use HasUiTraits;

    public function __construct(protected AnuService $anuService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'anu', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(AnuDataTable $datatable)
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
        $this->authorize('web.anu.index');
        $model = null;
        return $this->generateList(
            ['Anu', 'List of all Anu'],
            $this->anuService->getModelFields('$REPO_IDENTIFIER'),
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
            $this->anuService->getModel('$REPO_IDENTIFIER'),
            ['Anu', 'Create Anu'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Anu = $this->$SERVICE_IDENTIFIREService->makePost($request);

        $request->session()->flash('success', $Anu->id . ' has been created');

        return redirect()->route('web.anu.index');
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
        $$REPO_IDENTIFIER = $this->anuService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $REPO_IDENTIFIER,
            ['Update Anu', 'Edit Anu'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->AnuService->updateAnu($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.anu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->AnuService->delete($id)
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.anu.index');
    }
}
