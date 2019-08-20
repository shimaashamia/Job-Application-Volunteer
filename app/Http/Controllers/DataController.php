<?php

namespace App\Http\Controllers;
use App\Data;
use App\Academic;
use App\Expertise;
use App\Training;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Http\Request;



class DataController extends Controller
{

  public function index(){
    $data=Data::all(); 
    $academic=Academic::all(); 
    $expertise=Expertise::all(); 
    $training=Training::all(); 
    //dd($training);
    return response()->json([
      'data' =>  $data,
      'academic' =>  $academic,
      'expertise' =>  $expertise,
      'training' =>  $training,
  ], 200);

  //  dd($data);
//    return response()->json([
//     'data' =>  $data,
// ], 200);    
}
    public function store(Request $request){
   //  dd($request->all());
 
    Validator::make($request->all(),[
        'Order'=>'require',
        'Number'=>'require',
        'Date'=>'require',
        'Full_Name'=>'require',
        'Governorate'=>'require',
        'City'=>'require',
        'Neighborhood'=>'require',
        'Address'=>'require',
        'The_Phone'=>'require',
        'Call_Phone'=>'require',
        'Email'=>'require',
        'Occupation'=>'require',
        // 'ident_id'=>'require',
        // 'academic_id'=>'require',
        // 'expertise_id'=>'require',
        // 'training_id'=>'require',

       ]);
        $data=new Data();

         $data->fill($request->all());
          $data->save();
          return response()->json([
            'data'    => $data,
            'message' => 'Success'
        ], 200);
     }

     public function destroy($id)
     {
         $data = Data::find($id);
         $data->delete();
         return response()->json([
             'data'=>$data,
         ],200);
         $data->save();
     }

     public function edit($id)
    {
        $data=Data::with(['Academic','Expertise','Training'])->find($id);

     //   $data=Data::with(['Academic','Expertise','Training'])->orderBy('id','desc')->get();
      //  $data = Data::find($id);
        // $academic = Academic::all();
        // $expertise = Expertise::all();
        // $training = Training::all();
      
        return response()->json([
            'data'=>$data,
            // 'academic'=>$academic,
            // 'expertise'=>$expertise,
            // 'training'=>$training
        ],200);
    }

    public function update(Request $request, $id)
    {
        $data =Data::find($id);
        // Validator::make($request->all(),[
        //   'Order'=>'require',
        //   'Number'=>'require',
        //   'Date'=>'require',
        //   'Full_Name'=>'require',
        //   'Governorate'=>'require',
        //   'City'=>'require',
        //   'Neighborhood'=>'require',
        //   'Address'=>'require',
        //   'The_Phone'=>'require',
        //   'Call_Phone'=>'require',
        //   'Email'=>'require',
        //   'Occupation'=>'require',
        //  ]);
        //  $category->fill($request->all());
        //  $category->update();
        $data->Order = $request->Order;
        $data->Number = $request->Number;
        $data->Date = $request->Date;
        $data->Full_Name = $request->Full_Name;
        $data->Governorate = $request->Governorate;
        $data->City = $request->City;
        $data->Neighborhood = $request->Neighborhood;
        $data->Address = $request->Address;
        $data->The_Phone = $request->The_Phone;
        $data->Call_Phone = $request->Call_Phone;
        $data->Email = $request->Email;
        $data->Occupation = $request->Occupation;
        $data->save();
//        return redirect()->route('sponsor.index')->with('successMsg','sponsor successfully saved');
        return response()->json([
            'data'=>$data,
        ],200);
    }
}
