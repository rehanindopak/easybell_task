<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomUser;

class CustomUserController extends Controller
{
   
 //
 function index()
 {
     $objdata = CustomUser::all();
     return response()->json($objdata);
 
}


function delete(Request $request)
 {
     $id = $request->id;

     if ($id == '') {
         echo 'error';
         exit;
     } 
     $obj_row =  CustomUser::where('id', $id)->delete();
     echo 'done';
     exit;
 }



 function save(Request $request)
 {
     $validations = $request->validate([
         'first_name' => 'required',
         'last_name' => 'required',
       
     ]);

     $data_array = array(
         'first_name' => $request['first_name'],
         'last_name' => $request['last_name'],
      
     );

     $result = CustomUser::create($data_array);
     return 'done';    
 }


 function edit($id)
 {
     if ($id == '') {
         return 'error';
     }
     // $dataobj = CustomUser::where('id', $id)->get();
     $dataobj = CustomUser::where('id', $id)->first();
     return response()->json($dataobj);
 
 }

 function update(Request $request)
 {
    
    
    $validations = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
      
    ]); 
    $data_array = array(
        'first_name' => $request['first_name'],
        'last_name' => $request['last_name'],
     
    ); 
    
     CustomUser::where(['id' => $request['id']])->update($data_array);
     return "done";
 }

}
