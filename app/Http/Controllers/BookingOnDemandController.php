<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingOnDemand;
use App\Classes\Services\BookingOnDemandService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\BookingOnDemandDataTable;
class BookingOnDemandController extends Controller
{
    use HasUiTraits;

    public function __construct(protected BookingOnDemandService $bookingOnDemandService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'bookingOnDemand', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(BookingOnDemandDataTable $datatable)
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
        // $this->authorize('web.bookingOnDemand.index');
        $model = null;
        return $this->generateList(
            ['BookingOnDemand', 'List of all BookingOnDemand'],
            $this->bookingOnDemandService->getModelFields('bookingOnDemand'),
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
            $this->bookingOnDemandService->getModel('bookingOnDemand'),
            ['BookingOnDemand', 'Create BookingOnDemand'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $BookingOnDemand = $this->bookingOnDemandService->makeBookingOnDemand($request);

        $request->session()->flash('success', $BookingOnDemand->id . ' has been created');

        return redirect()->route('web.bookingOnDemand.index');
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
        $bookingOnDemand = $this->bookingOnDemandService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $bookingOnDemand,
            ['Update BookingOnDemand', 'Edit BookingOnDemand'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->bookingOnDemandService->updateBookingOnDemand($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.bookingOnDemand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->bookingOnDemandService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.bookingOnDemand.index');
    }
}
