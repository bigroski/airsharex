<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pen;
use App\Classes\Services\PenService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\PenDataTable;
class PenController extends Controller
{
    use HasUiTraits;

    public function __construct(protected PenService $penService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'pen', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(PenDataTable $datatable)
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
        // $this->authorize('web.pen.index');
        $model = null;
        return $this->generateList(
            ['Pen', 'List of all Pen'],
            $this->penService->getModelFields('pen'),
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
            $this->penService->getModel('pen'),
            ['Pen', 'Create Pen'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Pen = $this->penService->makePen($request);

        $request->session()->flash('success', $Pen->id . ' has been created');

        return redirect()->route('web.pen.index');
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
        $pen = $this->penService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $pen,
            ['Update Pen', 'Edit Pen'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->penService->updatePen($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.pen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->penService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.pen.index');
    }
}
