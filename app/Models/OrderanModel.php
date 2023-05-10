<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderanModel extends Model
{
    use HasFactory;

    protected $table = 'tb_orderan';
    protected $fillable = [
        'id' , 'name' , 'alamat' , 'phone', 'qty' , 'total_price' , 'status' , 'created_at' , 'updated_at' 
    ];
}
