<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::with('latestPost')->take(20)->get();
       return view('categories.index', compact('categories'));
    }

 
    public function single($id)
    {
    
        $category = Category::find($id);
        
        $latestPost = $category->posts()->latest()->get();
        
        return view('categories.single', compact('latestPost'));
    }


}
