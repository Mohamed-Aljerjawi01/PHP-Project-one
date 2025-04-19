<?php

namespace App\Http\Controllers\SiteTwo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteTwoController extends Controller
{
    function master(){
        return view('SiteTwo.master');
    }

    function home(){
        return view('SiteTwo.home');
    }

    function services(){
        return view('SiteTwo.services');
    }

    function portfolio(){
        return view('SiteTwo.portfolio');
    }

    function about(){
        return view('SiteTwo.about');
    }

    function team(){
        return view('SiteTwo.team');
    }

    function contact(){
        return view('SiteTwo.contact');
    }

    function postcontact(Request $request){
        // return 'Hello World!!';
        // dd($request);
        dd($request->all());
    }
}
