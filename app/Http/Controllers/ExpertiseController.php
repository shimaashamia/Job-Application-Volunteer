<?php

namespace App\Http\Controllers;
use App\Expertise;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index(){
        $expertise=Expertise::all(); 
       return response()->json([
        'expertise' =>  $expertise,
    ], 200);    
  }
    
    public function store(Request $request){
        Validator::make($request->all(),[
            'Workplace'=>'require',
            'Start_Date'=>'require',
            'Expiry_date'=>'require',
            'Occupationn'=>'require',
            'expertise_id'=>'require',
           ]);
            $expertise=new Expertise();
             $expertise->fill($request->all());
              $expertise->save();
              return response()->json([
                'expertise'    => $expertise,
                'message' => 'Success'
            ], 200);
         }
}
