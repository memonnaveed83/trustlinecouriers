<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'city',
        'qty',
        'price',
        'totalamount',
    ];
}
