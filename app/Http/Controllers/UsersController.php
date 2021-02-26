<?php

namespace App\Http\Controllers;

Use App\Users;
use Exception;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
     //Metodo GET Listar registro
     public function list() {
        $users = Users::all();
          
        return response()->json($users);

        // return response()->json([
        //    'status' => 'OK',
        //    'users' => $users
        // ]);
    }

//Metodo POST Guardar
public function store(Request $request)
{
 
    try {

        $body = request()->all();

        $validator = Validator::make($body,[
        
           'name' => 'required|max:100',
           'lastname' =>'required|max:100',
           'phone' => 'required|max:100',
           'email' => 'required|max:100',
           'address' => 'required|max:100',
           'password' => 'required|max:100',
           'nss' => 'required|max:100',
           'rfc' => 'required|max:100'

        ]);
        if ($validator->fails()) {
            throw new Exception($validator->errors(),422);
        }

        $user = new Users;
        $user->name = $body['name'];
        $user->lastname = $body['lastname'];
        $user->phone = $body['phone'];
        $user->email = $body['phone'];
        $user->address = $body['address'];
        // $user->password = $body['password'];
        $user->password =(isset($request['password']) ?  Hash::make($request['password']) : null);
        $user->nss = $body['nss'];
        $user->rfc = $body['rfc'];
        $user->save();


        return response()->json($user);
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
            'lastname' =>'required|max:100',
            'phone' => 'required|max:100',
            'email' => 'required|max:100',
            'address' => 'required|max:100',
            'password' => 'required|max:100',
            'nss' => 'required|max:100',
            'rfc' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            throw new Exception($validator->errors(), 422);
        }

        $user = Users::find($id);
        $user->name = $body['name'];
        $user->lastname = $body['lastname'];
        $user->phone = $body['phone'];
        $user->email = $body['phone'];
        $user->address = $body['address'];
        $user->password =(isset($body['password']) ?  Hash::make($body['password']) : null);
        // $user->password = $body['password'];
        $user->nss = $body['nss'];
        $user->rfc = $body['rfc'];
        $user->save();


        
        return response()->json([
            'status' => 'OK',
            'user' => $user
        ]);

    } catch(\Exception $e){
        return response()->json([
            'error' => 'No se pudo completar el registro',
            'message' => $e->getMessage()
        ],400);
    }
}

public function usersDelete($id){
    $users = Users::find($id);
    $users->delete();
    return response()->json(null,204);
}

}
