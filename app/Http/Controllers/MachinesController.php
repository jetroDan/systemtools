<?php

namespace App\Http\Controllers;

Use App\Machines;
use Exception;
use Validator;
use Illuminate\Http\Request;

class MachinesController extends Controller


{
    //Metodo GET Listar registro
    public function list() {
       $machines = Machines::all();
         
       return response()->json($machines);

    //    return response()->json([
    //       'status' => 'OK',
    //       'machines' => $machines
    //    ]);
   }

//Metodo POST Guardar
public function store(Request $request)
{

   try {

       $body = request()->all();

       $validator = Validator::make($body,[
       
          'name' => 'required|max:100',
          'brand' =>'required|max:100',
          'partnumber' => 'required|max:100',
          'serialnumber' => 'required|max:100'

       ]);
       if ($validator->fails()) {
           throw new Exception($validator->errors(),422);
       }

       $machines = new Machines;
       $machines->name = $body['name'];
       $machines->brand = $body['brand'];
       $machines->partnumber = $body['partnumber'];
       $machines->serialnumber = $body['serialnumber'];
     
       $machines->save();


       return response()->json($machines);
       //return response()->json([
       //    'status' => 'OK',
       //    'request' => request()->all()
       //]);
   }   catch(\Exception $e){
       return response()->json([
           'error' => 'No se pudo completar el registro',
           'message' => $e->getMessage()
       ], $e->getCode());
   }

   }
  

public function update($id)
//Metodo PUT Actualizar o hacer cambios
{
   try {

       $body = request()->all();

       $validator = Validator::make($body,[
        'name' => 'required|max:100',
        'brand' =>'required|max:100',
        'partnumber' => 'required|max:100',
        'serialnumber' => 'required|max:100'
       ]);

       if ($validator->fails()) {
           throw new Exception($validator->errors(), 422);
       }

       $machines = Machines::find($id);
       $machines->name = $body['name'];
       $machines->brand = $body['brand'];
       $machines->partnumber = $body['partnumber'];
       $machines->serialnumber = $body['serialnumber'];
       $machines->save();


       
       return response()->json([
           'status' => 'OK',
           'machines' => $machines
       ]);

   } catch(\Exception $e){
       return response()->json([
           'error' => 'No se pudo completar el registro',
           'message' => $e->getMessage()
       ],400);
   }
}

}

