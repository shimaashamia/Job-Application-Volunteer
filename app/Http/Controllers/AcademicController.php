<?php

namespace App\Http\Controllers;
use App\Academic;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AcademicController extends Controller
{

    public function index(){
        $academic=Academic::all(); 
       return response()->json([
        'academic' =>  $academic,
    ], 200);    
  }


    public function store(Request $request){
        Validator::make($request->all(),[
            'University'=>'require',
            'Specialization'=>'require',
            'average'=>'require',
            'Graduation_Year'=>'require',
             'academic_id'=>'require',
           ]);
            $academic=new Academic();
             $academic->fill($request->all());
              $academic->save();
              return response()->json([
                'academic'    => $academic,
                'message' => 'Success'
            ], 200);
         }

         public function destroy($id)
         {
             $academic = Academic::find($id);
             $academic->delete();
             return response()->json([
                 'academic'=>$academic,
             ],200);
             $academic->save();
         }

         public function edit($id)
         {
             $academic = Academic::find($id);
             return response()->json([
                 'academic'=>$academic,
             ],200);
            }


            public function update(Request $request, $id)
            {
                $academic =Academic::find($id);
                $academic->University  = $request->University ;
                $academic->Specialization = $request->Specialization;
                $academic->average = $request->average;
                $academic->Graduation_Year = $request->Graduation_Year;
                $academic->academic_id  = $request->academic_id ;
               // $expertise->Governorate = $request->Governorate;
              // $academic->update();
                $academic->save();
                return response()->json([
                    'academic'=>$academic,
                ],200);
            }
}
