<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ATG extends Model
{
    protected $table = 'atg';

    
    protected $fillable = [
        'name','email','pincode'
    ];
}
