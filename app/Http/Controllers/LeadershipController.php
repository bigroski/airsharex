<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leadership;
use App\Classes\Services\LeadershipService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\LeadershipDataTable;
class LeadershipController extends Controller
{
    use HasUiTraits;

    public function __construct(protected LeadershipService $leadershipService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'leadership', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(LeadershipDataTable $datatable)
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
        // $this->authorize('web.leadership.index');
        $model = null;
        return $this->generateList(
            ['Leadership', 'List of all Leadership'],
            $this->leadershipService->getModelFields('leadership'),
            $model,
            // [
            //     'delete' => [
            //         'name' => 'Delete',
            //         'icon' => 'flaticon2-trash',
            //         'class' => 'btn-danger',
            //         'routeName' => 'web.leadership.delete',
            //         // 'parent' => $this->parentModel,
            //         'routeId' => 'true'
            //     ]
            // ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return $this->renderCreateForm(
            $this->leadershipService->getModel('leadership'),
            ['Leadership', 'Create Leadership'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Leadership = $this->leadershipService->makeLeadership($request);

        $request->session()->flash('success', $Leadership->id . ' has been created');

        return redirect()->route('web.leadership.index');
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
        $leadership = $this->leadershipService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $leadership,
            ['Update Leadership', 'Edit Leadership'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->leadershipService->updateLeadership($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.leadership.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->leadershipService->deleteLeadership($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.leadership.index');
    }
}
