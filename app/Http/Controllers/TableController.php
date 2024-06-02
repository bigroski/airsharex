<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Classes\Services\TableService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\TableDataTable;
class TableController extends Controller
{
    use HasUiTraits;

    public function __construct(protected TableService $tableService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'table', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(TableDataTable $datatable)
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
        // $this->authorize('web.table.index');
        $model = null;
        return $this->generateList(
            ['Table', 'List of all Table'],
            $this->tableService->getModelFields('table'),
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
            $this->tableService->getModel('table'),
            ['Table', 'Create Table'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Table = $this->tableService->makeTable($request);

        $request->session()->flash('success', $Table->id . ' has been created');

        return redirect()->route('web.table.index');
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
        $table = $this->tableService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $table,
            ['Update Table', 'Edit Table'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->tableService->updateTable($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.table.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->tableService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.table.index');
    }
}
