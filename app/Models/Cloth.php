<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeID',
        'sizeID',
        'name',
        'image',
        'price',
        'color'
    ];

    public $timestamps = false;

    public function clothType(){
        return $this->belongsTo(ClothType::class);
    }

    public function transactionDetail(){
        return $this->belongsTo(TransactionDetail::class);
    }

    public function cartDetail(){
        return $this->belongsTo(CartDetail::class);
    }
}
