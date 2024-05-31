<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasUiTraits;
use App\Services\AirportService;
use  App\DataTables\AirportDataTable;
use Ramsey\Uuid\Type\Integer;

class AirportController extends Controller
{
    use HasUiTraits;


    public function __Construct(private AirportService $airportService){
        $this->setRoutes(['create', 'edit', 'destroy'], 'airports', 'web');

    }
    /**
     * Display a listing of the resource.
     */
    public function index(AirportDataTable $airportDataTable)
    {
        // dd('datatale airports');
        
        $this->setTableAdapter('datatable');
        $this->setDatatable($airportDataTable);
        // $this->authorize('web.airport.index');
        $airports = $this->airportService->paginate();
        return $this->generateList(
            ['Airports', 'List of all airports'],
            $this->airportService->getModelFields('airport'),
            $airports
        );
    }

     /**
     * Show formto create new resource.
     */
    public function create(Request $request)
    {
        // dd('create airports');
        return $this->renderCreateForm(
            $this->airportService->getModel('airport'),
            ['Airport', 'Create Airport'],
        );

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $airport = $this->airportService->create($request);

        $request->session()->flash('success', $airport->name . ' has been created');

        return redirect()->route('web.airports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Integer $id)
    {
        dd('shoew airports');
    }
    public function edit(Request $request,$id){
        $airport = $this->airportService->findById($id);
        return $this->renderUpdateForm(
            $airport,
            ['Update Airport', 'Edit Airport'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integer $id)
    {
        $this->airportService->update($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.airtport.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Integer $id)
    {
        $this->airportService->delete($id);
        $request->session()->flash('success', 'Successfully deleted');
        return redirect()->route('web.airtport.index');
    }
}
