<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightBooking;
use App\Classes\Services\FlightBookingService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\FlightBookingDataTable;
class FlightBookingController extends Controller
{
    use HasUiTraits;

    public function __construct(protected FlightBookingService $flightBookingService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'flightBooking', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(FlightBookingDataTable $datatable)
    {
        //
                // ---------------------------------------------
        // Set these lines to make the list as datatable
        // ---------------------------------------------
        $this->setTableAdapter('datatable');
        $this->setDatatable($datatable);
        $this->removeButton('hasCreate');
        
        // ---------------------------------------------
        // End of Datatable Adapter
        // ---------------------------------------------
        // Permission authorization;
        // $this->authorize('web.flightBooking.index');
        $model = null;
        return $this->generateList(
            ['FlightBooking', 'List of all FlightBooking'],
            $this->flightBookingService->getModelFields('flightBooking'),
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
            $this->flightBookingService->getModel('flightBooking'),
            ['FlightBooking', 'Create FlightBooking'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $FlightBooking = $this->flightBookingService->makeFlightBooking($request);

        $request->session()->flash('success', $FlightBooking->id . ' has been created');

        return redirect()->route('web.flightBooking.index');
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
        $flightBooking = $this->flightBookingService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $flightBooking,
            ['Update FlightBooking', 'Edit FlightBooking'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->flightBookingService->updateFlightBooking($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.flightBooking.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->flightBookingService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.flightBooking.index');
    }
}
