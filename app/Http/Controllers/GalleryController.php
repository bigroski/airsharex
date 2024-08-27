<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Classes\Services\GalleryService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\GalleryDataTable;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class GalleryController extends Controller
{
    use HasUiTraits;

    public function __construct(protected GalleryService $galleryService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'gallery', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(GalleryDataTable $datatable)
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
        // $this->authorize('web.gallery.index');
        $model = null;
        return $this->generateList(
            ['Gallery', 'List of all Gallery'],
            $this->galleryService->getModelFields('gallery'),
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
            $this->galleryService->getModel('gallery'),
            ['Gallery', 'Create Gallery'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Gallery = $this->galleryService->makeGallery($request);

        $request->session()->flash('success', $Gallery->id . ' has been created');

        return redirect()->route('web.gallery.index');
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
        $gallery = $this->galleryService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            $gallery,
            ['Update Gallery', 'Edit Gallery'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $gallery = $this->galleryService->findById($id);	

        $this->galleryService->updateGallery($request, $gallery);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $this->galleryService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.gallery.index');
    }

    public function deleteImage(Request $request){
        $imageId = $request->get('imageId'); 
        $media = Media::find($imageId);
        if($media->delete() == true){
            return response()->json(['deleted' => 'yes']);
        }else{
            return response()->json(['deleted' => 'no']);

        }
        
    }
}
