<?php

namespace App\Http\Controllers;
use App\Identify;
use App\Data;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class NumberController extends Controller
{
  public function index(){
    $data=Data::all(); 
  //  dd($data);
   return response()->json([
    'data' =>  $data,
], 200);    
}
  public function search(Request $request){
   // dd($request->id_number);
   // dd('id_number');
  // dd("hhhhhhh");
 // $id_number = Input::get ( 'id_number' );
 
  //$id_number=  Input::get('id_number');

  //search that student in Database
   //$identify= Identify::find($request->id_number)->count();
  // $identify = Identify::query()->where($request->id_number);
  //$identify = Identify::query()->where('id_number', 'LIKE', "%{$request->id_number}%");
  //$request->id_number
  $identify = Identify::where('id_number',$request->id_number)->get();
  //$identify = Identify::where('id_number',$id_number)->get();
  if(count($identify) > 0)
      return response()->json([
             'identify' =>  $identify,
            'status' => 200,
            //'data' =>  $data,
        ]);
  else   return response()->json([
    
    'No Details found. Try to search again !'
], 404);
     // return view('welcome')->withDetails($user)->withQuery ( $id_number );
  //return view ('welcome')->withMessage('No Details found. Try to search again !');
}
//   public function index(){

//     $number=Number::all(); 
//   //dd($info_driver);
//    //$response=array('driver_list','product','info_driver');

//    return response()->json([
//     'number' =>  $number,
// ], 200);
//   }

// public function index()
// {
//   //dd('hggg');
//     $number = Number::all();
//  return view('pages.numbers', compact('number'));
 
// }

// public function create()
// {
//   //dd('hggg');
//     return views('pages.numbers');
// }
  // public function create()
  // {
  //   return view('numbers', compact('numbers'));
  //   //return view('n');
  //  // return response()->json('n');
  //   //return response()->json(['numbers','succssful']);
  //     return view('numbers');
  // }
  // public function show($id_number){
  //   dd(id_number);
  //   $number = Identify::where('id_number', '=', Input::get('id_number'));
  //   if ($number === null) {
  //       return 'exists';
  //    } else {
  //       return 'done';
  //     }
  //   }
      // try {
      //     $number = Number::findOrFail($id);
      //     $numberId = $number->books()->count();
      //     if ($numberId > 0)
      //         return response()->json(['status' => 404, 'noooo']);
      //     return response()->json(['status' => 200, 'succssful']);
      // } catch (ModelNotFoundException $modelNotFoundException) {
      //     dd($modelNotFoundException->getMessage());
      // }

  //     public function search($id_number){
  //         if ( Number::find($id_number ) === null ) {

  //           return "user does not exist";
  //       }
  //       else {
  //           $user = Number::find( $id_number );
        
  //           return $user;
  //       }

  //       }
  // }
  
  // 'message' => trans('category.error.can_not_delete')
 // 'message' => trans('category.error.can_delete')



    // public function store(Request $request){
        
    //      Validator::make($request->all(),[
    //        'Inputnumder'=>'require',
    //       ]);
    //        $number=new Number();
    //         $number->fill($request->all());
    //          $number->save();
    //          return response()->json([
    //            'number'    => $number,
    //            'message' => 'Success'
    //        ], 200);
    //     }

        
}
