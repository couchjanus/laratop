<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessagesController extends Controller
{
    public function index()
    {

        $results = DB::select('select * from messages');
        return view('messages.index')->with('results', $results);
    }

    public function add()
    {
        return view('messages.add');
    }


    public function insert()
    {
        for ($x = 1; $x <= 10; $x++)
        {
            $title = 'Title '.$x;
            $message = 'Blade предоставляет удобные сокращения '.$x;
            
            DB::insert('insert into messages (id, title, message) values (?, ?, ?)', [$x, $title, $message]);
        }

    }
}
