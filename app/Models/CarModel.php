<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = ['car_model_name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'ownerships', 'car_model_id', 'user_id')->withTimestamps();
    }
}
