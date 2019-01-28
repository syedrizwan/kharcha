<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\DefaultCategory;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::where('user_id', auth()->id());

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

    public function add_default()
    {
        $dc = DefaultCategory::all();

        foreach ($dc as $cat) {
            $category = new Category();
            $category->title = $cat->title;
            $category->user_id = auth()->id();
            $category->save();
        }

        return redirect('home');
    }
}
