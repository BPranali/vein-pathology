<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['packages', 'include_test', 'image', 'charges', 'test_name'];

    protected $casts = [
        'test_name' => 'array',
    ];
    protected $attributes = [
        'test_name' => '[]',
    ];
}
