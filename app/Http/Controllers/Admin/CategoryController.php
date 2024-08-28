<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("Admin/Category/listing",["categories"=>$categories]);
    }
    public function add(){
        return view("Admin/Category/add");
    }
    public function store(Request $request){
        
        // dd($request);
        // Validation
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,category_slug',
            'description' => 'required|string',
        ]);
        
        // Create a new category
        $category = new Category();
        $category->category_name = $request->categoryName;
        $category->category_slug = $request->slug;
        $category->category_added_by = Auth::user()->id;
        $category->category_description = $request->description;
        $category->save();

        // Redirect or respond with success message
        return redirect()->route('category.list')->with('success', 'Category created successfully!');
    }
}
