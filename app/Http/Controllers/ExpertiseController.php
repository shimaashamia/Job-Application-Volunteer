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
    
  public function destroy($id)
  {
      $expertise = Expertise::find($id);
      $expertise->delete();
      return response()->json([
          'expertise'=>$expertise,
      ],200);
      $expertise->save();
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

         public function edit($id)
         {
             $expertise = Expertise::find($id);
             return response()->json([
                 'expertise'=>$expertise,
             ],200);
 
            }

    
 
     public function update(Request $request, $id)
     {
         $expertise =Expertise::find($id);
         $expertise->Workplace  = $request->Workplace ;
         $expertise->Start_Date = $request->Start_Date;
         $expertise->Expiry_date = $request->Expiry_date;
         $expertise->Occupationn = $request->Occupationn;
         $expertise->expertise_id = $request->expertise_id;
       //  $expertise->update();
        $expertise->save();
         return response()->json([
             'expertise'=>$expertise,
         ],200);
     }
}
