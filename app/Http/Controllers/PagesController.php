<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='home';
   return view('pages.index', compact('title'));

    }
    public function services (){
        $data=array(
            'title' => 'sevices',
            'sevices' => ['w','p','s']
        );
        return view('pages.about')->with($data);
     
         }

    
}
