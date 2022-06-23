<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'sizeName'
    ];

    public $timestamps = false;

    public function cloth(){
        return $this->hasMany(Cloth::class);
    }

    public function cartDetail(){
        return $this->belongsTo(CartDetail::class);
    }

    public function transactionDetail(){
        return $this->belongsTo(TransactionDetail::class);
    }
}
