<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = "companies";

    protected $fillable = [
       
        'name',
        'address'
     
        
        
    ];
    public function hasUserCompany()
    {
        return $this->belongsTo(Users::class, "id");
    }
}
