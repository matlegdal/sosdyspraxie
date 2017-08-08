<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
    	$comments = Comment::all();
    	return view('livre', compact('comments'));
    }

    public function store()
    {
        $this->validate(request(), [
                'body' => 'required',
                'author' => 'required'
        ]);

        Comment::create(request(['author', 'body']));
        
        return redirect('/livre');
    }

    public function delete(Comment $comment)
    {
    
        Comment::find($comment->id)->delete();

        return redirect('/livre');
    }
}
