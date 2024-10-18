<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MailingList;
use App\Classes\Services\MailingListService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\MailingListDataTable;
class MailingListController extends Controller
{
    use HasUiTraits;

    public function __construct(protected MailingListService $mailingListService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'mailingList', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(MailingListDataTable $datatable)
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
        // $this->authorize('web.mailingList.index');
        $model = null;
        return $this->generateList(
            ['MailingList', 'List of all MailingList'],
            $this->mailingListService->getModelFields('mailingList'),
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
            $this->mailingListService->getModel('mailingList'),
            ['MailingList', 'Create MailingList'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $MailingList = $this->mailingListService->makeMailingList($request);
        $request->session()->flash('success', 'Thank you for subscribing to airsharex.');
        return redirect('/');
        // return redirect()->route('register');
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
        $mailingList = $this->mailingListService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $mailingList,
            ['Update MailingList', 'Edit MailingList'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->mailingListService->updateMailingList($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.mailingList.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->mailingListService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.mailingList.index');
    }
}
