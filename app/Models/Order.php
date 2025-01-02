<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // data bisa ditambah
    protected $fillable = [
        'order_number',
        'book_id',
        'total_amount',
        'status',
    ];

    // data tidak bisa ditambah
    // protected $guards = [
    //     'id',
    // ];
}
