<?php

namespace App\Http\Controllers\SiteThree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteThreeController extends Controller
{
    function master(){
        return view('SiteThree.master');
    }

    function home(){
        return view('SiteThree.home');
    }

    function services(){
        return view('SiteThree.services');
    }

    function portfolio(){
        return view('SiteThree.portfolio');
    }

    function about(){
        return view('SiteThree.about');
    }

    function team(){
        return view('SiteThree.team');
    }

    function contact(){
        return view('SiteThree.contact');
    }

    function ok(){
        return view('SiteThree.ok');
    }

    function postcontact(Request $request){
        // return 'Hello World!!';
        // dd($request);
        // dd($request->all());

        $request->validate([
            // There are many of validattion such as ( required , nullable , ) 
            // This Links to expalne many of validattion: https://laravel.com/docs/12.x/validation#available-validation-rules
            // and search about 1- validattion in html 2- validattion in php laravel 
            'name' => 'required' , 
            'phone' => 'required',
            // to give some key more one of validattion there are two ways
            // 1- 'name' => ['required' , 'string' , 'min:3' , 'max:10']
            // 2- 'name' => 'required|string|min:3|max:10'
            'massege' => 'required|min:10|max:20' , 
            'image' => 'required'
        ]);

        // $request->file('image')->move(public_path('SiteThreeUploads'));
        
        // $request->file('image')->move(public_path('SiteThreeUploads') , $request->file('image')->getClientOriginalName());
        
        // dd(time());
        // dd(rand());
        
        // $request->file('image')->move(public_path('SiteThreeUploads') , time() . rand() . $request->file('image')->getClientOriginalName());
        
        // $request->file('image')->move(public_path('SiteThreeUploads') , time() . '_' . rand() . '_' . $request->file('image')->getClientOriginalName());
        
        /*
        $name = time() . '_' . rand() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('SiteThreeUploads') , $name);
        */

        /*
        $name = 'SiteThree_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('SiteThreeUploads') , $name);
        */

        return redirect()->route('site3.ok');
    }

    
}
