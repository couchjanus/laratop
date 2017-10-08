<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticlesController extends Controller
{
    public function index()
    {

        // $results = DB::select('select * from articles');
        $results = DB::table('articles')->get();
        return view('articles.index')->with('results', $results);
    }

    public function list()
    {
        $results = DB::table('articles')->get();
        return view('articles.list')->with('results', $results);
    }

    public function chunkPosts()
    {
        $results = [];

        DB::table('articles')->orderBy('id')->chunk(10, function($articles) use (&$results)
        {
            $results[] = $articles->toArray();
        });

        return view('articles.chunk')->with('results', $results);
    }

    public function getById($id)
    {
        $result = DB::table('articles')->where('id', $id)->first();
        return view('articles.detail')->with('result', $result);
    }

}
