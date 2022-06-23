<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'cartId',
        'clothId',
        'sizeID',
        'quantity'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function cloth(){
        return $this->hasMany(Cloth::class);
    }

    public function clothSize(){
        return $this->hasOne(ClothSize::class);
    }
    
    public $timestamps = false;
}
