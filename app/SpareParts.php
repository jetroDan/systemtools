<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    protected $table = "spareparts";

    protected $fillable = [
       
        'name',
        'numberpart',
        'serialpart',
        'quuantity',
        'unit'
        
    ];
}
