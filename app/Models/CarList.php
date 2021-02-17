<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarList extends Model
{
    use HasFactory;

    protected $fillable = ['id','car_brand', 'car_model'];

    public function users(){

        return $this->hasMany(User::class);
    }
}
