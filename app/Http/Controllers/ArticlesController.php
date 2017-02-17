<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class ArticlesController extends Controller
{
    public function create() {
    	$categories = Category::all();
    	return view('admin.articles.create')->with('categories', $categories);
    }

    public function store(Request $request) {
    	$article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;
        $article->category = $request->category;

        $article->public = $request->public;
        if ($article->public)
        	$article->public = true;
        else
        	$article->public = false;
        $article->comments = $request->comments;
        if ($article->comments)
        	$article->comments = true;
        else
        	$article->comments = false;

        $root=$_SERVER['DOCUMENT_ROOT']."/images/"; 
		$fname=$request->file('preview')->getClientOriginalName();
		$request->file('preview')->move($root,$fname); 
		$article->preview = "/images/" . $fname;

		$article->save();
    	return redirect('/admin/articles/created');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $article = Article::find($id);
        $article->delete();
        return redirect('/admin/articles/deleted');
    }

    public function change(Request $request) {
        $id = $request->id;
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.articles.change')->with('article', $article)->with('categories', $categories);
    }

    public function update(Request $request) {
        $id = $request->id;
        $article = Article::find($id);
        echo $article->id;

        $article->title = $request->title;
        $article->content = $request->content;
        $article->category = $request->category;

        $article->public = $request->public;
        if ($article->public)
            $article->public = true;
        else
            $article->public = false;
        $article->comments = $request->comments;
        if ($article->comments)
            $article->comments = true;
        else
            $article->comments = false;

        if ($request->hasFile('preview')) {
            $root=$_SERVER['DOCUMENT_ROOT']."/images/"; 
            $fname=$request->file('preview')->getClientOriginalName();
            $request->file('preview')->move($root,$fname); 
            $article->preview = "/images/" . $fname;
        }

        $article->save();
        return redirect('/admin/articles/updated');
    }
}
