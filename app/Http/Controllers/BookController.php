<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        // Get all data from database
        $books = Book::all();

        return response() ->json($books);

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //Post data to database from user

    }

    public function show($id)
    {
        //give 1 item from books

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // update by id
    }


    public function destroy($id)
    {
        // delete different books using id
    }
}
