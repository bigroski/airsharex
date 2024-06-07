<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Classes\Services\BookService;
use Bigroski\Tukicms\App\Traits\HasUiTraits;
use App\DataTables\BookDataTable;
class BookController extends Controller
{
    use HasUiTraits;

    public function __construct(protected BookService $bookService)
    {
        $this->setRoutes(['create', 'edit', 'destroy'], 'book', 'web');
    }
    /**
     * Display a listing of the resource.
     */
    // public function index(BookDataTable $datatable)
    public function index()
    {
        //
                // ---------------------------------------------
        // Set these lines to make the list as datatable
        // ---------------------------------------------
        $this->setTableAdapter();
        // $this->setDatatable($datatable);
        // ---------------------------------------------
        // End of Datatable Adapter
        // ---------------------------------------------
        // Permission authorization;
        // $this->authorize('web.book.index');
        // $model = null;
        $model = $this->bookService->paginate();

        return $this->generateList(
            ['Book', 'List of all Book'],
            $this->bookService->getModelFields('book'),
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
            $this->bookService->getModel('book'),
            ['Book', 'Create Book'],
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Book = $this->bookService->makeBook($request);

        $request->session()->flash('success', $Book->id . ' has been created');

        return redirect()->route('web.book.index');
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
        $book = $this->bookService->findById($id);
        // dd($post->categories);
        return $this->renderUpdateForm(
            book,
            ['Update Book', 'Edit Book'],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->bookService->updateBook($request, $id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->bookService->delete($id);
        $request->session()->flash('success', 'Successfully Updated');
        return redirect()->route('web.book.index');
    }
}
