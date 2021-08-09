<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillsController extends Controller
{
    public function index(){

       
        $skills = Skill::all();
        return view('backend.skills.index',compact('skills'));
    }

    public function create(){
       
        return view('backend.skills.create');
    }
    public function store(Request $r){
        
        $skill = new Skill();
        $skill->fonts = $r->fonts;
      
        $skill->name = $r->name;
        $skill->save();
        
        return redirect()->route('skills')->with('message','data insert successfully');
    }
    public function edit($id){
       
        $skill = skill::findOrFail($id);
        
        return view('backend.skills.edit',compact('skill'));
    }
     public function update(Request $r,$id){
        $skill = Skill::findOrFail($id);
        $skill->fonts = $r->fonts;
        $skill->name = $r->name;
        $skill->save();
        
        return redirect()->route('skills')->with('message','data update successfully');
    }
    public function destroy($id){

        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('skills')->with('message','data deleted successfully');
       


    }
}
