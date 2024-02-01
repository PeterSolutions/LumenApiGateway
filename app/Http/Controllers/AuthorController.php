<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retrive and show all of authors
     * @return Illuminate/Http/Response
     */
    public function index()
    {

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
