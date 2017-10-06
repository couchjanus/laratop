<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    // default method
    public function index()
    {
        $records = [];
        
        return view('posts.test');
        

        // $records = ['В дополнение к наследованию', 'шаблонов и отображению данных', 'Blade предоставляет удобные сокращения', 'для распространенных управляющих конструкций' ];

        // $posts = array();
        // for ($x = 1; $x <= 10; $x++)
        // {
        //     array_push($posts, new Post($x, 'Title '.$x, 'В дополнение к наследованию '.$x));
        // }
        
        // return view('posts.index')->with('records', $records)->with('posts', $posts);
    }
}
