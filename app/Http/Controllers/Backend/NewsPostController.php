<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\NewsPost;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NewsPostController extends Controller
{
    public function AllNewsPost()
    {

        $allnews = NewsPost::latest()->get();
        return view('backend.news.all_news_post', compact('allnews'));
    } // End Method


    public function AddNewsPost()
    {

        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $adminuser = User::where('role', 'admin')->latest()->get();
        return view('backend.news.add_news_post', compact('categories', 'subcategories', 'adminuser'));
    } // End Method



}
