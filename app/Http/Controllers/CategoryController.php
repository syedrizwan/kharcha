<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = session('user')->categories()->where('deleted', false); // Category::where('user_id', auth()->id());

        return view('categories.list')->with(
          ['title' => 'Categories',
          'categories_menu' => 'active',
          'categories' => $categories->get()]
        );
    }

    public function create()
    {
        return view('category')->with(
          ['title' => 'New Category',
          'categories_menu' => 'active']
        );
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->user_id = auth()->id();
        $category->save();

        return redirect('category');
    }
}
