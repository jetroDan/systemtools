<?php

namespace App\Http\Controllers;

Use App\Branches;
use Exception;
use Validator;
use Illuminate\Http\Request;

class BranchesController extends Controller


{
    public function list() {
        $branches= Branches::all();
        $branches->load('hasCompany');

   

        return response()->json(['branches' => $branches]);
       
    }
}
