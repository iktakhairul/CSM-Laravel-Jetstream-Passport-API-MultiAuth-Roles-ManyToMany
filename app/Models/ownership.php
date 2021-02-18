<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ownership extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'brand_id'];
}
