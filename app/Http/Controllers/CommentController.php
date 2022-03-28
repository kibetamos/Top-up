<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
             // Get all data from databases
             $comments = Comment::all();

            //  return response() ->json($comments);
            return view('comments', ['comments'=>$comments]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //'book_id','comment'
         //Validate the data
         $this -> validate($request,[
            'book_id' => 'required',
            'comment' => 'required',
        ]);
        $comment = new Comment();
        $comment->book_id = $request->input('book_id');
        $comment->comment = $request->input('comment');
        // $comment->comment = $request->input('comment');

        $comment->save();
        return response()->json($comment);
    }


    public function show($id)
    {
        //
                //give 1 item from books
        $comment = Comment::find($id);

        return response() ->json($comment);

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
         //Validate the data
         $this -> validate($request,[
            'book_id' => 'required',
            'comment' => 'required',
        ]);
        $comment = Comment::find($id);
        $comment->book_id = $request->input('book_id');
        $comment->comment = $request->input('comment');
        // $comment->comment = $request->input('comment');

        $comment->save();
        return response()->json($comment);
    }


    public function destroy($id)
    {
        //
        $comment = Comment::find($id);
        $comment->delete();

        return response() ->json('Commment deletd successfully');
    }
}
