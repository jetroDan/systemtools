<?php

namespace App\Http\Controllers;

Use App\Companies;
use Exception;
use Validator;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
     //Metodo GET Listar registro
     public function list() {
        $companies = Companies::all();
          
        // return response()->json($companies);

        return response()->json([
           'status' => 'OK',
           'companies' => $companies
        ]);
    }

//Metodo POST Guardar
public function store(Request $request)
{
 
    try {

        $body = request()->all();

        $validator = Validator::make($body,[
        
           'name' => 'required|max:100',
           'address' =>'required|max:100',
         

        ]);
        if ($validator->fails()) {
            throw new Exception($validator->errors(),422);
        }

        $companies = new Companies;
        $companies->name = $body['name'];
        $companies->address = $body['address'];
      
        $companies->save();


        return response()->json($companies);
      
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
            'address' =>'required|max:100',
          
        ]);

        if ($validator->fails()) {
            throw new Exception($validator->errors(), 422);
        }

        $companies = Companies::find($id);
        $companies->name = $body['name'];
        $companies->address = $body['address'];
      
        $companies->save();


        
        return response()->json([
            'status' => 'OK',
            'companies' => $companies
        ]);

    } catch(\Exception $e){
        return response()->json([
            'error' => 'No se pudo completar el registro',
            'message' => $e->getMessage()
        ],400);
    }
}
public function companiesDelete($id){
    $companies = Companies::find($id);
    $companies->delete();
    return response()->json(null,204);

}

public function searchCompanie($id){
    $companies = Companies::find($id);
    return response($companies);
}

}