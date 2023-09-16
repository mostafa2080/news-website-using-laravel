<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {

        $categories = Category::latest()->get();
        return view('backend.category.category_all', compact('categories'));
    } // End Method
    public function AddCategory()
    {
        return view('backend.category.category_add');
    } // End Method

    public function StoreCategory(Request $request)
    {

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),

        ]);


        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);
    } // End Mehtod
}
