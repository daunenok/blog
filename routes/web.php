<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Category;
use App\Article;
use App\Comment;

Route::get('/', function () {
    $articles = Article::where('public', '=', 1)->get();
    return view('welcome')->with('articles', $articles);
});

Route::get('/show/{id}', function ($id) {
    $article = Article::find($id);
    $category_id = $article->category;
    $category = Category::find($category_id)->title;
    $comments = Comment::where("article", "=", $article->id)->get();
    return view('article')->with('article', $article)->with('category', $category)->with('comments', $comments);
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/categories', function () {
	$categories = Category::all();
    return view('admin.categories.index')->with('categories', $categories);
});
Route::get('/admin/articles', function () {
	$articles = Article::all();
    return view('admin.articles.index')->with('articles', $articles);
});
Route::get('/admin/comments', function () {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    foreach ($comments as $comment) {
        $comment->article = Article::find($comment->article)->title;
    }
    return view('admin.comments.index')->with('comments', $comments);
});

Route::get('/admin/categories/created', function () {
    return view('admin.categories.created');
});
Route::get('/admin/categories/deleted', function () {
    return view('admin.categories.deleted');
});
Route::get('/admin/categories/updated', function () {
    return view('admin.categories.updated');
});

Route::get('/admin/articles/created', function () {
    return view('admin.articles.created');
});
Route::get('/admin/articles/deleted', function () {
    return view('admin.articles.deleted');
});
Route::get('/admin/articles/updated', function () {
    return view('admin.articles.updated');
});

Route::get('/admin/comments/deleted', function () {
    return view('admin.comments.deleted');
});
Route::get('/admin/comments/updated', function () {
    return view('admin.comments.updated');
});

Route::get('/admin/categories/create', 'CategoriesController@create');
Route::post('/admin/categories/store', 'CategoriesController@store');
Route::post('/admin/categories/delete', 'CategoriesController@delete');
Route::post('/admin/categories/change', 'CategoriesController@change');
Route::post('/admin/categories/update', 'CategoriesController@update');

Route::get('/admin/articles/create', 'ArticlesController@create');
Route::post('/admin/articles/store', 'ArticlesController@store');
Route::post('/admin/articles/delete', 'ArticlesController@delete');
Route::post('/admin/articles/change', 'ArticlesController@change');
Route::post('/admin/articles/update', 'ArticlesController@update');

Route::post('/comments/add', 'CommentsController@add');

Route::post('/admin/comments/delete', 'CommentsController@delete');
Route::post('/admin/comments/change', 'CommentsController@change');
Route::post('/admin/comments/update', 'CommentsController@update');

Auth::routes();
Route::get('/home', 'HomeController@index');
    