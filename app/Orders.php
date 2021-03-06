<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";

    protected $fillable = [
       
     
        
        
    ];

    public function hasUser()
    {
        return $this->belongsTo(Users::class, "users_id");
    }
}
