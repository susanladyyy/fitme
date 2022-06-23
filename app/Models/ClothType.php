<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothType extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeName'
    ];

    public $timestamps = false;

    public function cloth(){
        return $this->hasMany(Cloth::class);
    }
}
