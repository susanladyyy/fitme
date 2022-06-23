<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profileView(){
        $user = User::where('id', Auth::id())->first();
        $id = Auth::id();
        $transactions = DB::select(DB::raw("SELECT 
        cl.typeId AS 'type', 
        cl.name AS 'name', 
        cl.price AS 'price', 
        cl.color AS 'color', 
        cl.image AS 'image',
        cs.sizeName AS 'size',
        cd.quantity AS 'qty',
        cl.id AS 'clothID',
        cs.id AS 'sizeID'
        FROM transaction_headers c
        JOIN transaction_details cd
        ON c.id = cd.transactionId
        JOIN users u
        ON u.id = c.userId
        JOIN cloths cl
        ON cl.id = cd.clothId
        JOIN cloth_sizes cs
        ON cd.sizeID = cs.id
        WHERE u.id = $id
    "));

        return view('profile', compact(['user', 'transactions']));
    }
}
