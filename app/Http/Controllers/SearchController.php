<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\ClothSize;
use App\Models\ClothType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchByName(Request $request){
        $cloths = null;
        $categories = ClothType::all();
        $sizes = ClothSize::all();

        if($request->search != null){
            $cloths = Cloth::where('name', 'like', '%'.$request->search.'%')->get();

            return view('search', compact('categories', 'cloths', 'sizes'));
        }
    }
}
