<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\heur;

class heurController extends Controller
{
    public function index()
      
    {

return heur::latest()->paginate(10);
    }
 public function update(Request $Request,$id)
{

$hm = heur::findOrFail($id);

	$this->validate($Request,[
      'jour' =>'required',
     'e1' =>'required',
 'p1' =>'required',
      'p2' =>'required',    

      's1' =>'required',
      'e2' =>'required',
 
  'p3' =>'required',
      'p4' =>'required',    

      's2' =>'required',


	]);

$hm->update($Request->all());

//return ['message'=>'update'];
}
}
