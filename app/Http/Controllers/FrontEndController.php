<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Education;
use App\Message;
use App\Portfolio;
use App\Skill;

class FrontEndController extends Controller
{
    public function index(){
        $data['about'] = About::where('id',1)->first();
        $data['contacts'] = Contact::all();
        $data['educations'] = Education::all();
        $data['portfolios'] = Portfolio::all();
        $data['skills'] = Skill::all();
        return view('front.index',$data);
    }

    public function messageStore(Request $r){
        $message = new Message();
        $message->name = $r->name;
        $message->email = $r->email;
        $message->phone = $r->phone;
        $message->description = $r->description;
        $message->save();
        return response()->json($message);

    }
    public function showAll(){
        $messages = Message::orderBy('id','DESC')->get();
        return view('backend.message.index',compact('messages'));
    }
     public function show($id){
        $message = Message::findOrFail($id);
        return view('backend.message.show',compact('message'));
    }

     public function destroy($id){
        $message = Message::findOrFail($id);
        $message->delete();
         return redirect()->route('sms.showAll')->with('message','data deleted successfully');
    }
}
