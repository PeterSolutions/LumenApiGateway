<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Services\AuthorService;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the book service
     * @var BookService
     */
    public $bookService;


    /**
     * New service to consume the autor service
     * @var AuthorService
     */
    public $authorService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    /**
     * Retrive and show all of books
     * @return Illuminate/Http/Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());

    }

    /**
     * Create an instance of book
     * @return Illuminate/Http/Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->authord_id);

        return $this->successResponse($this->bookService->createBook($request->all()), Response::HTTP_CREATED);

    }

    /**
     * obtain and show an instance of book
     * @return Illuminate/Http/Response
     */
    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }

    /**
     * Updated an instance of book
     * @return Illuminate/Http/Response
     */
    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Removes an instance of book
     * @return Illuminate/Http/Response
     */
    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }
}
