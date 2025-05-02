<?php

namespace App\Http\Controllers\SiteFive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class SiteFiveController extends Controller
{
    function master(){
        return view('SiteFive.master');
    }

    function home(){
        return view('SiteFive.home');
    }

    function services(){
        return view('SiteFive.services');
    }

    function portfolio(){
        return view('SiteFive.portfolio');
    }

    function about(){
        return view('SiteFive.about');
    }

    function team(){
        return view('SiteFive.team');
    }

    function contact(){
        return view('SiteFive.contact');
    }

    function ok(){
        return view('SiteFive.ok');
    }

    function viewcontact(){
        $contacts = Contact::all();
        return view('SiteFive.ViewContactFromDB' , compact('contacts'));
    }

    function postcontact(Request $request){
        $request->validate([
            'name' => 'required' , 
            'phone' => 'required',
            'email' => 'required',
            'massege' => 'required', 
            'image' => 'required'
        ]);

        $name = 'SiteFive_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('SiteFiveUploads') , $name);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'massege' => $request->massege,
            'image' => $name,
        ]);

        return redirect()->route('site5.ok');
    }

    function EditContact($id){
        $contact = Contact::find($id);
        return view('SiteFive.EditContact' , compact('contact'));
    }

    function update(Request $request){
        // dd($eequest->all());

        // $contact = Contact::find($request->id);
        $contact = Contact::query()->findOrFail($request->id);
        // $contact = Contact::query()-where('id' , $request->id)->get();

        if($request->hasFile('image')){
            $name = 'SiteFive_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('SiteFiveUploads') , $name);

            $contact->update([
                'image' => $name,
            ]);
        }

        $contact->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'massege' => $request->massege,
        ]);

        
        return redirect()->route('site5.viewcontact');
    }
}
