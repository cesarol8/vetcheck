<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'name',
        'address',
        'phone'
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}