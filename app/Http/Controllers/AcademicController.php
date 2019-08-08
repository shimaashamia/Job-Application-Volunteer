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
}
