<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class BackendAboutController extends Controller
{
    //
    public function index(){
        $about = About::where('id',1)->first();

        return view('backend.about.index',compact('about'));
    }

    public function create(){
        
        return view('backend.about.create');
    }
    public function store(Request $r){

        $about = new About();
        $about->name = $r->name;
         if($r->file('image')){
                $file = $r->file('image');
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('upload/portfolio'),$fileName);
                $about['image'] = $fileName;
            }
        $about->age = $r->age;
        $about->qualification = $r->qualification;
        $about->post = $r->post;
        $about->lang = $r->lang;
        $about->experience = $r->experience;
        $about->project = $r->project;
        $about->save();
        
        return redirect()->route('about')->with('message','data insert successfully');
    }
    public function edit($id){
       
        $about = About::findOrFail($id);
        
        return view('backend.about.edit',compact('about'));
    }
     public function update(Request $r,$id){
        $about = About::findOrFail($id);
        $about->name = $r->name;
         if($r->file('image')){
                $file = $r->file('image');
                 @unlink(('upload/portfolio/'.$employee->image));
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('upload/portfolio'),$fileName);
                $about['image'] = $fileName;
        }
        $about->age = $r->age;
        $about->qualification = $r->qualification;
        $about->post = $r->post;
        $about->lang = $r->lang;
        $about->experience = $r->experience;
        $about->project = $r->project;
        $about->save();
        
        return redirect()->route('about')->with('message','data update successfully');
    }

}
