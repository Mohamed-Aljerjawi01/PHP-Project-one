<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home(){
        // echo '<h1>Welcome to Home</h1>';
        return '<h1>Welcome to Home</h1>';
    }

    function about(){
        // echo '<h1>Welcome to About</h1>';
        return '<h1>Welcome to About</h1>';
    }

    function contact(){
        // echo '<h1>Welcome to Contact</h1>';
        return '<h1>Welcome to Contact</h1>';
    }

    function msg(){
        return view('SiteOne.msg');
    }

    function massege($id){
        return view('SiteOne.massege')->with('id' , $id);
    }


}
