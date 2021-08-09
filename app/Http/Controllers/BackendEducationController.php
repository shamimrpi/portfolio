<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;


class BackendEducationController extends Controller
{
     
    public function index(){

       
        $educations = Education::all();
        return view('backend.education.index',compact('educations'));
    }

    public function create(){
        
        return view('backend.education.create');
    }
    public function store(Request $r){
        
        $education = new Education();
        $education->year = $r->year;
        $education->exam_name = $r->exam_name;
        $education->institute_name = $r->institute_name;
        $education->result = $r->result;
        $education->duration = $r->duration;
      
        $education->save();
        
        return redirect()->route('education')->with('message','data insert successfully');
    }
    public function edit($id){
       
        $education = Education::findOrFail($id);
        
        return view('backend.education.edit',compact('education'));
    }
     public function update(Request $r,$id){
        $education = Education::findOrFail($id);
       
        $education->year = $r->year;
        $education->exam_name = $r->exam_name;
        $education->institute_name = $r->institute_name;
        $education->result = $r->result;
        $education->duration = $r->duration;
        $education->save();
        
        return redirect()->route('education')->with('message','data update successfully');
    }
}
