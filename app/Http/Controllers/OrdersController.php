<?php

namespace App\Http\Controllers;

Use App\Orders;
Use App\Users;
use App\SpareParts;
use App\Companies;
use App\Machines;
use App\StatusOrders;
use Exception;
use Validator;
use Illuminate\Http\Request;

class OrdersController extends Controller


{
 
    public function list() {
        $orders = Orders::all();
        $orders->load('hasUser');

        // $users = Users::find(1)->load('hasOrders');
    

        return response()->json([ 'orders' => $orders]);

    }
    public function store(Request $request){
        try {
            $body = request()->all();

            $validator = Validator::make($body,[
        
                'date' => 'required|max:100',
                'quantity' => 'required|max:100',
                'description' => 'required|max:100',
                'partnumber' => 'required|max:100',
                'serialnumber' => 'required|max:100',
                'sparepartsprice' => 'required|max:100',
                'subtotal' => 'required|max:100',
                'iva' => 'required|max:100',
                'total' => 'required|max:100',
                'users_id' => 'required|max:100',
                'spareparts_id' => 'required|max:100',
                'company_id' => 'required|max:100',
                'machines_id' => 'required|max:100',
                'statusorders_id' => 'required|max:100',
               
     
             ]);
             if ($validator->fails()) {
                 throw new Exception($validator->errors(),422);
             }
            //  $users = new Users;
            //  $spareparts = new SpareParts;
            //  $company = new Companies;
            //  $machines = new Machines;
            //  $status = new StatusOrders;
             $orders = new Orders; 
            
             $orders->date = $body['date'];
             $orders->quantity = $body['quantity'];
             $orders->description = $body['description'];
             $orders->partnumber = $body['partnumber'];
             $orders->serialnumber = $body['serialnumber'];
             $orders->sparepartsprice = $body['sparepartsprice'];
             $orders->subtotal = $body['subtotal'];
             $orders->iva = $body['iva'];
             $orders->total = $body['total'];
             $orders->users_id = $body['users_id'];
             $orders->spareparts_id = $body['spareparts_id'];
             $orders->company_id = $body['company_id'];
             $orders->machines_id = $body['machines_id'];
             $orders->statusorders_id = $body['statusorders_id'];
             $orders->save();

             return response()->json($orders);

        } catch (\Exception $e) {
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
        
                'date' => 'required|max:100',
                'quantity' => 'required|max:100',
                'description' => 'required|max:100',
                'partnumber' => 'required|max:100',
                'serialnumber' => 'required|max:100',
                'sparepartsprice' => 'required|max:100',
                'subtotal' => 'required|max:100',
                'iva' => 'required|max:100',
                'total' => 'required|max:100',
                'users_id' => 'required|max:100',
                'spareparts_id' => 'required|max:100',
                'company_id' => 'required|max:100',
                'machines_id' => 'required|max:100',
                'statusorders_id' => 'required|max:100',
               
     
             ]);
             if ($validator->fails()) {
                 throw new Exception($validator->errors(),422);
             }
             $orders = Orders::find($id);
             $orders->date = $body['date'];
             $orders->quantity = $body['quantity'];
             $orders->description = $body['description'];
             $orders->partnumber = $body['partnumber'];
             $orders->serialnumber = $body['serialnumber'];
             $orders->sparepartsprice = $body['sparepartsprice'];
             $orders->subtotal = $body['subtotal'];
             $orders->iva = $body['iva'];
             $orders->total = $body['total'];
             $orders->users_id = $body['users_id'];
             $orders->spareparts_id = $body['spareparts_id'];
             $orders->company_id = $body['company_id'];
             $orders->machines_id = $body['machines_id'];
             $orders->statusorders_id = $body['statusorders_id'];
             $orders->save();

             return response()->json([
                'status' => 'OK',
                'order' => $orders
            ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'No se pudo completar el registro',
            'message' => $e->getMessage()
        ],400);
    }
}
public function OrdersDelete($id){
    $orders = Orders::find($id);
    $orders->delete();
    return response()->json(null,204);
}

public function SearchOrders($id){
    $orders = Orders::find($id);
    $orders->load('hasUser');
    return response()->json([ 'order' => $orders]);
}


  
}
