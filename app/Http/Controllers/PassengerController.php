<?php

namespace App\Http\Controllers;

use App\DataTables\PassengerDataTable;
use App\Http\Requests\PassengerRequest;
use App\Services\passengerService;
use Illuminate\Http\Request;
use App\Traits\HasUiTraits;

class PassengerController extends Controller
{
    use HasUiTraits;
    public function __Construct(private passengerService $passengerService){
        $this->setRoutes(['create', 'edit', 'destroy'], 'passengers', 'web');

    }
    /**
     * Display a listing of the resource.
     */
    public function index(PassengerDataTable $passengerDataTable)
    {
        
        $this->setTableAdapter('datatable');
        $this->setDatatable($passengerDataTable);
        $passengers = $this->passengerService->paginate();
        // dd( $passengers);
        return $this->generateList(
            ['passengers', 'List of all passengers'],
            $this->passengerService->getModelFields('passenger'),
            $passengers
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->renderCreateForm(
            $this->passengerService->getModel('passenger'),
            ['passenger', 'Create Passenger'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PassengerRequest $request)
    {
        
        // dd($request->all());
        $passenger = $this->passengerService->create($request);

        $request->session()->flash('success', $passenger->name . ' has been created');

        return redirect()->route('web.passengers.index');
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
        
        $passenger = $this->passengerService->findById($id);
        return $this->renderUpdateForm(
            $passenger,
            ['Update passenger', 'Edit Passenger'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PassengerRequest $request, string $id)
    {
       
        $this->passengerService->update($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.passengers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Integer $id)
    {
        $this->passengerService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.passengers.index');
    }
}
