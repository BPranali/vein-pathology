<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = '_orders';
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address', 'pincode','packages', 'include_test','charges', 'images', 'user_id'];
}
