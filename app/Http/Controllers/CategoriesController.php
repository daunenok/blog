<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function create() {
    	return view('admin.categories.create');
    }

    public function change(Request $request) {
        $id = $request->id;
        $category = Category::find($id);
        return view('admin.categories.change')->with('category', $category);
    }

    public function store(Request $request) {
    	$category = new Category;
        $category->title = $request->title;
        $category->save();
    	return redirect('/admin/categories/created');
    }

    public function delete(Request $request) {
    	$id = $request->id;
    	$category = Category::find($id);
		$category->delete();
    	return redirect('/admin/categories/deleted');
    }

    public function update(Request $request) {
        $id = $request->id;
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect('/admin/categories/updated');
    }
}
