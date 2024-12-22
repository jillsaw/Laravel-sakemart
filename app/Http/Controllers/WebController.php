<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MajorCategory;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
     {
        $categories = Category::all();
 
        $major_categories = MajorCategory::all();
 
        return view('web.index', compact('major_categories', 'categories'));
     }
}
