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
       ]);
      // dd($request);
    //  dd($request->all());
    // $Order = $request->input('Order');
    // $Number = $request->input('Number');
    // $Date = $request->input('Date');
    // $Full_Name = $request->input('Full_Name');
    // $Governorate = $request->input('Governorate');
    // $City = $request->input('City');
    // $Neighborhood = $request->input('Neighborhood');
    // $Address = $request->input('Address');
    // $The_Phone = $request->input('The_Phone');
    // $Call_Phone = $request->input('Call_Phone');
    // $Email = $request->input('Email');
    // $Occupation = $request->input('Occupation');

        $data=new Data();
        // $data->Order = $Order;
        // $data->Number = $Number;
        // $data->Date = $Date;
        // $data->Full_Name = $Full_Name;
        // $data->Governorate = $Governorate;
        // $data->City = $City;
        // $data->Neighborhood = $Neighborhood;
        // $data->Address = $Address;
        // $data->The_Phone = $The_Phone;
        // $data->Call_Phone = $Call_Phone;
        // $data->Email = $Email;
        // $data->Occupation = $Occupation;

         $data->fill($request->all());
          $data->save();
          return response()->json([
            'data'    => $data,
            'message' => 'Success'
        ], 200);
     }
}
