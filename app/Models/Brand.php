<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['brand_name'];

    public function users(){

        return $this->belongsToMany(User::class, 'ownerships',
            'brand_id', 'user_id');
    }

}
