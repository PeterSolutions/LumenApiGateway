<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the author service
     * @var AuthorService
     */
    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Retrive and show all of authors
     * @return Illuminate/Http/Response
     */
    public function index()
    {
        return $this->successResponse($this->authorService->obtaingAuthors());

    }
    public function store(Request $request)
    {

    }

    /**
     * Show an author
     * @return Illuminate/Http/Response
     */
    public function show($author)
    {

    }

    /**
     * Updated an instance of author
     * @return Illuminate/Http/Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Removes an instance of author
     * @return Illuminate/Http/Response
     */
    public function destroy($author)
    {

    }
}
