<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentsController extends Controller
{
    public function add(Request $request) {
    	$comment = new Comment();
        $comment->content = $request->content;
        $comment->author = $request->author;
        $comment->article = $request->article;
        $comment->save();

    	return redirect('/show/' . $comment->article);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/admin/comments/deleted');
    }

    public function change(Request $request) {
        $id = $request->id;
        $comment = Comment::find($id);
        $comment->article = Article::find($comment->article)->title;
        return view('admin.comments.change')->with('comment', $comment);
    }

    public function update(Request $request) {
        $id = $request->id;
        $comment = Comment::find($id);
        $comment->content = $request->content;
        $comment->save();
        return redirect('/admin/comments/updated');
    }
}
