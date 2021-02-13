<?php

namespace App\Http\Controllers;

Use App\Users;
use Exception;
use Validator;
use Illuminate\Http\Request;

class UsersController extends Controller

{
    
        public function list(){
            $users = Users::all();
            return response()->json([
                'status' => 'OK',
                'users' => $users
            ]);
    
        }
}
