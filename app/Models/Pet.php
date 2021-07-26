<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'name',
        'type',
        'owner_id',
        'date_of_birth',
        'photo'

    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
