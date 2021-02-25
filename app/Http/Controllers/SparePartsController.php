<?php

namespace App\Http\Controllers;

Use App\SpareParts;
use Exception;
use Validator;
use Illuminate\Http\Request;

class SparePartsController extends Controller


{
    //Metodo GET Listar registro
    public function list() {
       $spareparts = SpareParts::all();
         
    //    return response()->json($spareparts);

       return response()->json([
          'status' => 'OK',
          'spareparts' => $spareparts
       ]);
   }

//Metodo POST Guardar
public function store(Request $request)
{

   try {

       $body = request()->all();

       $validator = Validator::make($body,[
       
          'name' => 'required|max:100',
          'numberpart' =>'required|max:100',
          'serialpart' => 'required|max:100',
          'quuantity' => 'required|max:100',
          'unit' => 'required|max:100'
        

       ]);
       if ($validator->fails()) {
           throw new Exception($validator->errors(),422);
       }

       $spareparts = new SpareParts;
       $spareparts->name = $body['name'];
       $spareparts->numberpart = $body['numberpart'];
       $spareparts->serialpart = $body['serialpart'];
       $spareparts->quuantity = $body['quuantity'];
       $spareparts->unit = $body['unit'];

       $spareparts->save();


       return response()->json($spareparts);
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
        'numberpart' =>'required|max:100',
        'serialpart' => 'required|max:100',
        'quuantity' => 'required|max:100',
        'unit' => 'required|max:100'
       ]);

       if ($validator->fails()) {
           throw new Exception($validator->errors(), 422);
       }

       $spareparts = SpareParts::find($id);
       $spareparts->name = $body['name'];
       $spareparts->numberpart = $body['numberpart'];
       $spareparts->serialpart = $body['serialpart'];
       $spareparts->quuantity = $body['quuantity'];
       $spareparts->unit = $body['unit'];
       $spareparts->save();


       
       return response()->json([
           'status' => 'OK',
           'user' => $spareparts
       ]);

   } catch(\Exception $e){
       return response()->json([
           'error' => 'No se pudo completar el registro',
           'message' => $e->getMessage()
       ],400);
   }
}

}

