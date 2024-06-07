<?php

namespace Bigroski\Tukicms\App\Http\Controllers\Web\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineBooking;
use App\Classes\Services\OnlineBookingService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\OnlineBookingDataTable;
class OnlineBookingController extends Controller
{
    use HasUiTraits;

    public function __construct(protected OnlineBookingService $onlineBookingService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'onlineBooking', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(OnlineBookingDataTable $datatable)
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
        $this->authorize('web.onlineBooking.index');
        $model = null;
        return $this->generateList(
            ['OnlineBooking', 'List of all OnlineBooking'],
            $this->onlineBookingService->getModelFields('$REPO_IDENTIFIER'),
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
            $this->onlineBookingService->getModel('$REPO_IDENTIFIER'),
            ['OnlineBooking', 'Create OnlineBooking'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $OnlineBooking = $this->$SERVICE_IDENTIFIREService->makePost($request);

        $request->session()->flash('success', $OnlineBooking->id . ' has been created');

        return redirect()->route('web.onlineBooking.index');
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
        $$REPO_IDENTIFIER = $this->onlineBookingService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $REPO_IDENTIFIER,
            ['Update OnlineBooking', 'Edit OnlineBooking'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->OnlineBookingService->updateOnlineBooking($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.onlineBooking.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    
    {
        $this->OnlineBookingService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.onlineBooking.index');
    }
}
