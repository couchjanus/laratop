<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


// Все контроллеры должны наследоваться от базового класса 

class AboutController extends Controller {

    public function index()     {

       return view('about');
       // return view('about')->with('name', 'Janus Nic');
       // return view('about')->withName('Janus Nic With Name');
       // return view('about', ['name' => 'Janus Nic As Name']);

       // if (view()->exists('about')) {
       //  return view('about', ['name' => 'Janus Nic As Name']);
       //  }
    }
}
