<?php

namespace App\Http\Controllers;

use App\DataTables\TestimonialDataTable;
use App\Http\Requests\TetimonialRequest;
use App\Services\TestimonialService;
use Illuminate\Http\Request;
use App\Traits\HasUiTraits;
use Ramsey\Uuid\Type\Integer;

class TestimonialController extends Controller
{
    use HasUiTraits;
    public function __Construct(private TestimonialService $testimonialService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'testimonials', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(TestimonialDataTable $testimonialDataTable)
    {

        $this->setTableAdapter('datatable');
        $this->setDatatable($testimonialDataTable);
        $testimonials = $this->testimonialService->paginate();
        return $this->generateList(
            ['testimonials', 'List of all Testimonials'],
            $this->testimonialService->getModelFields('testimonial'),
            $testimonials
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->renderCreateForm(
            $this->testimonialService->getModel('testimonial'),
            ['testimonial', 'Create Testimonial'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TetimonialRequest $request)
    {

        // dd($request->all());
        $testimonial = $this->testimonialService->create($request);

        $request->session()->flash('success', $testimonial->name . ' has been created');

        return redirect()->route('web.testimonials.index');
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
    public function edit($id)
    {

        $testimonial = $this->testimonialService->findById($id);
        return $this->renderUpdateForm(
            $testimonial,
            ['Update testimonial', 'Edit Testimonial'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TetimonialRequest $request, $id)
    {

        $this->testimonialService->update($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $this->testimonialService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.testimonials.index');
    }
}
