<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
     public function index(){

       
        $contacts = Contact::all();
        return view('backend.contacts.index',compact('contacts'));
    }

    public function create(){
       
        return view('backend.contacts.create');
    }
    public function store(Request $r){
        
        $contact = new Contact();
        $contact->fonts = $r->fonts;
      
        $contact->name = $r->name;
        $contact->save();
        
        return redirect()->route('contacts')->with('message','data insert successfully');
    }
    public function edit($id){
       
        $contact = Contact::findOrFail($id);
        
        return view('backend.contacts.edit',compact('contact'));
    }
     public function update(Request $r,$id){
        $contact = Contact::findOrFail($id);
        $contact->fonts = $r->fonts;
        $contact->name = $r->name;
        $contact->save();
        
        return redirect()->route('contacts')->with('message','data update successfully');
    }
    public function destroy($id){

        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts')->with('message','data deleted successfully');
       


    }
}
