<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class BackendPortfolioController extends Controller
{
     public function index(){

       
        $portfolios = Portfolio::all();
        return view('backend.portfolio.index',compact('portfolios'));
    }

    public function create(){
        
        return view('backend.portfolio.create');
    }
    public function store(Request $r){
        
        $portfolio = new Portfolio();
        $portfolio->heading = $r->heading;
        if($r->file('image')){
                $file = $r->file('image');
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('upload/portfolio'),$fileName);
                $portfolio['image'] = $fileName;
            }
        $portfolio->link = $r->link;
        $portfolio->save();
        
        return redirect()->route('portfolio')->with('message','data insert successfully');
    }
    public function edit($id){
       
        $portfolio = Portfolio::findOrFail($id);
        
        return view('backend.portfolio.edit',compact('portfolio'));
    }
     public function update(Request $r,$id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->heading = $r->heading;
        if($r->file('image')){
                $file = $r->file('image');
                @unlink(('upload/portfolio/'.$employee->image));
                $fileName = rand(0000,9999).$file->getClientOriginalName();
                $file->move(('upload/portfolio'),$fileName);
                $portfolio['image'] = $fileName;
            }
        $portfolio->link = $r->link;
        $portfolio->save();
        
        return redirect()->route('portfolio')->with('message','data update successfully');
    }
    public function destroy($id){

        $portfolio = Portfolio::findOrFail($id);
        if($portfolio->image){
            @unlink(('upload/portfolio/'.$portfolio->image));
        }
        $portfolio->delete();
         return redirect()->route('portfolio')->with('message','data deleted successfully');


    }
}
