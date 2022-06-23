@extends('layouts.app')

@section('content')
<header class="masthead" style="height: 100vh; min-height: 500px; background-image: url('storage/shop/banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 35px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background-color: rgba(255,106,106, .3); border-radius: 20px;">
                <h1 class="fw-light" style="color: black; font-size: 9em; text-align: center;color: whitesmoke; font-weight: 900;">SHOP</h1>
            </div>
        </div>
    </div>    
</header>

<div class="filter" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="price">
        <form action="{{ route('price') }}" method="POST">
            @csrf
            <div class="container h-30">
                <div class="label" style="margin-bottom: 10px;">
                    <label for="">Item Maximum Price</label>
                </div>
                <div class="form-outline">
                    <input type="number" id="typeNumber" class="form-control" name="price">
                    <label class="form-label" for="typeNumber">Price</label>
                </div>
                <input type="submit" value="Filter Price" style="background-color: #FF6A6A; padding: 8px; border: none; border-radius: 5px; margin-top: 10px; color: white;">
            </div>
        </form>
    </div>
</div>

<div class="container h-10" style="margin-left: 12%; width: 80%; margin-bottom: 50px;">
    @foreach ($cloths as $cl)
    <div class="card" style="width: 15rem; display: inline-block; margin: 10px 10px 30px 10px;">
        @if ($cl->typeID == 1)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/shirt/{{ $cl->image }}" alt="Card image cap">
        @elseif ($cl->typeID == 2)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/t-shirt/{{ $cl->image }}" alt="Card image cap">
        @elseif($cl->typeID == 3)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/jacket/{{ $cl->image }}" alt="Card image cap">
        @endif
        
        <div class="card-body">
            <h5 class="card-title">{{ $cl->name }}</h5>
            <h6 class="card-title">Rp. {{ $cl->price }}</h6>
            <form action="{{ route('add-cart') }}" method="POST">
            @csrf
                <input type="number" name="qty" id="qty" placeholder="Quantity" class="form-control"style="margin-bottom: 10px">
                <select name="size" id="size" class="form-select" aria-label="Default select example" style="margin-bottom: 10px;">
                    <option value="0" selected>Choose Size</option>
                    @foreach ($sizes as $s)
                        <option value="{{ $s->id }}">{{ $s->sizeName }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="cloth" value="{{ $cl->id }}">
                <div class="add" style="text-align: center;">
                    <input type="submit" class="btn" value="Add to Cart" style="background-color: #FF6A6A; color: white;">
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection