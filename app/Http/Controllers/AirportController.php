<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasUiTraits;
use App\Services\AirportService;
use  App\DataTables\AirportDataTable;
class AirportController extends Controller
{
    use HasUiTraits;


    public function __Construct(private AirportService $airportService){
        $this->setRoutes(['create', 'edit', 'destroy'], 'post', 'web');

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
        dd('create airports');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('shoew airports');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
