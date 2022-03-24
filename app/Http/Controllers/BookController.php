<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\
class BookController extends Controller
{
    // public function getAPI(){
    //     // $collection = HTTP::get("https://reqres.in/api/users?page=1");
    //     $books= HTTP::get("https://anapioficeandfire.com/api/books/1");

    //     return view("books",['books' => $books['characters']]);
    //     //return Http::get('https://anapioficeandfire.com/api/books/1');
    //     //return "Api";
    // }

    public function index()
    {
        // Get all data from databases
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
        //Validate the data
        $this -> validate($request,[
            'title' => 'required',
            'author' => 'required',
            'comment' => 'required'
        ]);
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->comment = $request->input('comment');

        $book->save();
        return response()->json($book);

    }

    public function show($id)
    {
        //give 1 item from books
        $book = Book::find($id);

        return response() ->json($book);

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // update by id

           //Validate the data
           $this -> validate($request,[
            'title' => 'required',
            'author' => 'required',
            'comment' => 'required'
        ]);
        $book = Book::find($id);

        $book->name = $request->input('title');
        $book->author = $request->input('author');
        $book->comment = $request->input('comment');

        $book->save();
        return response()->json($book);

    }


    public function destroy($id)
    {
        // delete different books using id

        $book = Book::find($id);
        $book->delete();

        return response() ->json('Book deletd successfully');
    }
}
