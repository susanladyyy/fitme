<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\ClothSize;
use App\Models\ClothType;
use Illuminate\Support\Facades\Route;

class ShopController extends Controller
{
    public function shopView(){
        $categories = ClothType::all();
        $cloths = Cloth::all();
        $sizes = ClothSize::all();

        return view('shop', compact('categories', 'cloths', 'sizes'));
    }

    public function customView(){
        return view('custom');
    }
}
