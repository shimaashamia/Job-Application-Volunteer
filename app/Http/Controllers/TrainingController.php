<?php

namespace App\Http\Controllers;
use App\Training;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(){
        $training=Training::all(); 
       return response()->json([
        'training' =>  $training,
    ], 200);    
  }
    public function store(Request $request){
        Validator::make($request->all(),[
            'name_course'=>'require',
            'Place_get'=>'require',
            'Date_get'=>'require',
            'number_hours'=>'require',
            'training_id'=>'require',
           ]);
            $training=new Training();
             $training->fill($request->all());
              $training->save();
              return response()->json([
                'training'    => $training,
                'message' => 'Success'
            ], 200);
         }
}
