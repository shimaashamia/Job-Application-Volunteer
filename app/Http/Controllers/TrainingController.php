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
         public function destroy($id)
         {
             $training = Training::find($id);
             $training->delete();
             return response()->json([
                 'training'=>$training,
             ],200);
             $training->save();
         }
         public function edit($id)
         {
             $training = Training::find($id);
             return response()->json([
                 'training'=>$training,
             ],200);
         }

         public function update(Request $request, $id)
         {
             $training =Training::find($id);
             $training->name_course  = $request->name_course ;
             $training->Place_get = $request->Place_get;
             $training->Date_get = $request->Date_get;
             $training->number_hours = $request->number_hours;
             $training->training_id = $request->training_id;
            // $training->update();
             $training->save();
             return response()->json([
                 'training'=>$training,
             ],200);
         }
     
}
