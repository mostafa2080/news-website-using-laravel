<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function AllSubcategory()
    {

        $subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all', compact('subcategories'));
    } // End Method
}
