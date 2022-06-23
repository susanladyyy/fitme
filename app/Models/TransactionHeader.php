<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'paymentId'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transactionHeader(){
        return $this->hasMany(TransactionDetail::class);
    }

    public function paymentType(){
        return $this->hasOne(PaymentType::class);
    }
}
