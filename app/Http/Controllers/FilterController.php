<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\ClothSize;
use App\Models\ClothType;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function categoryFilter(Request $request){
        $cloths = Cloth::with('clothType')->where('typeID', $request->category)->get();
        
        if($request->category == 0){
            return redirect('shop');
        }

        $category = ClothType::where('id', $request->category)->first();
        $categories = ClothType::all();
        $sizes = ClothSize::all();
        
        return view('category', compact('cloths', 'categories', 'sizes', 'category'));
    }

    public function priceFilter(Request $request){
        $cloths = Cloth::where('price', '<=', (int) $request->price)->get();

        // dd((int) $request->price);
        $categories = ClothType::all();
        $sizes = ClothSize::all();

        return view('price', compact('cloths', 'categories', 'sizes'));
    }
}
