<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\PaymentType;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $size = Cart::all();

        $validate = $request->validate([
            'qty' => 'required|min:1',
            'size' => 'required|min:1'
        ]);

        Cart::create([
            'userId' => Auth::id(),
        ]);

        CartDetail::create([
            'cartId' => count($size) + 1,
            'clothId' => $request->cloth,
            'sizeID' => $validate['size'],
            'quantity' => $validate['qty']
        ]);

        return redirect('shop');
    }

    public function cartView(){
        $id = Auth::id();
        $pt = PaymentType::all();
        $transactions = TransactionHeader::all();
        $carts = DB::select(DB::raw("SELECT 
            cl.typeId AS 'type', 
            cl.name AS 'name', 
            cl.price AS 'price', 
            cl.color AS 'color', 
            cl.image AS 'image',
            cs.sizeName AS 'size',
            cd.quantity AS 'qty',
            cl.id AS 'clothID',
            cs.id AS 'sizeID'
            FROM carts c
            JOIN cart_details cd
            ON c.id = cd.cartId
            JOIN users u
            ON u.id = c.userId
            JOIN cloths cl
            ON cl.id = cd.clothId
            JOIN cloth_sizes cs
            ON cd.sizeID = cs.id
            WHERE u.id = $id
        "));

        return view('cart', compact('carts', 'pt', 'transactions'));
    }
}
