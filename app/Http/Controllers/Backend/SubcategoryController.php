<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function AllSubcategory()
    {

        $subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all', compact('subcategories'));
    } // End Method

    public function AddSubCategory(){

        $categories = Category::latest()->get();
        return view('backend.subcategory.subcategory_add',compact('categories'));

    }// End Mehtod
}
