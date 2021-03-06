<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    protected $fillable = [
       
        'name',
        'lastname',
        'phone',
        'email',
        'address',
        'password',
        'nss' ,
        'rfc'
        
        
    ];

    public function hasOrders()
    {
        return $this->hasMany(Orders::class);
    }
}
