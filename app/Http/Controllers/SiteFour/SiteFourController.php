<?php

namespace App\Http\Controllers\SiteFour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class SiteFourController extends Controller
{
    function master(){
        return view('SiteFour.master');
    }

    function home(){
        return view('SiteFour.home');
    }

    function services(){
        return view('SiteFour.services');
    }

    function portfolio(){
        return view('SiteFour.portfolio');
    }

    function about(){
        return view('SiteFour.about');
    }

    function team(){
        return view('SiteFour.team');
    }

    function contact(){
        return view('SiteFour.contact');
    }

    function ok(){
        return view('SiteFour.ok');
    }

    function viewcontact(){
        $contacts = Contact::all();
        return view('SiteFour.ViewContactFromDB' , compact('contacts'));
    }

    function postcontact(Request $request){
        $request->validate([
            'name' => 'required' , 
            'phone' => 'required',
            'email' => 'required',
            'massege' => 'required', 
            'image' => 'required'
        ]);

        $name = 'SiteFour_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('SiteFourUploads') , $name);

        // DB::statement('INSERT INTO ......');
        
        /*
        DB::insert('contacts' , [

        ]);
        */

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'massege' => $request->massege,
            'image' => $name,
        ]);

        return redirect()->route('site4.ok');
    }
}
