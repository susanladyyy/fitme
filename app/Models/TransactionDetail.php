<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable =[
        'transactionId',
        'clothId',
        'sizeID',
        'quantity'
    ];
    public $timestamps = false;

    public function transactionHeader(){
        return $this->belongsTo(TransactionHeader::class);
    }

    public function cloth(){
        return $this->hasMany(Cloth::class);
    }

    public function clothSize(){
        return $this->hasOne(ClothSize::class);
    }
}