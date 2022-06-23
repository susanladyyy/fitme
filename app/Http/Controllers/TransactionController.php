<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function addTransaction(Request $request){
        $validate = $request->validate([
            'payment' => 'required|not_in:0'
        ]);

        TransactionHeader::create([
            'userId' => Auth::id(),
            'paymentId' => $validate['payment']
        ]);

        TransactionDetail::create([
            'transactionId' => $request->transactionId,
            'clothId' => $request->clothId,
            'sizeID' => $request->sizeId,
            'quantity' => $request->quantity
        ]);

        Cart::where('id', $request->cartid + 1)->delete();
        CartDetail::where('cartId', $request->cartid + 1)->delete();

        return redirect('profile');
    }
}
