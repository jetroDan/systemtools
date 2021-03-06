<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    protected $table = "branches";

    protected $fillable = [
  
        
    ];
    public function hasCompany()
    {
        return $this->belongsTo(Companies::class, "id");
    }
}
