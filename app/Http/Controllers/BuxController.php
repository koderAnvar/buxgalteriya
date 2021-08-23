<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bux;

class BuxController extends Controller
{
    public function index() {
        
        $data = Bux::orderBy('type')->get();
        
        $doxod = Bux::where('type', 'Доход')->sum('sum');

        $rasxod = Bux::where('type', 'Расход')->sum('sum');
        

        $total = $doxod- $rasxod;
        return view('bux.index',compact('data','total'));


       
      }
    
  
    
      public function  create(){
        return view('bux.create');
      }
      public function store() {
    
    
       
        $bux = new Bux();
        $bux->type = request('type');
        $bux->category = request('category');
        $bux->sum = request('sum');    
        $bux->comment = request('comment');
        
        
        $bux->save();
    
        return redirect('/')->with('mssg', 'Данные отправлени!');
    
        
    
      }
      
      public function destroy($id) {
        $bux = Bux::findOrFail($id);
        $bux->delete();    
        return redirect('/bux');
    
    }

      
}
