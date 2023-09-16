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

    public function AddSubCategory()
    {

        $categories = Category::latest()->get();
        return view('backend.subcategory.subcategory_add', compact('categories'));
    } // End Mehtod

    public function StoreSubcategory(Request $request)
    {

        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),

        ]);


        $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.subcategory')->with($notification);
    } // End Mehtod


    public function EditSubcategory($id)
    {

        $categories = Category::latest()->get();
        $subcategory = Subcategory::findOrFail($id);
        return view('backend.subcategory.subcategory_edit', compact('categories', 'subcategory'));
    } // End Mehtod

    public function UpdateSubcategory(Request $request)
    {

        $subcat_id = $request->id;

        Subcategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),

        ]);


        $notification = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.subcategory')->with($notification);
    } // End Mehtod

}
